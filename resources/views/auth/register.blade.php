
<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./asset/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./asset/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
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
    <!-- Vendor -->
    <link rel="stylesheet" href="./asset/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="./asset/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="./asset/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="./asset/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./asset/js/config.js"></script>
  </head>

  <style>
    .app-brand-logo img {
      width: 65%;
      margin: auto;
    }
  </style>
  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="{{route("top")}}" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img src="./assets/img/logo.svg" alt="">
                </span>
              </a>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-2">
              <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                <div class="form-floating form-floating-outline mb-3">
                  @csrf
                  <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    placeholder="メールを入力してください。"
                    value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  <label for="email">メール</label>
                </div>
                <div class="mb-3">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          id="password"
                          class="form-control @error('password') is-invalid @enderror"
                          name="password"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="password" required autocomplete="new-password" />
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        <label for="password">パスワード</label>
                      </div>
                      <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  @csrf
                  <input
                    type="text"
                    class="form-control @error('c_name') is-invalid @enderror"
                    id="c_name"
                    name="c_name"
                    placeholder="事業所名を入力してください。"
                    value="{{ old('c_name') }}" required autocomplete="c_name" autofocus />
                    @error('c_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  <label for="c_name">事業所名</label>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  @csrf
                  <input
                    type="text"
                    class="form-control @error('c_address') is-invalid @enderror"
                    id="c_address"
                    name="c_address"
                    placeholder="所在地を入力してください。"
                    value="{{ old('c_address') }}" required autocomplete="c_address" autofocus />
                    @error('c_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  <label for="c_address">所在地</label>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  @csrf
                  <input
                    type="text"
                    class="form-control @error('c_member') is-invalid @enderror"
                    id="c_member"
                    name="c_member"
                    placeholder="担当者を入力してください。"
                    value="{{ old('c_member') }}" required autocomplete="c_member" autofocus />
                    @error('c_member')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  <label for="c_member">担当者</label>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  @csrf
                  <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="c_member_email"
                    name="c_member_email"
                    placeholder="担当者メールを入力してください。"
                    value="{{ old('c_member_email') }}" required autocomplete="c_member_email" autofocus />
                    @error('c_member_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  <label for="email">担当者メール</label>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  @csrf
                  <input
                    type="text"
                    class="form-control @error('c_phone') is-invalid @enderror"
                    id="c_phone"
                    name="c_phone"
                    placeholder="電話番号を入力してください。"
                    value="{{ old('c_phone') }}" required autocomplete="c_phone" autofocus />
                    @error('c_phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  <label for="c_phone">電話番号</label>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  @csrf
                  <input
                    type="text"
                    class="form-control @error('c_site') is-invalid @enderror"
                    id="c_site"
                    name="c_site"
                    placeholder="自社サイトを入力してください。"
                    value="{{ old('c_site') }}"  autocomplete="c_site" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                  <label for="c_site">自社サイト</label>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">新規登録</button>
                </div>
                  <p class="text-center">
                    <span>すでに登録されていますか？</span>
                    <a href="{{route('login')}}">
                          <span>ログインはこちら</span>
                    </a>
                  </p>
              </form>
            </div>
          </div>
          <!-- /Login -->
        </div>
      </div>
    </div>

    <!-- / Content -->
    </body>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./asset/vendor/libs/jquery/jquery.js"></script>
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
    <script src="./asset/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="./asset/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="./asset/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="./asset/js/main.js"></script>

    <!-- Page JS -->
    <script src="./asset/js/pages-auth.js"></script>
  
</html>
