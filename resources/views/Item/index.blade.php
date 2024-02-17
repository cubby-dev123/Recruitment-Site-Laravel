@extends('layouts.user')
@section('content')
    <main>
        <div class="title page-title wow fadeInUp" data-wow-delay=".5s">
            <figure class="main-icon">
                <img src="./assets/img/main-icon.svg" alt="{{ $data->c_name }}">
            </figure>
            <p class="txt">{{ $data->c_name }}</p>
        </div>
        <section class="sec0001 wrapper wow fadeInUp" data-wow-delay=".8s">
            <div class="message">
                <p class="message-title">{{ $data->t_message }}</p>
                <p class="message-content">
                    {{ $data->c_message }}
                </p>
            </div>
            <div class="image-part slick-content">
                <div class="image-item">
                    <img src="{{ $data->img_1 ? $data->img_1 : './assets/img/no_img.png' }}" alt="{{ $data->c_name }}">
                </div>
                <div class="image-item">
                    <img src="{{ $data->img_2 ? $data->img_2 : './assets/img/no_img.png' }}" alt="{{ $data->c_name }}">
                </div>
                <div class="image-item">
                    <img src="{{ $data->img_3 ? $data->img_3 : './assets/img/no_img.png' }}" alt="{{ $data->c_name }}">
                </div>
            </div>
        </section>
        <section class="sec0002">
            <div class="wrap">
                <div class="container">
                    <div class="item item-1 wow fadeInUp" data-wow-delay=".5s">
                        <div class="title">
                            <figure class="main-icon">
                                <img src="./assets/img/main-icon.svg" alt="募集要項">
                            </figure>
                            <p class="txt">募集要項</p>
                        </div>
                        <div class="content-item">
                            <table>
                                <tr>
                                    <td class="_ca">職種</td>
                                    <td class="_cd" style="word-spacing: 15px;">{{ $data->job_type }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">雇用形態</td>
                                    <td class="_cd">{{ $data->em_type }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">採用人数</td>
                                    <td class="_cd">{{ $data->em_num }}名</td>
                                </tr>
                                <tr>
                                    <td class="_ca">勤務時間</td>
                                    <td class="_cd">{{ $data->work_time }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">休憩時間</td>
                                    <td class="_cd">{{ $data->rest_time }}分</td>
                                </tr>
                                <tr>
                                    <td class="_ca">支給額</td>
                                    <td class="_cd">{{ $data->pay_amount }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">休日</td>
                                    <td class="_cd">{{ $data->rest_day }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">加入保険</td>
                                    <td class="_cd" style="word-spacing: 15px;">{{ $data->insurance }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">通勤手当</td>
                                    <td class="_cd">{{ $data->commuting_allowance }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">学歴</td>
                                    <td class="_cd">{{ $data->academic_history }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">資格</td>
                                    <td class="_cd" style="word-spacing: 15px;">{{ $data->degree }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">その他</td>
                                    <td class="_cd">{{ $data->other }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="item item-2 wow fadeInUp" data-wow-delay=".8s">
                        <div class="title">
                            <figure class="main-icon">
                                <img src="./assets/img/main-icon.svg" alt="企業情報">
                            </figure>
                            <p class="txt">企業情報</p>
                        </div>
                        <div class="content-item">
                            <table>
                                <tr>
                                    <td class="_ca">事業者名</td>
                                    <td class="_cd">{{ $data->c_name }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">所在地</td>
                                    <td class="_cd">{{ $data->c_address }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">担当者</td>
                                    <td class="_cd">{{ $data->c_member }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">電話番号</td>
                                    <td class="_cd">{{ $data->c_phone }}</td>
                                </tr>
                                <tr>
                                    <td class="_ca">自社サイト</td>
                                    <td class="_cd"><a href="{{ $data->c_site }}"
                                            target="_blank">{{ $data->c_site }}</a></td>
                                </tr>
                                <!-- <tr>
                               <td class="_ca">支給額</td>
                               <td class="_cd">月給000000円～000000円</td>
                            </tr> -->
                            </table>
                        </div>
                    </div>
                    <div class="bid wow fadeInUp" data-wow-delay=".5s">
                        <a href="{{ route('form.index', ['id' => $data->id]) }}" class="bid-btn">応募する</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
