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
                <h5 class="card-header">職種管理</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>職種</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody id="job_tbody">
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $job->id }}</td>
                                        <td>{{ $job->job_type }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-icon btn-primary waves-effect waves-light edit_btn"
                                                data-val="{{ $job->id }}">
                                                <span class="<tf-icons mdi mdi-pencil-outline"></span>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-danger waves-effect waves-light delete_btn"
                                                data-val="{{ $job->id }}">
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
                                職種追加
                            </h4>
                            <button type="button" class="cancel_btn btn-close"></button>
                        </div>
                        <div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="new_job" class="form-control" name="new_job"
                                                placeholder="xxxx" />
                                            <label for="職種">職種</label>
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
                                職種更新
                            </h4>
                            <button type="button" class="cancel_btn btn-close"></button>
                        </div>
                        <div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-4 mt-2">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="update_job" class="form-control" name="update_job"
                                                placeholder="xxxx" />
                                            <label for="新規職種">新規職種</label>
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

        //Add new job type
        $("#submit_btn").click(function() {
            var new_job = $("#new_job").val();

            if (new_job == "") {
                toastr.error("職種入力");
                $("#new_job").focus();
            } else {
                $.post("{{ route('jobManage.store') }}", {
                    "_token": $('meta[name="csrf_token"]').attr('content'),
                    "new_job": new_job
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

        //Update job type
        var index;
        $(".edit_btn").click(function() {
            $("#update_modal").show();
            index = $(this).attr("data-val");
            $("#update_job").val($(this).parent().parent().find(':nth-child(2)').html());
            $("#update_job").focus();
        });

        $("#update_btn").click(function() {
            var update_job = $("#update_job").val();
            if (update_job == "") {
                toastr.error("職種入力");
                $("#update_job").focus();
            } else {
                $.post("{{ route('jobManage.update') }}", {
                    "_token": $('meta[name="csrf_token"]').attr('content'),
                    "index": index,
                    "update_job": update_job
                }, function(data) {
                    var resp = data.job;
                    if (data.status == 200) {
                        toastr.success(data.message);
                        window.location.reload(true);
                    } else if (data.status == 401) {
                        toastr.error(data.message);
                    }
                }, 'json')
            }
        });

        //Delete job type
        $(".delete_btn").click(function() {
            $("#delete_modal").show();
            index = $(this).attr("data-val");
        });
        $("#delete_btn").click(function() {
            $.post("{{ route('jobManage.delete') }}", {
                "_token": $('meta[name="csrf_token"]').attr('content'),
                "index": index
            }, function(data) {
                var resp = data.job;
                if (data.status == 200) {
                    toastr.success(data.message);
                    window.location.reload(true);
                } else if (data.status == 401) {
                    toastr.error(data.message);
                }
            }, 'json')
        })
    </script>
@endsection
