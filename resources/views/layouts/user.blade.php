<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta property="og:locale" content="ja_JP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./asset/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet" href="./assets/css/common/animate.css" />
    <link rel="stylesheet" href="./assets/css/common/slick-theme.min.css">
    <link rel="stylesheet" href="./assets/css/common/slick.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="./asset/vendor/libs/jquery/jquery.js"></script>
    <title>兵庫県自動車整備振興会 求人サイト</title>
</head>

<body>
    <header>
        <div class="wrap">
            <div class="header-logo">
                <a href="{{ route('top') }}">
                    <img src="./assets/img/logo.svg" alt="兵庫県自動車整備振興会 求人サイト">
                </a>
            </div>
            <div class="right">
                <div class="menu-part">
                    <a href="{{ route('top') }}" class="menu-item">ホーム</a>
                    <a href="{{ route('rule.index') }}" class="menu-item">利用規約</a>
                    <a href="{{ route('job.index') }}" class="menu-item">求人情報一覧</a>
                </div>
                <a href="{{ route('login') }}" class="login-btn">事業者ログイン</a>

                <button id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <nav id="menu">
        <ul class="nav-menu">
            <li>
                <a href="{{ route('top') }}" class="nav-home">ホーム</a>
            </li>
            <li>
                <a href="{{ route('rule.index') }}" class="nav-rule">利用規約</a>
            </li>
            <li>
                <a href="{{ route('job.index') }}" class="nav-recruit">求人情報一覧</a>
            </li>
            <li class="nav-login">
                <a href="{{ route('login') }}" class="nav-login-btn">事業者ログイン</a>
            </li>
        </ul>
    </nav>

    @yield('content')

    <footer>
        <div class="footer01">
            <div class="wrap">
                <div class="header-logo">
                    <a href="{{ route('top') }}">
                        <img src="./assets/img/footer-logo.svg" alt="兵庫県自動車整備振興会 求人サイト">
                    </a>
                </div>
                <div class="right">
                    <div class="menu-part">
                        <a href="{{ route('top') }}" class="menu-item">ホーム</a>
                        <a href="{{ route('rule.index') }}" class="menu-item">利用規約</a>
                        <a href="{{ route('job.index') }}" class="menu-item">求人情報一覧</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer02">
            <p>Copyright © Hyogo Automobile Service Promotion Association.</p>
        </div>
    </footer>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./asset/vendor/libs/toastr/toastr.js"></script>
    <script src="./asset/js/ui-toasts.js"></script>
</body>

</html>
