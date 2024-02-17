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
                <h5 class="card-header">資格管理</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>資格</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody id="degree_tbody">
                                @foreach ($degrees as $degree)
                                    <tr>
                                        <td>{{ $degree->id }}</td>
                                        <td>{{ $degree->degree }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-icon btn-primary waves-effect waves-light edit_btn"
                                                data-val="{{ $degree->id }}">
                                                <span class="<tf-icons mdi mdi-pencil-outline"></span>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-danger waves-effect waves-light delete_btn"
                                                data-val="{{ $degree->id }}">
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
                                資格追加
                            </h4>
                            <button type="button" class="cancel_btn btn-close"></button>
                        </div>
                        <div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="new_degree" class="form-control" name="new_degree"
                                                placeholder="xxxx" />
                                            <label for="degree">資格</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary close_btn">
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
                                資格更新
                            </h4>
                            <button type="button" class="cancel_btn btn-close"></button>
                        </div>
                        <div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="update_degree" class="form-control"
                                                name="update_degree" placeholder="xxxx" />
                                            <label for="update_degree">新規資格</label>
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

        //Add new degree 
        $("#submit_btn").click(function() {
            var new_degree = $("#new_degree").val();

            if (new_degree == "") {
                toastr.error("資格入力");
                $("#new_degree").focus();
            } else {
                $.post("{{ route('degreeManage.store') }}", {
                    "_token": $('meta[name="csrf_token"]').attr('content'),
                    "new_degree": new_degree
                }, function(data) {
                    if (data.status == 200) {
                        toastr.success(data.message);
                        window.location.reload(true);
                    }
                    if (data.status == 401) {
                        toastr.error(data.message)
                    }
                }, 'json');
            }

        });

        //Update degree 
        var index;
        $(".edit_btn").click(function() {
            $("#update_modal").show();
            index = $(this).attr("data-val");
            $("#update_degree").val($(this).parent().parent().find(':nth-child(2)').html());
            $("#update_degree").focus();
        });

        $("#update_btn").click(function() {
            var update_degree = $("#update_degree").val();
            if (update_degree == "") {
                toastr.error("資格入力");
                $("#update_degree").focus();
            } else {
                $.post("{{ route('degreeManage.update') }}", {
                    "_token": $('meta[name="csrf_token"]').attr('content'),
                    "index": index,
                    "update_degree": update_degree
                }, function(data) {
                    var resp = data.degree;
                    if (data.status == 200) {
                        toastr.success(data.message);
                        window.location.reload(true);
                    } else if (data.status == 401) {
                        toastr.error(data.message);
                    }
                }, 'json')
            }
        });

        //Delete degree
        $(".delete_btn").click(function() {
            $("#delete_modal").show();
            index = $(this).attr("data-val");
        });
        $("#delete_btn").click(function() {
            $.post("{{ route('degreeManage.delete') }}", {
                "_token": $('meta[name="csrf_token"]').attr('content'),
                "index": index
            }, function(data) {
                var resp = data.degree;
                if (data.status == 200) {
                    toastr.success(data.message);
                    window.location.reload(true);
                } else if (data.status == 401) {
                    toastr.error(data.message);
                }
            }, 'json')
        });
    </script>
@endsection
