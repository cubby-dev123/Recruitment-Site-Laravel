@extends('layouts.admin')
@section('content')
    <!-- content -->
    @if ($data)
        <div class="content-wrapper">
            <div class="container-md flex-grow-1 container-p-y">
                <div class="card mt-3">
                    <h5 class="card-header">企業情報 & 募集要項</h5>
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
                                @foreach ($data as $item)
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
                                            @if (isset($token) ? $token : '')
                                                <button type="button" class="btn btn-success waves-effect waves-light extend_btn" data-val="{{ $item->id }}">
                                                    延長
                                                </button>
                                            @endif
                                            <button type="button"
                                                class="btn btn-icon btn-primary waves-effect waves-light edit_btn"
                                                data-val="{{ $item->id }}">
                                                <span class="<tf-icons mdi mdi-pencil-outline"></span>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-danger waves-effect waves-light remove_btn"
                                                data-val="{{ $item->id }}">
                                                <span class="<tf-icons mdi mdi-delete-outline"></span>
                                            </button>
                                        </td>
                                        <td>
                                            <label class="switch switch-lg">
                                                <input type="checkbox" class="switch-input" data-val="{{ $item->id }}" {{ $item->switch_input == 1 ? 'checked' : '' }} />
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
    @endif
    <!-- content -->

    <!-- add data -->
    <div class="container" id="new_info">
        <div class="">
            <div class="">
                <div class="">
                    <h4 class="">
                        企業情報＆募集要項の追加
                    </h4>
                </div>
                <div class="">
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="c_name" name="c_name" class="form-control" placeholder="xxx"
                                    value="{{ $c_info->c_name }}" disabled />
                                <label for="c_name">事業者名</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="c_address" name="c_address" class="form-control" placeholder="xxx"
                                    value="{{ $c_info->c_address }}" disabled />
                                <label for="所在地">所在地</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="c_member" name="c_member" class="form-control" placeholder="xxx"
                                    value="{{ $c_info->c_member }}" disabled />
                                <label for="担当者">担当者</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="email" id="c_member_email" class="form-control" name="c_member_email"
                                    placeholder="xxxx@xxx.xx" value="{{ $c_info->c_member_email }}"/>
                                <label for="c_member_email">担当者メール</label>
                            </div>
                        </div>

                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="c_phone" name="c_phone" class="form-control"
                                    placeholder="xxx-xxxx-xxxx" value="{{ $c_info->c_phone }}" disabled />
                                <label for="電話番号">電話番号</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="url" id="c_site" class="form-control" placeholder="https://xxxx" />
                                <label for="自社サイト">自社サイト</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <select id="em_type" class="form-select">
                                    <option>雇用形態</option>
                                    <option value="1">正社員</option>
                                    <option value="2">正社員以外
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="em_num" class="form-control" placeholder="xx名" />
                                <label for="採用人数">採用人数</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="work_time" class="form-control"
                                    placeholder="xx時xx分 ~ xx時xx分" />
                                <label for="勤務時間">勤務時間</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="rest_time" class="form-control" placeholder="xx分" />
                                <label for="休憩時間">休憩時間</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="pay_amount" class="form-control"
                                    placeholder="月給xxxx円 ～ xxxx円" />
                                <label for="支給額">支給額</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="rest_day" class="form-control" placeholder="土 日..." />
                                <label for="休日">休日</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <p>加入保険</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2" type="checkbox" />
                                    <label class="form-check-label">雇用保険</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2" type="checkbox" />
                                    <label class="form-check-label">労災保険</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2" type="checkbox" />
                                    <label class="form-check-label">健康保険</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2" type="checkbox" />
                                    <label class="form-check-label">社会保険</label>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <select id="commuting_allowance" class="form-select">
                                    <option>通勤手当 </option>
                                    <option value="1">あり
                                    </option>
                                    <option value="2">なし</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <div class="col-md ">
                                    <p>募集職種</p>
                                    @foreach ($jobs as $job)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-check-input1" type="checkbox" />
                                            <label class="form-check-label">{{ $job->job_type }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <div class="col-md ">
                                    <p>必要資格</p>
                                    @foreach ($degrees as $degree)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-check-input3" type="checkbox" />
                                            <label class="form-check-label">{{ $degree->degree }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <select id="academic_history" class="form-select">
                                    <option>学歴</option>
                                    <option value="1">中卒以上</option>
                                    <option value="2">高卒以上</option>
                                    <option value="3">大卒以上</option>
                                    <option value="4">不問</option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="other" class="form-control" placeholder="xxxxxxx" />
                                <label for="その他">その他</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="t_message" class="form-control" placeholder="xxxxxx" />
                                <label for="メッセージタイトル">メッセージタイトル</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline mb-4">
                                <textarea class="form-control h-px-100" id="c_message" placeholder="..."></textarea>
                                <label for="c_message">メッセージ内容</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            <div class="form-floating form-floating-outline">
                                <div class="card upload-card">
                                    <h5 class="card-header">画像</h5>
                                    <div class="card-body upload-part">
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_1" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_1">削除</button>
                                            <input type="hidden" name="img-url" id="img_1_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_2" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_2">削除</button>
                                            <input type="hidden" name="img-url" id="img_2_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_3" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_3">削除</button>
                                            <input type="hidden" name="img-url" id="img_3_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_4" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_4">削除</button>
                                            <input type="hidden" name="img-url" id="img_4_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_5" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_5">削除</button>
                                            <input type="hidden" name="img-url" id="img_5_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_6" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_6">削除</button>
                                            <input type="hidden" name="img-url" id="img_6_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_7" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_7">削除</button>
                                            <input type="hidden" name="img-url" id="img_7_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_8" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_8">削除</button>
                                            <input type="hidden" name="img-url" id="img_8_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_9" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_9">削除</button>
                                            <input type="hidden" name="img-url" id="img_9_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="img_10" alt="">
                                            </div>
                                            <button class="cancel-upload" id="cancel_upload_10">削除</button>
                                            <input type="hidden" name="img-url" id="img_10_url">
                                        </div>
                                    </div>
                                    <p id="upload-txt">画像をアップロードしてください。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" id="btn_group">
                    
                    <button type="button" class="btn btn-primary waves-effect waves-light" id="add_btn">
                        追加
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- add data /-->


    <!-- update modal -->
    <div class="modal" id="update_modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        企業情報＆募集要項の更新
                    </h4>
                    <button type="button" class="cancel_btn btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_c_name" class="form-control" placeholder="xxx"
                                    disabled />
                                <label for="事業者名">事業者名</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_c_address" class="form-control" placeholder="xxx"
                                    disabled />
                                <label for="所在地">所在地</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_c_member" class="form-control" placeholder="xxx"
                                    disabled />
                                <label for="担当者">担当者</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="email" id="update_c_member_email" class="form-control"
                                    name="update_c_member_email" placeholder="xxxx@xxx.xx" />
                                <label for="担当者メール">担当者メール</label>
                            </div>
                        </div>

                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_c_phone" class="form-control"
                                    placeholder="xxx-xxxx-xxxx" disabled />
                                <label for="電話番号">電話番号</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="url" id="update_c_site" class="form-control"
                                    placeholder="https://xxxx" />
                                <label for="自社サイト">自社サイト</label>
                            </div>
                        </div>

                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <select id="update_em_type" class="form-select">
                                    <option>雇用形態</option>
                                    <option value="1">正社員</option>
                                    <option value="2">正社員以外
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="update_em_num" class="form-control" placeholder="xx名" />
                                <label for="採用人数">採用人数</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_work_time" class="form-control"
                                    placeholder="xx時xx分 ~ xx時xx分" />
                                <label for="勤務時間">勤務時間</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="update_rest_time" class="form-control" placeholder="xx分" />
                                <label for="休憩時間">休憩時間</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_pay_amount" class="form-control"
                                    placeholder="月給xxxx円 ～ xxxx円" />
                                <label for="支給額">支給額</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_rest_day" class="form-control" placeholder="土 日..." />
                                <label for="休日">休日</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <p>加入保険</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2 form-check-input22"
                                        type="checkbox" />
                                    <label class="form-check-label">雇用保険</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2 form-check-input22"
                                        type="checkbox" />
                                    <label class="form-check-label">労災保険</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2 form-check-input22"
                                        type="checkbox" />
                                    <label class="form-check-label">健康保険</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input form-check-input2 form-check-input22"
                                        type="checkbox" />
                                    <label class="form-check-label">社会保険</label>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <select id="update_commuting_allowance" class="form-select">
                                    <option>通勤手当 </option>
                                    <option value="1">あり</option>
                                    <option value="2">なし</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">

                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <div class="col-md ">
                                    <p>募集職種</p>
                                    @foreach ($jobs as $job)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-check-input1  form-check-input11"
                                                type="checkbox" />
                                            <label class="form-check-label">{{ $job->job_type }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <div class="col-md ">
                                    <p>必要資格</p>
                                    @foreach ($degrees as $degree)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-check-input3 form-check-input33"
                                                type="checkbox" />
                                            <label class="form-check-label">{{ $degree->degree }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <select id="update_academic_history" class="form-select">
                                    <option>学歴</option>
                                    <option value="1">中卒以上
                                    </option>
                                    <option value="2">高卒以上</option>
                                    <option value="3">大卒以上</option>
                                    <option value="4">不問</option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_other" class="form-control" placeholder="xxxxxxx" />
                                <label for="その他">その他</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="update_t_message" class="form-control" placeholder="xxxxxx" />
                                <label for="メッセージタイトル">メッセージタイトル</label>
                            </div>
                        </div>
                        <div class="col mb-4 ml-2">
                            <div class="form-floating form-floating-outline mb-4">
                                <textarea class="form-control h-px-100" id="update_c_message" placeholder="..."></textarea>
                                <label for="メッセージ内容">メッセージ内容</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            <div class="form-floating form-floating-outline">
                                <div class="card upload-card">
                                    <h5 class="card-header">画像</h5>
                                    <div class="card-body upload-part upload-part-modal">
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_1" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_1">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_1_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_2" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_2">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_2_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_3" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_3">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_3_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_4" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_4">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_4_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_5" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_5">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_5_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_6" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_6">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_6_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_7" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_7">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_7_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_8" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_8">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_8_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_9" alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_9">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_9_url">
                                        </div>
                                        <div class="upload-img">
                                            <div class="img-item">
                                                <img src="./asset/img/image_upload.png" id="update_img_10"
                                                    alt="">
                                            </div>
                                            <button class="cancel-upload" id="update_cancel_upload_10">削除</button>
                                            <input type="hidden" name="img-url" id="update_img_10_url">
                                        </div>
                                    </div>
                                    <p id="upload-txt">画像をアップロードしてください。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" id="btn_group">
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
    <!-- update modal / -->

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
        var c_name, c_address, c_member, c_member_email, c_phone, c_site, email_regex, url_regex, em_num, work_time,
            rest_time, pay_amount, other,
            t_message, c_message, index, job_type, em_type, rest_day, insurance, commuting_allowance, academic_history,
            degree, img_1_url, img_2_url, img_3_url, img_4_url, img_5_url, img_6_url, img_7_url, img_8_url, img_9_url,
            img_10_url, index1,
            update_c_name, update_c_address, update_c_member, update_c_member_email, update_c_phone, update_c_site,
            update_url_regex,
            update_em_num, update_work_time, update_rest_time, update_pay_amount, update_other, update_t_message,
            update_c_message, update_job_type, update_em_type, update_rest_day, update_insurance,
            update_commuting_allowance, update_academic_history, update_degree, update_img_1_url, update_img_2_url,
            update_img_3_url, update_img_4_url, update_img_5_url, update_img_6_url, update_img_7_url, update_img_8_url,
            update_img_9_url,
            update_img_10_url;

        function inputValues() {
            c_name = $("#c_name").val();
            c_address = $("#c_address").val();
            c_member = $("#c_member").val();
            c_member_email = $("#c_member_email").val();
            c_phone = $("#c_phone").val();
            c_site = $("#c_site").val();
            email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            url_regex = /^(https?:\/\/)?([\w.-]+)\.([a-z]{2,6}\.?)(\/[\w.-]*)*\/?$/;
            em_num = $("#em_num").val();
            work_time = $("#work_time").val();
            rest_time = $("#rest_time").val();
            pay_amount = $("#pay_amount").val();
            other = $("#other").val();
            rest_day = $("#rest_day").val();
            t_message = $("#t_message").val();
            c_message = $("#c_message").val();
        }

        function getValues() {
            var selectedCheckboxes1 = $('.form-check-input1:checked');
            job_type = "";
            selectedCheckboxes1.each(function() {
                job_type += $(this).next('label').html() + " ";
            });
            job_type = job_type.trim().replace(/Default Fixed/g, '');

            var selectedOption1 = $('#em_type').find('option:selected');
            if (!selectedOption1.is(':first-child')) {
                em_type = selectedOption1.html();
            }

            var selectedCheckboxes2 = $('.form-check-input2:checked');
            insurance = "";
            selectedCheckboxes2.each(function() {
                insurance += $(this).next('label').html() + " ";
            });
            insurance = insurance.trim().replace(/Default Fixed/g, '');

            var selectedOption2 = $('#commuting_allowance').find('option:selected');
            if (!selectedOption2.is(':first-child')) {
                commuting_allowance = selectedOption2.html();
            }

            var selectedOption3 = $('#academic_history').find('option:selected');
            if (!selectedOption3.is(':first-child')) {
                academic_history = selectedOption3.html();
            }

            var selectedCheckboxes3 = $('.form-check-input3:checked');
            degree = "";
            selectedCheckboxes3.each(function() {
                degree += $(this).next('label').html() + " ";
            });
            degree = degree.trim().replace(/Default Fixed/g, '');
        }

        //image upload part

        function uploadImage(inputId, imageUrlId, cancelBtnId) {
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
                    url: "{{ url('/basicManage/store/picture_upload') }}",
                    data: fd,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    cache: false,
                    processData: false,
                    async: false,
                    success: function(data, status) {
                        $(inputId).attr('src', "{{ url('/') }}" + '/' + data.file_url);
                        $(imageUrlId).val("{{ url('/') }}" + '/' + data.file_url);
                        $(cancelBtnId).css("display", "block");
                        // Call the callback function with the image URL
                        updateImageUrl(imageUrlId);
                    }
                });
            }

            input.click();
        }

        function updateImageUrl(imageUrlId) {
            switch (imageUrlId) {
                case '#img_1_url':
                    img_1_url = $(imageUrlId).val();
                    break;
                case '#img_2_url':
                    img_2_url = $(imageUrlId).val();
                    break;
                case '#img_3_url':
                    img_3_url = $(imageUrlId).val();
                    break;
                case '#img_4_url':
                    img_4_url = $(imageUrlId).val();
                    break;
                case '#img_5_url':
                    img_5_url = $(imageUrlId).val();
                    break;
                case '#img_6_url':
                    img_6_url = $(imageUrlId).val();
                    break;
                case '#img_7_url':
                    img_7_url = $(imageUrlId).val();
                    break;
                case '#img_8_url':
                    img_8_url = $(imageUrlId).val();
                    break;
                case '#img_9_url':
                    img_9_url = $(imageUrlId).val();
                    break;
                case '#img_10_url':
                    img_10_url = $(imageUrlId).val();
                    break;
            }
        }

        $(document).on('click', "#img_1", function() {
            uploadImage("#img_1", "#img_1_url", "#cancel_upload_1");
        });

        $(document).on('click', "#img_2", function() {
            uploadImage("#img_2", "#img_2_url", "#cancel_upload_2");
        });

        $(document).on('click', "#img_3", function() {
            uploadImage("#img_3", "#img_3_url", "#cancel_upload_3");
        });
        $(document).on('click', "#img_4", function() {
            uploadImage("#img_4", "#img_4_url", "#cancel_upload_4");
        });
        $(document).on('click', "#img_5", function() {
            uploadImage("#img_5", "#img_5_url", "#cancel_upload_5");
        });
        $(document).on('click', "#img_6", function() {
            uploadImage("#img_6", "#img_6_url", "#cancel_upload_6");
        });
        $(document).on('click', "#img_7", function() {
            uploadImage("#img_7", "#img_7_url", "#cancel_upload_7");
        });
        $(document).on('click', "#img_8", function() {
            uploadImage("#img_8", "#img_8_url", "#cancel_upload_8");
        });
        $(document).on('click', "#img_9", function() {
            uploadImage("#img_9", "#img_9_url", "#cancel_upload_9");
        });
        $(document).on('click', "#img_10", function() {
            uploadImage("#img_10", "#img_10_url", "#cancel_upload_10");
        });

        $("#cancel_upload_1").click(function() {
            $("#img_1").attr('src', "./asset/img/image_upload.png");
            $("#img_1_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_2").click(function() {
            $("#img_2").attr('src', "./asset/img/image_upload.png");
            $("#img_2_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_3").click(function() {
            $("#img_3").attr('src', "./asset/img/image_upload.png");
            $("#img_3_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_4").click(function() {
            $("#img_4").attr('src', "./asset/img/image_upload.png");
            $("#img_4_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_5").click(function() {
            $("#img_5").attr('src', "./asset/img/image_upload.png");
            $("#img_5_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_6").click(function() {
            $("#img_6").attr('src', "./asset/img/image_upload.png");
            $("#img_6_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_7").click(function() {
            $("#img_7").attr('src', "./asset/img/image_upload.png");
            $("#img_7_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_8").click(function() {
            $("#img_8").attr('src', "./asset/img/image_upload.png");
            $("#img_8_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_9").click(function() {
            $("#img_9").attr('src', "./asset/img/image_upload.png");
            $("#img_9_url").val("");
            $(this).css("display", "none");
        });

        $("#cancel_upload_10").click(function() {
            $("#img_10").attr('src', "./asset/img/image_upload.png");
            $("#img_10_url").val("");
            $(this).css("display", "none");
        });


        function validation() {
            //validation
            if (c_name == "" || c_name == null) {
                toastr.error("事業所名を入力してください。");
                $("#c_name").focus();
            } else if (c_address == "" || c_address == null) {
                toastr.error("住所を入力してください。");
                $("#c_address").focus();
            } else if (c_member == "" || c_member == null) {
                toastr.error("担当者名を入力してください。");
                $("#c_member").focus();
            } else if (c_member_email == "" || c_member_email == null) {
                toastr.error("担当者メールを入力してください。");
                $("#c_member_email").focus();
            } else if (!email_regex.test(c_member_email)) {
                toastr.error("有効なメール入力");
                $("#c_member_email").val("");
                $("#c_member_email").focus();
            } else if (c_phone == "" || c_phone == null) {
                toastr.error("電話番号を入力してください。");
                $("#c_phone").focus();
            } else if (em_type == "" || em_type == null) {
                toastr.error("雇用形態を選択してください。");
            } else {
                return "validated";
            }
        }

        //Add main information
        $("#add_btn").click(function() {
            inputValues();
            console.log(c_member_email)
            getValues();
            var result = validation();
            if (result == "validated") {
                $.post("{{ route('mainInfo.store') }}", {
                    "_token": $('meta[name="csrf_token"]').attr('content'),
                    'c_name': c_name,
                    'c_address': c_address,
                    'c_member': c_member,
                    'c_member_email': c_member_email,
                    'c_phone': c_phone,
                    'c_site': c_site,
                    'job_type': job_type,
                    'em_type': em_type,
                    'em_num': em_num,
                    'work_time': work_time,
                    'rest_time': rest_time,
                    'pay_amount': pay_amount,
                    'rest_day': rest_day,
                    'insurance': insurance,
                    'commuting_allowance': commuting_allowance,
                    'academic_history': academic_history,
                    'degree': degree,
                    'other': other,
                    't_message': t_message,
                    'c_message': c_message,
                    'img_1': img_1_url,
                    'img_2': img_2_url,
                    'img_3': img_3_url,
                    'img_4': img_4_url,
                    'img_5': img_5_url,
                    'img_6': img_6_url,
                    'img_7': img_7_url,
                    'img_8': img_8_url,
                    'img_9': img_9_url,
                    'img_10': img_10_url,
                }, function(data) {
                    var resp = data.info;
                    if (data.status == 200) {
                        toastr.success(data.message);
                        window.location.reload('true');
                    } else if (data.status == 401) {
                        toastr.error(data.message);
                    }
                }, 'json')
            }
        });


        //Update main information
        $(".edit_btn").click(function() {
            $("#update_modal").show();
            index1 = $(this).attr("data-val");

            $("#update_c_name").val($(this).parent().parent().find(':nth-child(2)').html());
            $("#update_c_address").val($(this).parent().parent().find(':nth-child(3)').html());
            $("#update_c_member").val($(this).parent().parent().find(':nth-child(4)').html());
            $("#update_c_member_email").val($(this).parent().parent().find(':nth-child(5)').html());
            $("#update_c_phone").val($(this).parent().parent().find(':nth-child(6)').html());
            $("#update_c_site").val($(this).parent().parent().find(':nth-child(7)').html());
            $("#update_em_num").val($(this).parent().parent().find(':nth-child(10)').html());
            $("#update_work_time").val($(this).parent().parent().find(':nth-child(11)').html());
            $("#update_rest_time").val($(this).parent().parent().find(':nth-child(12)').html());
            $("#update_pay_amount").val($(this).parent().parent().find(':nth-child(13)').html());
            $("#update_rest_day").val($(this).parent().parent().find(':nth-child(14)').html());
            $("#update_img_1_url").val($(this).parent().parent().find(':nth-child(22)').html());
            $("#update_img_2_url").val($(this).parent().parent().find(':nth-child(23)').html());
            $("#update_img_3_url").val($(this).parent().parent().find(':nth-child(24)').html());
            $("#update_img_4_url").val($(this).parent().parent().find(':nth-child(25)').html());
            $("#update_img_5_url").val($(this).parent().parent().find(':nth-child(26)').html());
            $("#update_img_6_url").val($(this).parent().parent().find(':nth-child(27)').html());
            $("#update_img_7_url").val($(this).parent().parent().find(':nth-child(28)').html());
            $("#update_img_8_url").val($(this).parent().parent().find(':nth-child(29)').html());
            $("#update_img_9_url").val($(this).parent().parent().find(':nth-child(30)').html());
            $("#update_img_10_url").val($(this).parent().parent().find(':nth-child(31)').html());

            $("#update_other").val($(this).parent().parent().find(':nth-child(19)').html());
            $("#update_t_message").val($(this).parent().parent().find(':nth-child(20)').html());
            $("#update_c_message").val($(this).parent().parent().find(':nth-child(21)').html());
            $("#update_img_1").attr("src", $(this).parent().parent().find(':nth-child(22)').html() ? $(this)
                .parent().parent().find(':nth-child(22)').html() : "./asset/img/image_upload.png");
            $("#update_img_2").attr("src", $(this).parent().parent().find(':nth-child(23)').html() ? $(this)
                .parent().parent().find(':nth-child(23)').html() : "./asset/img/image_upload.png");
            $("#update_img_3").attr("src", $(this).parent().parent().find(':nth-child(24)').html() ? $(this)
                .parent().parent().find(':nth-child(24)').html() : "./asset/img/image_upload.png");
            $("#update_img_4").attr("src", $(this).parent().parent().find(':nth-child(25)').html() ? $(this)
                .parent().parent().find(':nth-child(25)').html() : "./asset/img/image_upload.png");
            $("#update_img_5").attr("src", $(this).parent().parent().find(':nth-child(26)').html() ? $(this)
                .parent().parent().find(':nth-child(26)').html() : "./asset/img/image_upload.png");
            $("#update_img_6").attr("src", $(this).parent().parent().find(':nth-child(27)').html() ? $(this)
                .parent().parent().find(':nth-child(27)').html() : "./asset/img/image_upload.png");
            $("#update_img_7").attr("src", $(this).parent().parent().find(':nth-child(28)').html() ? $(this)
                .parent().parent().find(':nth-child(28)').html() : "./asset/img/image_upload.png");
            $("#update_img_8").attr("src", $(this).parent().parent().find(':nth-child(29)').html() ? $(this)
                .parent().parent().find(':nth-child(29)').html() : "./asset/img/image_upload.png");
            $("#update_img_9").attr("src", $(this).parent().parent().find(':nth-child(30)').html() ? $(this)
                .parent().parent().find(':nth-child(30)').html() : "./asset/img/image_upload.png");
            $("#update_img_10").attr("src", $(this).parent().parent().find(':nth-child(31)').html() ? $(this)
                .parent().parent().find(':nth-child(31)').html() : "./asset/img/image_upload.png");


            var a = $(this).parent().parent().find(':nth-child(8)').html();
            var stringArray = a.split(" ");
            $(".form-check-input11").each(function(index) {
                var labelText = $(this).parent().find(".form-check-label").text();
                if (stringArray.indexOf(labelText) !== -1) {
                    $(this).prop("checked", true);
                }
            });

            var b = $(this).parent().parent().find(':nth-child(9)').html();
            $("#update_em_type option").each(function(index) {
                var optionText = $(this).text();
                if (optionText.trim() === b.trim()) {
                    $(this).prop("selected", true);
                }
            });

            var c = $(this).parent().parent().find(':nth-child(15)').html();
            var stringArray1 = c.split(" ");
            $(".form-check-input22").each(function(index) {
                var labelText = $(this).parent().find(".form-check-label").text();
                if (stringArray1.indexOf(labelText) !== -1) {
                    $(this).prop("checked", true);
                }
            });

            var d = $(this).parent().parent().find(':nth-child(16)').html();
            $("#update_commuting_allowance option").each(function(index) {
                var optionText = $(this).text();
                if (optionText.trim() === d.trim()) {
                    $(this).prop("selected", true);
                }
            });

            var e = $(this).parent().parent().find(':nth-child(17)').html();
            $("#update_academic_history option").each(function(index) {
                var optionText = $(this).text();
                if (optionText.trim() === e.trim()) {
                    $(this).prop("selected", true);
                }
            });

            var f = $(this).parent().parent().find(':nth-child(18)').html();
            var stringArray2 = f.split(" ");
            $(".form-check-input33").each(function(index) {
                var labelText = $(this).parent().find(".form-check-label").text();
                if (stringArray2.indexOf(labelText) !== -1) {
                    $(this).prop("checked", true);
                }
            });

        });

        function getUpdateValues() {
            var selectedCheckboxes1 = $('.form-check-input1:checked');
            update_job_type = "";
            selectedCheckboxes1.each(function() {
                update_job_type += $(this).next('label').html() + " ";
            });
            update_job_type = update_job_type.trim().replace(/Default Fixed/g, '');

            var selectedOption1 = $('#update_em_type').find('option:selected');
            if (!selectedOption1.is(':first-child')) {
                update_em_type = selectedOption1.html();
            }

            var selectedCheckboxes2 = $('.form-check-input2:checked');
            update_insurance = "";
            selectedCheckboxes2.each(function() {
                update_insurance += $(this).next('label').html() + " ";
            });
            update_insurance = update_insurance.trim().replace(/Default Fixed/g, '');

            var selectedOption2 = $('#update_commuting_allowance').find('option:selected');
            if (!selectedOption2.is(':first-child')) {
                update_commuting_allowance = selectedOption2.html();
            }

            var selectedOption3 = $('#update_academic_history').find('option:selected');
            if (!selectedOption3.is(':first-child')) {
                update_academic_history = selectedOption3.html();
            }

            var selectedCheckboxes3 = $('.form-check-input3:checked');
            update_degree = "";
            selectedCheckboxes3.each(function() {
                update_degree += $(this).next('label').html() + " ";
            });
            update_degree = update_degree.trim().replace(/Default Fixed/g, '');
        }

        //image upload part

        function uploadUpdateImage(inputUpdateId, imageUpdateUrlId, cancelUpdateBtnId) {
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
                    url: "{{ url('/basicManage/store/picture_upload') }}",
                    data: fd,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    cache: false,
                    processData: false,
                    async: false,
                    success: function(data, status) {
                        $(inputUpdateId).attr('src', "{{ url('/') }}" + '/' + data.file_url);
                        $(imageUpdateUrlId).val("{{ url('/') }}" + '/' + data.file_url);
                        $(cancelUpdateBtnId).css("display", "block");
                        // Call the callback function with the image URL
                        updateImageUpdateUrl(imageUpdateUrlId);
                    }
                });
            }

            input.click();
        }

        function updateImageUpdateUrl(imageUpdateUrlId) {
            switch (imageUpdateUrlId) {
                case '#update_img_1_url':
                    update_img_1_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_2_url':
                    update_img_2_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_3_url':
                    update_img_3_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_4_url':
                    update_img_4_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_5_url':
                    update_img_5_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_6_url':
                    update_img_6_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_7_url':
                    update_img_7_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_8_url':
                    update_img_8_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_9_url':
                    update_img_9_url = $(imageUpdateUrlId).val();
                    break;
                case '#update_img_10_url':
                    update_img_10_url = $(imageUpdateUrlId).val();
                    break;

            }
        }

        $(document).on('click', "#update_img_1", function() {
            uploadUpdateImage("#update_img_1", "#update_img_1_url", "#update_cancel_upload_1");
        });

        $(document).on('click', "#update_img_2", function() {
            uploadUpdateImage("#update_img_2", "#update_img_2_url", "#update_cancel_upload_2");
        });

        $(document).on('click', "#update_img_3", function() {
            uploadUpdateImage("#update_img_3", "#update_img_3_url", "#update_cancel_upload_3");
        });

        $(document).on('click', "#update_img_4", function() {
            uploadUpdateImage("#update_img_4", "#update_img_4_url", "#update_cancel_upload_4");
        });

        $(document).on('click', "#update_img_5", function() {
            uploadUpdateImage("#update_img_5", "#update_img_5_url", "#update_cancel_upload_5");
        });

        $(document).on('click', "#update_img_6", function() {
            uploadUpdateImage("#update_img_6", "#update_img_6_url", "#update_cancel_upload_6");
        });

        $(document).on('click', "#update_img_7", function() {
            uploadUpdateImage("#update_img_7", "#update_img_7_url", "#update_cancel_upload_7");
        });

        $(document).on('click', "#update_img_8", function() {
            uploadUpdateImage("#update_img_8", "#update_img_8_url", "#update_cancel_upload_8");
        });

        $(document).on('click', "#update_img_9", function() {
            uploadUpdateImage("#update_img_9", "#update_img_9_url", "#update_cancel_upload_9");
        });

        $(document).on('click', "#update_img_10", function() {
            uploadUpdateImage("#update_img_10", "#update_img_10_url", "#update_cancel_upload_10");
        });


        $("#update_cancel_upload_1").click(function() {
            $("#update_img_1").attr('src', "./asset/img/image_upload.png");
            $("#update_img_1_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_2").click(function() {
            $("#update_img_2").attr('src', "./asset/img/image_upload.png");
            $("#update_img_2_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_3").click(function() {
            $("#update_img_3").attr('src', "./asset/img/image_upload.png");
            $("#update_img_3_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_4").click(function() {
            $("#update_img_4").attr('src', "./asset/img/image_upload.png");
            $("#update_img_4_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_5").click(function() {
            $("#update_img_5").attr('src', "./asset/img/image_upload.png");
            $("#update_img_5_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_6").click(function() {
            $("#update_img_6").attr('src', "./asset/img/image_upload.png");
            $("#update_img_6_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_7").click(function() {
            $("#update_img_7").attr('src', "./asset/img/image_upload.png");
            $("#update_img_7_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_8").click(function() {
            $("#update_img_8").attr('src', "./asset/img/image_upload.png");
            $("#update_img_8_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_9").click(function() {
            $("#update_img_9").attr('src', "./asset/img/image_upload.png");
            $("#update_img_9_url").val("");
            $(this).css("display", "none");
        });

        $("#update_cancel_upload_10").click(function() {
            $("#update_img_10").attr('src', "./asset/img/image_upload.png");
            $("#update_img_10_url").val("");
            $(this).css("display", "none");
        });

        function updateValidation() {
            //validation
            if (update_c_name == "" || update_c_name == null) {
                toastr.error("事業所名を入力してください。");
                $("#update_c_name").focus();
            } else if (update_c_address == "" || update_c_address == null) {
                toastr.error("住所を入力してください。");
                $("#update_c_address").focus();
            } else if (update_c_member == "" || update_c_member == null) {
                toastr.error("担当者名を入力してください。");
                $("#update_c_member").focus();
            } else if (update_c_member_email == "" || update_c_member_email == null) {
                toastr.error("担当者メールを入力してください。");
                $("#update_c_member_email").focus();
            } else if (update_c_phone == "" || update_c_phone == null) {
                toastr.error("電話番号を入力してください。");
                $("#update_c_phone").focus();
            } else if (update_em_type == "" || update_em_type == null) {
                toastr.error("雇用形態を選択してください。");
            } else {
                return "validated";
            }
        }

        $(document).on("click", "#update_btn", function() {
            update_c_name = $("#update_c_name").val();
            update_c_address = $("#update_c_address").val();
            update_c_member = $("#update_c_member").val();
            update_c_member_email = $("#update_c_member_email").val();
            update_c_phone = $("#update_c_phone").val();
            update_c_site = $("#update_c_site").val();
            update_url_regex = /^(https?:\/\/)?([\w.-]+)\.([a-z]{2,6}\.?)(\/[\w.-]*)*\/?$/;
            update_em_num = $("#update_em_num").val();
            update_work_time = $("#update_work_time").val();
            update_rest_time = $("#update_rest_time").val();
            update_pay_amount = $("#update_pay_amount").val();
            update_other = $("#update_other").val();
            update_rest_day = $("#update_rest_day").val();
            update_t_message = $("#update_t_message").val();
            update_c_message = $("#update_c_message").val();

            getUpdateValues();
            update_img_1_url = $("#update_img_1_url").val();
            update_img_2_url = $("#update_img_2_url").val();
            update_img_3_url = $("#update_img_3_url").val();
            update_img_4_url = $("#update_img_4_url").val();
            update_img_5_url = $("#update_img_5_url").val();
            update_img_6_url = $("#update_img_6_url").val();
            update_img_7_url = $("#update_img_7_url").val();
            update_img_8_url = $("#update_img_8_url").val();
            update_img_9_url = $("#update_img_9_url").val();
            update_img_10_url = $("#update_img_10_url").val();

            var result = updateValidation();

            if (result == "validated") {
                $.post("{{ route('mainInfo.update') }}", {
                    "_token": $('meta[name="csrf_token"]').attr('content'),
                    'index': index1,
                    'c_name': update_c_name,
                    'c_address': update_c_address,
                    'c_member': update_c_member,
                    'c_member_email': update_c_member_email,
                    'c_phone': update_c_phone,
                    'c_site': update_c_site,
                    'job_type': update_job_type,
                    'em_type': update_em_type,
                    'em_num': update_em_num,
                    'work_time': update_work_time,
                    'rest_time': update_rest_time,
                    'pay_amount': update_pay_amount,
                    'rest_day': update_rest_day,
                    'insurance': update_insurance,
                    'commuting_allowance': update_commuting_allowance,
                    'academic_history': update_academic_history,
                    'degree': update_degree,
                    'other': update_other,
                    't_message': update_t_message,
                    'c_message': update_c_message,
                    'img_1': update_img_1_url,
                    'img_2': update_img_2_url,
                    'img_3': update_img_3_url,
                    'img_4': update_img_4_url,
                    'img_5': update_img_5_url,
                    'img_6': update_img_6_url,
                    'img_7': update_img_7_url,
                    'img_8': update_img_8_url,
                    'img_9': update_img_9_url,
                    'img_10': update_img_10_url
                }, function(data) {
                    var resp = data.info;
                    if (data.status == 200) {
                        toastr.success(data.message);
                        window.location.reload(true);
                    } else if (data.status == 401) {
                        toastr.error(data.message);
                    }
                }, 'json')
            }
        });


        //delete
        $(".remove_btn").click(function() {
            $("#delete_modal").show();
            index = $(this).attr("data-val");
        });

        $(".close_btn").click(function() {
            $("#update_modal").hide();
            $("#delete_modal").hide();
        });

        $(".cancel_btn").click(function() {
            $("#update_modal").hide();
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
            }, 'json')
        });

        //Apply post extend
        $(".extend_btn").click(function() {
            index = $(this).attr('data-val');
            $.post("{{ route('mainInfo.extend') }}", {
                "_token": $('meta[name="csrf_token"]').attr('content'),
                "index": index
            }, function(data) {
                var resp = data.info;
                if (data.status == 200) {
                    console.log(data.data);
                    toastr.success(data.message);
                    // window.location.reload(true);
                } else if (data.status == 404) {
                    toastr.error(data.message);
                }
            }, 'json')
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
                    // window.location.reload(true);
                } else if (data.status == 401) {
                    toastr.error(data.message);
                }
            }, 'json')
        });
    </script>
@endsection
