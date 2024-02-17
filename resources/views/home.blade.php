@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Content -->
            <div class="text-end">
                <button type="button" class="btn btn-primary btn-fab demo waves-effect waves-light" id="add_btn">
                    <span class="tf-icons mdi mdi-checkbox-marked-circle-outline me-1"></span>追加
                </button>
            </div>
            <div class="card mt-3">
                <h5 class="card-header">ユーザー管理</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Eメール</th>
                                    <th>事業者名</th>
                                    <th>所在地</th>
                                    <th>担当者</th>
                                    <th>担当者メール</th>
                                    <th>電話番号</th>
                                    <th>ホームページ</th>
                                    <th>役割</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody id="user_tbody">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->c_name }}</td>
                                        <td>{{ $user->c_address }}</td>
                                        <td>{{ $user->c_member }}</td>
                                        <td>{{ $user->c_member_email }}</td>
                                        <td>{{ $user->c_phone }}</td>
                                        <td>{{ $user->c_site }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-icon btn-primary waves-effect waves-light edit_btn"
                                                data-val="{{ $user->id }}">
                                                <span class="<tf-icons mdi mdi-pencil-outline"></span>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-danger waves-effect waves-light delete_btn"
                                                data-val="{{ $user->id }}">
                                                <span class="<tf-icons mdi mdi-delete-outline"></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>

            <!--add_modal -->
            <div class="modal" id="add_modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel3">
                                新規登録
                            </h4>
                            <button type="button" class="cancel_btn btn-close"></button>
                        </div>
                        <div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="email" id="new_email" class="form-control" name="new_email"
                                                placeholder="xxxx@xxx.xx" />
                                            <label for="メール">メール</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="new_password" type="password" name="new_password"
                                                class="form-control" placeholder="xxxxxxxx" />
                                            <label for="パスワード">パスワード</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="confirm_password" type="password" name="confirm_password"
                                                class="form-control" placeholder="xxxxxxxx" />
                                            <label for="パスワード確認">パスワード確認</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="c_name" type="text" name="c_name" class="form-control"
                                                placeholder="xxx" />
                                            <label for="事業者名">事業者名</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="c_address" type="text" name="c_address" class="form-control"
                                                placeholder="xxxxxxx" />
                                            <label for="所在地">所在地</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="c_member" type="text" name="c_member" class="form-control"
                                                placeholder="xxx" />
                                            <label for="担当者">担当者</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="email" id="c_member_email" class="form-control"
                                                name="c_member_email" placeholder="xxxx@xxx.xx" />
                                            <label for="担当者メール">担当者メール</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="c_phone" type="text" name="c_phone" class="form-control"
                                                placeholder="xxxxxxx" />
                                            <label for="電話番号">電話番号</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="c_site" type="url" name="c_site" class="form-control"
                                                placeholder="https://xxxx" />
                                            <label for="自社サイト">自社サイト</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating form-floating-outline">
                                        <div class="card mb-4">
                                            <div class="csv-check">
                                                <input class="form-check-input" type="checkbox" id="csv_check" />
                                                <h5 class="card-header">csvファイルとして登録する。</h5>
                                            </div>

                                            <div class="card-body">
                                                <div class="tar-img" id="tar_img">
                                                    <img src="./asset/img/csv.png" id="csv_img" alt="">
                                                </div>
                                                <input type="hidden" name="csvdata" id="csvdata">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="close_btn btn btn-label-secondary">
                                        閉じる
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit_btn">
                                        保存
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add_modal /-->

            <!-- update_modal -->
            <div class="modal" id="update_modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                更新
                            </h4>
                            <button type="button" class="cancel_btn btn-close"></button>
                        </div>
                        <div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="email" id="update_email" class="form-control" name="email"
                                                placeholder="xxxx@xxx.xx" />
                                            <label for="メール">メール</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_password" type="password" name="password"
                                                class="form-control" placeholder="xxxxxxxx" />
                                            <label for="パスワード">パスワード</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_confirm_password" type="password"
                                                name="update_confirm_password" class="form-control"
                                                placeholder="xxxxxxxx" />
                                            <label for="パスワード確認">パスワード確認</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_c_name" type="text" name="update_c_name"
                                                class="form-control" placeholder="xxx" />
                                            <label for="事業者名">事業者名</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_c_address" type="text" name="update_c_address"
                                                class="form-control" placeholder="xxxxxxx" />
                                            <label for="所在地">所在地</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_c_member" type="text" name="update_c_member"
                                                class="form-control" placeholder="xxx" />
                                            <label for="担当者">担当者</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="email" id="update_c_member_email" class="form-control"
                                                name="update_c_member_email" placeholder="xxxx@xxx.xx" />
                                            <label for="担当者メール">担当者メール</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_c_phone" type="text" name="update_c_phone"
                                                class="form-control" placeholder="xxxxxxx" />
                                            <label for="電話番号">電話番号</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_c_site" type="url" name="update_c_site"
                                                class="form-control" placeholder="https://xxxx" />
                                            <label for="自社サイト">自社サイト</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input id="update_role" type="number" name="role" max="2"
                                                class="form-control" placeholder="xxxxxxxx" />
                                            <label for="role">役割</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="close_btn btn btn-label-secondary">
                                        閉じる
                                    </button>
                                    <button type="button" class="btn btn-primary" id="update_btn">
                                        保存
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- update_modal / -->

            <!-- delete_modal -->
            <div class="modal" id="delete_modal">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">削除</h4>
                            <button type="button" class="cancel_btn btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-4 mt-2">
                                    <div class="form-floating form-floating-outline">
                                        <p>削除しますか？</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close_btn btn btn-label-secondary">
                                閉じる
                            </button>
                            <button type="button" class="btn btn-primary" id="delete_btn">保存</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- delete_modal / -->

        </div>
        <!-- content -->
    </div>

    <script>
        //Register new user
        $("#add_btn").click(function() {
            $("#add_modal").show();
        });

        $(".close_btn").click(function() {
            $("#add_modal").hide();
            $("#update_modal").hide();
            $("#delete_modal").hide();
        });

        $(".cancel_btn").click(function() {
            $("#add_modal").hide();
            $("#update_modal").hide();
            $("#delete_modal").hide();
        });


        //csv file upload
        $(document).on('click', "#tar_img", function() {
            var input = document.createElement('input');
            input.type = 'file';
            var csrfToken = $('meta[name="csrf_token"]').attr('content');
            input.onchange = e => {
                var file = e.target.files[0];
                var fd = new FormData();
                fd.append('file', file);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    type: 'POST',
                    url: "{{ url('/user/store/csv_upload') }}",
                    data: fd,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    cache: false,
                    processData: false,
                    async: false,
                    success: function(data, status) {
                        toastr.success(data.message);
                        $('#csvdata').val(data.csvdata);
                    }
                });
            }
            input.click();
        });

        var isChecked
        $('.form-check-input').change(function() {
            isChecked = $(this).is(":checked");
            $("#new_email, #new_password, #confirm_password, #c_name, #c_address, #c_member, #c_member_email, #c_phone, #c_site")
                .prop("disabled", isChecked);
        });


        //Add user info by text
        $("#submit_btn").click(function() {
            var new_email = $("#new_email").val();
            var new_password = $("#new_password").val();
            var confirm_password = $("#confirm_password").val();
            var c_name = $("#c_name").val();
            var c_address = $("#c_address").val();
            var c_member = $("#c_member").val();
            var c_member_email = $("#c_member_email").val();
            var c_phone = $("#c_phone").val();
            var c_site = $("#c_site").val();
            var length = new_password.length;
            var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var url_regex = /^(https?:\/\/)?([\w.-]+)\.([a-z]{2,6}\.?)(\/[\w.-]*)*\/?$/;
            if (!isChecked) {
                if (new_email == "") {
                    toastr.error("メール入力");
                    $("#new_email").focus();
                } else if (!email_regex.test(new_email)) {
                    toastr.error("有効なメール入力");
                    $("#new_email").val("");
                    $("#new_email").focus();
                } else if (new_password == "") {
                    toastr.error("パスワード入力");
                    $("#new_password").focus();
                } else if (length < 8) {
                    toastr.error("パスワードは少なくとも8文字以上でなければなりません。");
                    $("#new_password").val("");
                    $("#new_password").focus();
                } else if (confirm_password == "") {
                    toastr.error("パスワード確認");
                    $("#confirm_password").focus();
                } else if (new_password != confirm_password) {
                    toastr.error("パスワードをもう一度入力してください。");
                    $("#confirm_password").val("");
                    $("#confirm_password").focus();
                } else if (c_name == "") {
                    toastr.error("事業所名を入力してください。");
                    $("#c_name").focus();
                } else if (c_address == "") {
                    toastr.error("住所を入力してください。");
                    $("#c_address").focus();
                } else if (c_member == "") {
                    toastr.error("担当者名を入力してください。");
                    $("#c_member").focus();
                } else if (c_member_email == "") {
                    toastr.error("担当者メールを入力してください。");
                    $("#c_member_email").focus();
                } else if (!email_regex.test(c_member_email)) {
                    toastr.error("有効なメール入力");
                    $("#c_member_email").val("");
                    $("#c_member_email").focus();
                } else if (c_phone == "") {
                    toastr.error("電話番号を入力してください。");
                    $("#c_phone").focus();
                } else {
                    $.post("{{ route('user.store') }}", {
                        "_token": $('meta[name="csrf_token"]').attr('content'),
                        "email": new_email,
                        "password": new_password,
                        "c_name": c_name,
                        "c_address": c_address,
                        "c_member": c_member,
                        "c_member_email": c_member_email,
                        "c_phone": c_phone,
                        "c_site": c_site
                    }, function(data) {
                        if (data.status == 200) {
                            toastr.success(data.message);
                            $("#add_modal").hide();
                            window.location.reload(true);
                        }
                        if (data.status == 419) {
                            toastr.error(data.message)
                        }
                    }, 'json').catch((error) => {
                        toastr.error("事業所が既に登録されています。");
                    });
                }
            } else {
                var csv_data = $('#csvdata').val();
                console.log(csv_data)
                if (csv_data == "" || csv_data == null) {
                    toastr.error("CSVファイルをアップロードしてください。");
                }
                var rows = csv_data.split('\n');
                var dataArray = [];
                for (var i = 0; i < rows.length; i++) {
                    var rowData = rows[i].split(',');
                    dataArray.push(rowData);
                }

                $.each(dataArray, function(index, data) {
                    $.post("{{ route('user.store') }}", {
                        "_token": $('meta[name="csrf_token"]').attr('content'),
                        "email": data[0],
                        "password": data[1],
                        "c_name": data[2],
                        "c_address": data[3],
                        "c_member": data[4],
                        "c_phone": data[5],
                        "c_site": data[6]
                    }, function(data) {
                        if (data.status == 200) {
                            toastr.success(data.message);
                            window.location.reload(true);
                            $("#add_modal").hide();
                        }
                        if (data.status == 401) {
                            toastr.error(data.message)
                        }
                    }, 'json').catch((error) => {
                        toastr.error("事業所が既に登録されています。csvファイルをもう一度確認してください。");
                    });
                });
            };
        });


        //Update user 
        var index;
        $(".edit_btn").click(function() {
            $("#update_modal").show();
            index = $(this).attr("data-val");
            $("#update_email").val($(this).parent().parent().find(':nth-child(2)').html());
            $("#update_password").val("");
            $("#update_c_name").val($(this).parent().parent().find(':nth-child(3)').html());
            $("#update_c_address").val($(this).parent().parent().find(':nth-child(4)').html());
            $("#update_c_member").val($(this).parent().parent().find(':nth-child(5)').html());
            $("#update_c_member_email").val($(this).parent().parent().find(':nth-child(6)').html());
            $("#update_c_phone").val($(this).parent().parent().find(':nth-child(7)').html());
            $("#update_c_site").val($(this).parent().parent().find(':nth-child(8)').html());
            $("#update_role").val($(this).parent().parent().find(':nth-child(9)').html());
        });

        $("#update_btn").click(function() {
            var update_email = $("#update_email").val();
            var update_password = $("#update_password").val();
            var update_role = $("#update_role").val();
            var update_confirm_password = $("#update_confirm_password").val();
            var update_c_name = $("#update_c_name").val();
            var update_c_address = $("#update_c_address").val();
            var update_c_member = $("#update_c_member").val();
            var update_c_member_email = $("#update_c_member_email").val();
            var update_c_phone = $("#update_c_phone").val();
            var update_c_site = $("#update_c_site").val();
            var length = update_password.length;
            var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var url_regex = /^(https?:\/\/)?([\w.-]+)\.([a-z]{2,6}\.?)(\/[\w.-]*)*\/?$/;

            if (update_email == "") {
                toastr.error("メール入力");
                $("#update_email").focus();
            } else if (!email_regex.test(update_email)) {
                toastr.error("有効なメール入力");
                $("#update_email").val("");
                $("#update_email").focus();
            } else if (update_password == "") {
                toastr.error("パスワード入力");
                $("#update_password").focus();
            } else if (length < 8) {
                toastr.error("パスワードは少なくとも8文字以上でなければなりません。");
                $("#update_password").val("");
                $("#update_password").focus();
            } else if (update_confirm_password == "") {
                toastr.error("パスワード確認");
                $("#update_confirm_password").focus();
            } else if (update_password != update_confirm_password) {
                toastr.error("パスワードをもう一度入力してください。");
                $("#update_confirm_password").val("");
                $("#update_confirm_password").focus();
            } else if (update_c_name == "") {
                toastr.error("事業所名を入力してください。");
                $("#update_c_name").focus();
            } else if (update_c_address == "") {
                toastr.error("住所を入力してください。");
                $("#update_c_address").focus();
            } else if (update_c_member == "") {
                toastr.error("担当者名を入力してください。");
                $("#update_c_member").focus();
            } else if (update_c_member_email == "") {
                toastr.error("担当者メールを入力してください。");
                $("#update_c_member_email").focus();
            } else if (!email_regex.test(update_c_member_email)) {
                toastr.error("有効なメール入力");
                $("#update_c_member_email").val("");
                $("#update_c_member_email").focus();
            } else if (update_c_phone == "") {
                toastr.error("電話番号を入力してください。");
                $("#update_c_phone").focus();
            } else if (update_role == "") {
                toastr.error("権限を入力してください。");
                $("#update_role").val("");
                $("#update_role").focus();
            } else if (update_role != 1 && update_role != 2) {
                toastr.error("権限は1または2でなければなりません。");
                $("#update_role").val("");
                $("#update_role").focus();
            } else {
                $.post("{{ route('user.update') }}", {
                    "_token": $('meta[name="csrf_token"]').attr('content'),
                    "index": index,
                    "email": update_email,
                    "password": update_password,
                    "update_c_name": update_c_name,
                    "update_c_address": update_c_address,
                    "update_c_member": update_c_member,
                    "update_c_member_email": update_c_member_email,
                    "update_c_phone": update_c_phone,
                    "update_c_site": update_c_site,
                    "role": update_role
                }, function(data) {
                    var resp = data.user;
                    if (data.status == 200) {
                        toastr.success(data.message);
                        $("#update_modal").hide();
                        window.location.reload(true);
                    } else if (data.status == 401) {
                        toastr.error(data.message);
                    }
                }, 'json').catch((error) => {
                    console.log(error)
                    toastr.error("事業所が見つかりません。");
                });
            }
        });

        //Delete user
        $(".delete_btn").click(function() {
            $("#delete_modal").show();
            index = $(this).attr("data-val");
        });
        $("#delete_btn").click(function() {
            $.post("{{ route('user.delete') }}", {
                "_token": $('meta[name="csrf_token"]').attr('content'),
                "index": index,
            }, function(data) {
                var resp = data.user;
                if (data.status == 200) {
                    toastr.success(data.message);
                    $("#delete_modal").hide();
                    window.location.reload(true);
                } else if (data.status == 401) {
                    toastr.error(data.message);
                }
            }, 'json').catch((error) => {
                console.log(error)
                toastr.error("事業所が見つかりません。");
            });
        })
    </script>
@endsection
