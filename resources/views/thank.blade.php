@extends('layouts.user')
@section('content')

<main class="wrap thank_page">
    <h1 id="thank_txt">求人に応募いただき<br class="sp">ありがとうございます。</h1>
    <p class="contact_you">担当者よりご連絡させていただきます。</p>
     <div id="company_info">
         <p class="company-name">
            <span class="_cn">応募先企業名：</span>
            @if(session('c_name'))
            <span class="_dn">{{session('c_name')}}</span>
            @endif
         </p>
         <p class="company-address">
            <span class="_ad">勤務地：</span>
            @if(session('c_address'))
            <span class="_dd">{{session('c_address')}}</span>
            @endif
         </p>
      </div>
      <div class="no_contact">
        <p class="sorry">返信がない場合はお手数ですが電話などで直接事業所へご連絡ください。</p>
        @if(session('c_phone'))
        <p class="sorry_number">{{session('c_phone')}}</p>
        @endif
      </div>

</main>

@if(session('success'))
    <script>
        $(document).ready(function () {
            toastr.success('{{ session('success') }}');
        });
    </script>
@endif
@endsection