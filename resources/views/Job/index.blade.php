@extends('layouts.user')
@section('content')
    <main>
        <div class="title page-title wow fadeInUp" data-wow-delay=".5s">
            <figure class="main-icon">
                <img src="./assets/img/main-icon.svg" alt="求人一覧">
            </figure>
            <p class="txt">求人一覧</p>
        </div>
        <section class="sec001 wow fadeInUp" data-wow-delay=".8s">
            <div class="wrapper">
                <div class="box">
                    <input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked>
                    <input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
                    <input type="radio" class="tab-toggle" name="tab-toggle" id="tab3">
                    <ul class="tab-list">
                        <li class="tab-item">
                            <figure class="tab-img">
                                <img src="./assets/img/address-icon.svg" alt="勤務地から探す">
                            </figure>
                            <p class="tab-txt">勤務地から探す</p>
                        </li>
                        <li class="tab-item">
                            <figure class="tab-img">
                                <img src="./assets/img/job-icon.svg" alt="職種から探す">
                            </figure>
                            <p class="tab-txt">職種から探す</p>
                        </li>
                        <li class="tab-item">
                            <figure class="tab-img">
                                <img src="./assets/img/degree-icon.svg" alt="資格・雇用形態から探す">
                            </figure>
                            <p class="tab-txt">資格・雇用形態から探す</p>
                        </li>
                    </ul>

                    <div class="tab-container">
                        <div class="tab-content">
                            <div class="_left">
                                <div class="item">
                                    <div class="_bg">
                                        <a
                                            href="{{ route('job.index', ['province' => '但馬', 'city' => $city, 'job' => $job, 'degree' => $degree]) }}">但馬</a>
                                    </div>
                                    <div class="_sm">
                                        <a
                                            href="{{ route('job.index', ['city' => '豊岡市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">豊岡市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '香美町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">香美町</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '新温泉町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">新温泉町</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '養父市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">養父市</a>
                                        <a href="{{ route('job.index', ['city' => '朝来市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">朝来市</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="_bg">
                                        <a
                                            href="{{ route('job.index', ['province' => '播磨', 'city' => $city, 'job' => $job, 'degree' => $degree]) }}">播磨</a>
                                    </div>
                                    <div class="_sm">
                                        <a
                                            href="{{ route('job.index', ['city' => '明石市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">明石市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '加古川市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">加古川市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '西脇市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">西脇市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '三木市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">三木市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '高砂市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">高砂市</a><br
                                            class="sp">
                                        <a
                                            href="{{ route('job.index', ['city' => '小野市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">小野市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '加西市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">加西市</a>
                                        <a href="{{ route('job.index', ['city' => '加東市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">加東市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '多可町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">多可町</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '稲美町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">稲美町</a><br
                                            class="sp">
                                        <a
                                            href="{{ route('job.index', ['city' => '播磨町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">播磨町</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '姫路市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">姫路市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '相生市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">相生市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => 'たつの市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">たつの市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '赤穂市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">赤穂市</a><br
                                            class="sp">
                                        <a href="{{ route('job.index', ['city' => '宍粟市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">宍粟市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '福崎町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">福崎町</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '神河町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">神河町</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '市川町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">市川町</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '太子町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">太子町</a><br
                                            class="sp">
                                        <a
                                            href="{{ route('job.index', ['city' => '上郡町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">上郡町</a>
                                        <a href="{{ route('job.index', ['city' => '佐用町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">佐用町</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="_bg">
                                        <a
                                            href="{{ route('job.index', ['province' => '丹波', 'city' => $city, 'job' => $job, 'degree' => $degree]) }}">丹波</a>
                                    </div>
                                    <div class="_sm">
                                        <a
                                            href="{{ route('job.index', ['city' => '丹波市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">丹波市</a>
                                        <a href="{{ route('job.index', ['city' => '丹波篠山市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">丹波篠山市</a>
                                    </div>
                                </div>
                            </div>
                            <div class="_right">
                                <div class="item">
                                    <div class="_bg">
                                        <a
                                            href="{{ route('job.index', ['province' => '神戸', 'city' => $city, 'job' => $job, 'degree' => $degree]) }}">神戸</a>
                                    </div>
                                    <div class="_sm">
                                        <a
                                            href="{{ route('job.index', ['city' => '東灘区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">東灘区</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '灘区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">灘区</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '中央区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">中央区</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '兵庫区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">兵庫区</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '北区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">北区</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '長田区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">長田区</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '須磨区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">須磨区</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '垂水区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">垂水区</a>
                                        <a href="{{ route('job.index', ['city' => '西区', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">西区</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="_bg">
                                        <a
                                            href="{{ route('job.index', ['province' => '阪神', 'city' => $city, 'job' => $job, 'degree' => $degree]) }}">阪神</a>
                                    </div>
                                    <div class="_sm">
                                        <a
                                            href="{{ route('job.index', ['city' => '尼崎市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">尼崎市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '西宮市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">西宮市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '芦屋市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">芦屋市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '伊丹市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">伊丹市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '宝塚市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">宝塚市</a><br
                                            class="sp">
                                        <a
                                            href="{{ route('job.index', ['city' => '川西市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">川西市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '三田市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">三田市</a>
                                        <a href="{{ route('job.index', ['city' => '猪名川町', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">猪名川町</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="_bg">
                                        <a
                                            href="{{ route('job.index', ['province' => '淡路', 'city' => $city, 'job' => $job, 'degree' => $degree]) }}">淡路</a>
                                    </div>
                                    <div class="_sm">
                                        <a
                                            href="{{ route('job.index', ['city' => '淡路市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">淡路市</a>
                                        <a
                                            href="{{ route('job.index', ['city' => '洲本市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}">洲本市</a>
                                        <a href="{{ route('job.index', ['city' => '南あわじ市', 'province' => $province, 'job' => $job, 'degree' => $degree]) }}"
                                            class="_no">南あわじ市</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content tab-content1">
                            @foreach ($all_job as $job_item)
                                <a class="item1"
                                    href="{{ route('job.index', ['province' => $province, 'city' => $city, 'job' => $job_item->job_type, 'degree' => $degree]) }}">{{ $job_item->job_type }}</a>
                            @endforeach
                        </div>
                        <div class="tab-content tab-content1">
                            @foreach ($all_degree as $degree_item)
                                <a href="{{ route('job.index', ['province' => $province, 'city' => $city, 'job' => $job, 'degree' => $degree_item->degree]) }}"
                                    class="item1">{{ $degree_item->degree }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec002  wow fadeInUp" data-wow-delay="1.1s">
            <div class="content wrapper">
                @foreach ($data as $item)
                    @if ($item->switch_input == 0)
                        <div class="content-item">
                            <a href="{{ route('item.index', ['id' => $item->id]) }}">
                                <figure class="item-img">
                                    <img src="{{ $item->img_1 ? $item->img_1 : './assets/img/no_img.png' }}" alt="{{ $item->c_name }}">
                                </figure>
                                <div class="item-txt">
                                    <p class="company">{{ $item->c_name }}</p>
                                    <p class="message">{{ $item->t_message }}</p>
                                    <div class="address">
                                        <figure class="address-icon">
                                            <img src="./assets/img/address-icon.svg" alt="address">
                                        </figure>
                                        <p class="address-txt">{{ $item->c_address }}</p>
                                    </div>
                                    <div class="salary">
                                        <figure class="salary-icon">
                                            <img src="./assets/img/salary-icon.svg" alt="salary">
                                        </figure>
                                        <p class="salary-txt">{{ $item->pay_amount }}</p>
                                    </div>
                                    <p class="degree">
                                        <span class="job-type" style="word-spacing: 10px;">{{ $item->job_type }}</span>
                                        @if ($item->job_type)
                                            <span style="padding: 0 10px;">/</span>
                                        @endif
                                        <span class="em-type">{{ $item->em_type }}</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </main>
@endsection
