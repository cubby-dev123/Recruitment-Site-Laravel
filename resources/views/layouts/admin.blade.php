<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="./asset/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>兵庫県自動車整備振興会 求人サイト</title>

    <meta name="description" content="" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./asset/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="./asset/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="./asset/vendor/fonts/fontawesome.css" />
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="./asset/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./asset/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./asset/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./asset/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="./asset/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="./asset/vendor/libs/dropzone/dropzone.css" />
    <link rel="stylesheet" href="./asset/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet" href="./asset/vendor/libs/animate-css/animate.css" />

    <link rel="stylesheet" href="./asset/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="./asset/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="./asset/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="./asset/vendor/libs/swiper/swiper.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="./asset/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <!-- Page -->
    <link rel="stylesheet" href="./asset/vendor/css/pages/page-auth.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="./asset/vendor/css/pages/cards-statistics.css" />
    <link rel="stylesheet" href="./asset/vendor/css/pages/cards-analytics.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="./asset/css/custom.css">

    <!-- Helpers -->
    <script src="./asset/vendor/js/helpers.js"></script>

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="./asset/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./asset/js/config.js"></script>
    <script src="./asset/vendor/libs/jquery/jquery.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('home') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="./assets/img/admin-logo.svg" alt="">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold mt-3">兵庫県自動車整備振興会<br>求人サイト</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                                fill="currentColor" fill-opacity="0.6" />
                            <path
                                d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                                fill="currentColor" fill-opacity="0.38" />
                        </svg>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    @if (Auth::user()->role == 1)
                        <li class="menu-item">
                            <a href="{{ route('home') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                                <div data-i18n="ユーザー管理">ユーザー管理</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('jobManage') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                                <div data-i18n="職種管理">職種管理</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('degreeManage') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
                                <div data-i18n="資格管理">資格管理</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('basicManage') }}" class="menu-link">
                                <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                                <div data-i18n="求人情報管理">求人情報管理</div>
                            </a>
                        </li>
                    @endif
                    @auth
                        @if (Auth::user()->role == 2)
                            <li class="menu-item">
                                <a href="{{ route('mainInfo', ['c_name' => auth()->user()->c_name]) }}" class="menu-link">
                                    <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                                    <div data-i18n="求人情報管理">求人情報管理</div>
                                </a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </aside>
            <!-- / Menu -->

            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="mdi mdi-menu mdi-24px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Style Switcher -->
                            <li class="nav-item me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                                    href="javascript:void(0);">
                                    <i class="mdi mdi-24px"></i>
                                </a>
                            </li>
                            <!--/ Style Switcher -->

                            <!-- Log Out -->
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout me-2"></i>
                                    <span class="align-middle">ログアウト</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                            <!--/ Log Out -->
                        </ul>
                    </div>
                </nav>

                @yield('content')

                <div class="layout-overlay layout-menu-toggle"></div>
                <div class="drag-target"></div>
            </div>
        </div>
    </div>
</body>

<!-- build:js assets/vendor/js/core.js -->
<script src="./asset/vendor/libs/popper/popper.js"></script>
<script src="./asset/vendor/js/bootstrap.js"></script>
<script src="./asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="./asset/vendor/libs/node-waves/node-waves.js"></script>

<script src="./asset/vendor/libs/hammer/hammer.js"></script>
<script src="./asset/vendor/libs/i18n/i18n.js"></script>
<script src="./asset/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="./asset/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="./asset/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="./asset/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="./asset/vendor/libs/swiper/swiper.js"></script>
<script src="./asset/vendor/libs/dropzone/dropzone.js"></script>
<script src="./asset/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="./asset/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="./asset/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
<script src="./asset/vendor/libs/toastr/toastr.js"></script>

<!-- Main JS -->
<script src="./asset/js/main.js"></script>

<!-- Page JS -->
<script src="./asset/js/dashboards-crm.js"></script>
<script src="./asset/js/forms-file-upload.js"></script>
<script src="./asset/js/pages-auth.js"></script>
<script src="./asset/js/ui-toasts.js"></script>

</html>
