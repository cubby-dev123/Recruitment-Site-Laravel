@extends('layouts.user')
@section('content')
    <main>
        <section class="fv">
            <figure class="fv-img pc">
                <img src="./assets/img/fv.webp" alt="兵庫県自動車整備振興会 求人サイト">
            </figure>
            <figure class="fv-img sp">
                <img src="./assets/img/fv_sp.webp" alt="兵庫県自動車整備振興会 求人サイト">
            </figure>
            <p class="fv-txt">兵庫県自動車整備振興会<span>求人専用サイト</span></p>
        </section>

        <section class="sec01">
            <div class="container wrap">
                <div class="container01">
                    <div class="address-search wow fadeInUp" data-wow-delay=".5s">
                        <div class="title">
                            <figure class="main-icon">
                                <img src="./assets/img/main-icon.svg" alt="エリアから求人を探す">
                            </figure>
                            <p class="txt">エリアから求人を探す</p>
                        </div>
                        <div class="content">
                            <figure class="map">
                                <img src="./assets/img/map.png" alt="map">
                            </figure>
                            <div class="item item01">
                                <div class="parent">
                                    <a href="{{ route('job.index', ['province' => '但馬']) }}">但馬</a>
                                </div>
                                <div class="children">
                                    <a href="{{ route('job.index', ['city' => '豊岡市']) }}">豊岡市</a>
                                    <a href="{{ route('job.index', ['city' => '香美町']) }}">香美町</a>
                                    <a href="{{ route('job.index', ['city' => '新温泉町']) }}">新温泉町</a>
                                    <a href="{{ route('job.index', ['city' => '養父市']) }}">養父市</a>
                                    <a href="{{ route('job.index', ['city' => '朝来市']) }}">朝来市</a>
                                </div>
                            </div>
                            <div class="item item02">
                                <div class="parent">
                                    <a href="{{ route('job.index', ['province' => '播磨']) }}">播磨</a>
                                </div>
                                <div class="children">
                                    <p>
                                        <a href="{{ route('job.index', ['city' => '明石市']) }}">明石市</a>
                                        <a href="{{ route('job.index', ['city' => '加古川市']) }}">加古川市</a>
                                        <a href="{{ route('job.index', ['city' => '西脇市']) }}">西脇市</a>
                                        <a href="{{ route('job.index', ['city' => '三木市']) }}">三木市</a>
                                        <a href="{{ route('job.index', ['city' => '高砂市']) }}">高砂市</a>
                                        <a href="{{ route('job.index', ['city' => '小野市']) }}">小野市</a>
                                        <a href="{{ route('job.index', ['city' => '加西市']) }}">加西市</a>
                                        <a href="{{ route('job.index', ['city' => '加東市']) }}">加東市</a>
                                    </p>
                                    <p>
                                        <a href="{{ route('job.index', ['city' => '多可町']) }}">多可町</a>
                                        <a href="{{ route('job.index', ['city' => '稲美町']) }}">稲美町</a>
                                        <a href="{{ route('job.index', ['city' => '播磨町']) }}">播磨町</a>
                                        <a href="{{ route('job.index', ['city' => '姫路市']) }}">姫路市</a>
                                        <a href="{{ route('job.index', ['city' => '相生市']) }}">相生市</a>
                                        <a href="{{ route('job.index', ['city' => 'たつの市']) }}">たつの市</a>
                                    </p>
                                    <p>
                                        <a href="{{ route('job.index', ['city' => '赤穂市']) }}">赤穂市</a>
                                        <a href="{{ route('job.index', ['city' => '宍粟市']) }}">宍粟市</a>
                                        <a href="{{ route('job.index', ['city' => '福崎町']) }}">福崎町</a>
                                        <a href="{{ route('job.index', ['city' => '神河町']) }}">神河町</a>
                                        <a href="{{ route('job.index', ['city' => '市川町']) }}">市川町</a>
                                        <a href="{{ route('job.index', ['city' => '太子町']) }}">太子町</a>
                                        <a href="{{ route('job.index', ['city' => '上郡町']) }}">上郡町</a>
                                    </p>
                                    <a href="{{ route('job.index', ['city' => '佐用町']) }}">佐用町</a>
                                </div>
                            </div>
                            <div class="item item03">
                                <div class="parent">
                                    <a href="{{ route('job.index', ['province' => '丹波']) }}">丹波</a>
                                </div>
                                <div class="children">
                                    <a href="{{ route('job.index', ['city' => '丹波市']) }}">丹波市</a>
                                    <a href="{{ route('job.index', ['city' => '丹波篠山市']) }}">丹波篠山市</a>
                                </div>
                            </div>
                            <div class="item item04">
                                <div class="parent">
                                    <a href="{{ route('job.index', ['province' => '神戸']) }}">神戸</a>
                                </div>
                                <div class="children">
                                    <p>
                                        <a href="{{ route('job.index', ['city' => '東灘区']) }}">東灘区</a>
                                        <a href="{{ route('job.index', ['city' => '灘区']) }}">灘区</a>
                                        <a href="{{ route('job.index', ['city' => '中央区']) }}">中央区</a>
                                        <a href="{{ route('job.index', ['city' => '兵庫区']) }}">兵庫区</a>
                                        <a href="{{ route('job.index', ['city' => '北区']) }}">北区</a><br class="sp">
                                        <a href="{{ route('job.index', ['city' => '長田区']) }}">長田区</a>
                                        <a href="{{ route('job.index', ['city' => '須磨区']) }}">須磨区</a>
                                    </p>
                                    <p>
                                        <a href="{{ route('job.index', ['city' => '垂水区']) }}">垂水区</a>
                                        <a href="{{ route('job.index', ['city' => '西区']) }}">西区</a>
                                    </p>
                                </div>
                            </div>
                            <div class="item item05">
                                <div class="parent">
                                    <a href="{{ route('job.index', ['province' => '阪神']) }}">阪神</a>
                                </div>
                                <div class="children">
                                    <p>
                                        <a href="{{ route('job.index', ['city' => '尼崎市']) }}">尼崎市</a>
                                        <a href="{{ route('job.index', ['city' => '西宮市']) }}">西宮市</a>
                                        <a href="{{ route('job.index', ['city' => '芦屋市']) }}">芦屋市</a>
                                        <a href="{{ route('job.index', ['city' => '伊丹市']) }}">伊丹市</a>
                                        <a href="{{ route('job.index', ['city' => '宝塚市']) }}">宝塚市</a>
                                        <a href="{{ route('job.index', ['city' => '川西市']) }}">川西市</a>
                                        <a href="{{ route('job.index', ['city' => '三田市']) }}">三田市</a>
                                    </p>
                                    <a href="{{ route('job.index', ['city' => '猪名川町']) }}">猪名川町</a>
                                </div>
                            </div>
                            <div class="item item06">
                                <div class="parent">
                                    <a href="{{ route('job.index', ['province' => '淡路']) }}">淡路</a>
                                </div>
                                <div class="children">
                                    <a href="{{ route('job.index', ['city' => '淡路市']) }}">淡路市</a>
                                    <a href="{{ route('job.index', ['city' => '洲本市']) }}">洲本市</a>
                                    <a href="{{ route('job.index', ['city' => '南あわじ市']) }}">南あわじ市</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="degree-search wow fadeInUp" data-wow-delay=".8s">
                        <div class="title">
                            <figure class="main-icon">
                                <img src="./assets/img/main-icon.svg" alt="資格から求人を探す">
                            </figure>
                            <p class="txt">資格から求人を探す</p>
                        </div>
                        <div class="content">
                            @foreach ($degrees as $degree)
                                <a class="item" href="{{ route('job.index', ['degree' => $degree->degree]) }}">
                                    <figure class="item-icon">
                                        <img src="./assets/img/man-icon.svg" alt="{{ $degree->degree }}">
                                    </figure>
                                    <p class="item-txt">{{ $degree->degree }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="container02 wow fadeInUp" data-wow-delay=".5s">
                    <div class="title">
                        <figure class="main-icon">
                            <img src="./assets/img/main-icon.svg" alt="職種から求人を探す">
                        </figure>
                        <p class="txt">職種から求人を探す</p>
                    </div>
                    <div class="content">
                        @foreach ($jobs as $job)
                            <a class="item"
                                href="{{ route('job.index', ['job' => $job->job_type]) }}">{{ $job->job_type }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="sec02 wrapper">
            <div class="title wow fadeInUp" data-wow-delay=".5s">
                <figure class="main-icon">
                    <img src="./assets/img/main-icon.svg" alt="新着の求人">
                </figure>
                <p class="txt">新着の求人</p>
            </div>
            <div class="content  wow fadeInUp" data-wow-delay=".8s">
                @foreach ($main as $item)
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
                                            <span style="padding: 0 5px;">/</span>
                                        @endif
                                        <span class="em-type">{{ $item->em_type }}</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="view  wow fadeInUp" data-wow-delay=".5s">
                <a href="{{ route('job.index') }}" class="view-btn">もっと見る</a>
            </div>
        </section>
    </main>
@endsection
