@extends('layouts.user')
@section('content')
    <main class="wrap">
        <div class="title page-title">
            <figure class="main-icon">
                <img src="./assets/img/main-icon.svg" alt="応募フォーム">
            </figure>
            <p class="txt">応募フォーム</p>
        </div>
        <div class="company-info">
            <p class="company-name">
                <span class="_cn">応募先企業名：</span>
                <span class="_dn">{{ $data->c_name }}</span>
            </p>
            <p class="company-address">
                <span class="_ad">勤務地：</span>
                <span class="_dd">{{ $data->c_address }}</span>
            </p>
        </div>
        <hr>
        <div class="bid-form">
            <form action="{{ route('form.sendMail') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $data->email }}" name="receiver" />
                <input type="hidden" value="{{ $manager->email }}" name="manager" />
                <input type="hidden" value="{{ $data->c_name }}" name="c_name" />
                <input type="hidden" value="{{ $data->c_address }}" name="c_address" />
                <input type="hidden" value="{{ $data->c_phone }}" name="c_phone" />

                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">お名前（漢字）</span>
                        <span class="need">必須</span>
                    </div>
                    <div class="_bottom">
                        <label for="surname">姓</label>
                        <input type="text" name="surname01" class="_half" id="surname01">
                        <label for="name">名</label>
                        <input type="text" name="name01" class="_half" id="name01">
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">お名前（ふりがな）</span>
                        <span class="need">必須</span>
                    </div>
                    <div class="_bottom">
                        <label for="surname">せい</label>
                        <input type="text" name="surname02" class="_half" id="surname02">
                        <label for="name">めい</label>
                        <input type="text" name="name02" class="_half" id="name02">
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">ご住所</span>
                        <span class="need">必須</span>
                    </div>
                    <div class="_bottom">
                        <input type="text" name="address" class="_full" id="address">
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">メールアドレス</span>
                    </div>
                    <div class="_bottom">
                        <input type="email" name="email" class="_full" id="email">
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">電話番号</span>
                        <span class="need">必須</span>
                    </div>
                    <div class="_bottom">
                        <input type="text" name="phone_number" class="_full" id="phone_number">
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">性別</span>
                        <span class="need">必須</span>
                    </div>
                    <div class="_bottom flex-bottom">
                        <input type="radio" name="gender" id="man" value="男性">
                        <label for="man">男性</label>
                        <input type="radio" name="gender" id="woman" value="女性">
                        <label for="woman">女性</label>
                        <input type="radio" name="gender" id="other" value="その他">
                        <label for="other">その他</label>
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">年齢</span>
                        <span class="need">必須</span>
                    </div>
                    <div class="_bottom">
                        <input type="number" name="age" class="_halff" id="age">
                        <label for="age">歳</label>
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">希望職種</span>
                    </div>
                    <div class="_bottom">
                        <input type="text" name="hopeful_job" class="_full" id="hopeful_job">
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">雇用形態</span>
                    </div>
                    <div class="_bottom flex-bottom">
                        <input type="radio" name="job_type" id="main-job" value="正社員">
                        <label for="man">正社員</label>
                        <input type="radio" name="job_type" id="part-job" value="正社員以外">
                        <label for="man">正社員以外</label>
                    </div>
                </div>
                <div class="form-item">
                    <div class="_top">
                        <span class="_top01">保有資格</span>
                    </div>
                    <div class="_bottom _last">
                        <div class="_last01">
                            <div class="_flex">
                                <input type="checkbox" name="degree[]" value="自動車整備士1級">
                                <label for="">自動車整備士1級</label>
                            </div>
                            <div class="_flex">
                                <input type="checkbox" name="degree[]" value="自動車整備士2級">
                                <label for="">自動車整備士2級</label>
                            </div>
                            <div class="_flex">
                                <input type="checkbox" name="degree[]" value="自動車整備士3級">
                                <label for="">自動車整備士3級</label>
                            </div>
                            <div class="_flex">
                                <input type="checkbox" name="degree[]" value="自動車検査員">
                                <label for="">自動車検査員</label>
                            </div>
                            <div class="_flex">
                                <input type="checkbox" name="degree[]" value="危険物取扱者乙種4類">
                                <label for="">危険物取扱者乙種4類</label>
                            </div>
                        </div>
                        <div class="_last02">
                            <div class="_flex">
                                <input type="checkbox" name="degree[]" value="大型自動車免許（第一種）">
                                <label for="">大型自動車免許（第一種）</label>
                            </div>
                            <div class="_flex _other">
                                <label for="">その他資格</label>
                                <input type="text" name="other_degree" id="other_degree" class="_full">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" id="submit-btn" value="送信する">
                </div>
            </form>
        </div>
    </main>
    @if (session('error'))
        <script>
            $(document).ready(function() {
                toastr.error('{{ session('error') }}');
            });
        </script>
    @endif
@endsection
