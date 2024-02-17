@extends('layouts.admin')
@section('content')
    <!-- content -->
    <div class="content-wrapper">
        <div class="container-md flex-grow-1 container-p-y">
            <div class="card mt-3">
                <h5 class="card-header">企業情報 & 募集要項管理</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>事業者名</th>
                                <th>所在地</th>
                                <th>担当者</th>
                                <th>担当者メール</th>
                                <th>電話番号</th>
                                <th>自社サイト</th>
                                <th>職種</th>
                                <th>雇用形態</th>
                                <th>採用人数</th>
                                <th>勤務時間</th>
                                <th>休憩時間</th>
                                <th>支給額</th>
                                <th>休日</th>
                                <th>加入保険</th>
                                <th>通勤手当</th>
                                <th>学歴</th>
                                <th>資格</th>
                                <th>その他</th>
                                <th>メッセージタイトル</th>
                                <th>メッセージ内容</th>
                                <th>画像1</th>
                                <th>画像2</th>
                                <th>画像3</th>
                                <th>画像4</th>
                                <th>画像5</th>
                                <th>画像6</th>
                                <th>画像7</th>
                                <th>画像8</th>
                                <th>画像9</th>
                                <th>画像10</th>
                                <th>操作</th>
                                <th>表示/非表示</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($main as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->c_name }}</td>
                                    <td>{{ $item->c_address }}</td>
                                    <td>{{ $item->c_member }}</td>
                                    <td>{{ $item->c_member_email }}</td>
                                    <td>{{ $item->c_phone }}</td>
                                    <td>{{ $item->c_site }}</td>
                                    <td>{{ $item->job_type }}</td>
                                    <td>{{ $item->em_type }}</td>
                                    <td>{{ $item->em_num }}</td>
                                    <td>{{ $item->work_time }}</td>
                                    <td>{{ $item->rest_time }}</td>
                                    <td>{{ $item->pay_amount }}</td>
                                    <td>{{ $item->rest_day }}</td>
                                    <td>{{ $item->insurance }}</td>
                                    <td>{{ $item->commuting_allowance }}</td>
                                    <td>{{ $item->academic_history }}</td>
                                    <td>{{ $item->degree }}</td>
                                    <td>{{ $item->other }}</td>
                                    <td>{{ $item->t_message }}</td>
                                    <td>{{ $item->c_message }}</td>
                                    <td>{{ $item->img_1 }}</td>
                                    <td>{{ $item->img_2 }}</td>
                                    <td>{{ $item->img_3 }}</td>
                                    <td>{{ $item->img_4 }}</td>
                                    <td>{{ $item->img_5 }}</td>
                                    <td>{{ $item->img_6 }}</td>
                                    <td>{{ $item->img_7 }}</td>
                                    <td>{{ $item->img_8 }}</td>
                                    <td>{{ $item->img_9 }}</td>
                                    <td>{{ $item->img_10 }}</td>
                                    <td>
                                        <a href="{{ route('mainInfo', ['c_name' => $item->c_name]) }}"
                                            class="btn btn-icon btn-primary waves-effect waves-light edit_btn"
                                            data-val="{{ $item->id }}">
                                            <span class="<tf-icons mdi mdi-pencil-outline"></span>
                                        </a>
                                        <button type="button"
                                            class="btn btn-icon btn-danger waves-effect waves-light delete_btn"
                                            data-val="{{ $item->id }}">
                                            <span class="<tf-icons mdi mdi-delete-outline"></span>
                                        </button>
                                    </td>
                                    <td>
                                        <label class="switch switch-lg">
                                            <input type="checkbox" class="switch-input" data-val="{{ $item->id }}"  {{ $item->switch_input == 1 ? 'checked' : '' }}/>
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                        </label>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="content-backdrop fade"></div>
        </div>
    </div>
    <!-- content -->

    <!-- delete modal -->
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
    <!-- delete modal / -->

    <script>
        var index;
        //delete
        $(".delete_btn").click(function() {
            $("#delete_modal").show();
            index = $(this).attr("data-val");
        });

        $(".close_btn").click(function() {
            $("#delete_modal").hide();
        });

        $(".cancel_btn").click(function() {
            $("#delete_modal").hide();
        });


        $("#delete_btn").click(function() {
            $.post("{{ route('basicManage.delete') }}", {
                "_token": $('meta[name="csrf_token"]').attr('content'),
                "index": index
            }, function(data) {
                var resp = data.info;
                if (data.status == 200) {
                    toastr.success(data.message);
                    window.location.reload(true);
                } else if (data.status == 401) {
                    toastr.error(data.message);
                }
            }, 'json').catch((error) => {
                toastr.error("事業所が見つかりません。");
            });
        });

        //display or hide of information
        $('.switch-input').change(function() {
            var value = $(this).is(':checked') ? 1 : 0;
            index0 = $(this).attr("data-val");
            //   console.log("Switch value: " + value + index0);
            $.post("{{ route('basicManage.show') }}", {
                "_token": $('meta[name="csrf_token"]').attr('content'),
                "index0": index0,
                "switch_input": value
            }, function(data) {
                var resp = data.info;
                if (data.status == 200) {
                    toastr.success(data.message);
                } else if (data.status == 401) {
                    toastr.error(data.message);
                }
            }, 'json').catch((error) => {
                toastr.error("事業所が見つかりません。");
            });
        });
    </script>
@endsection
