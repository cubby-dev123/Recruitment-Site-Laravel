@extends('layouts.user')
@section('content')
    <main>
      <div class="title page-title wow fadeInUp" data-wow-delay=".5s">
         <figure class="main-icon">
            <img src="./assets/img/main-icon.svg" alt="利用規約">
         </figure>
         <p class="txt">利用規約</p>
      </div>
      <p class="sub-title wow fadeInUp" data-wow-delay=".7s">ご利用前に必ずお読みください。</p>
      <div class="content wrap wow fadeInUp" data-wow-delay=".9s">
         <div class="_txt01">
            この求人情報掲示板（以下、「本掲示板」という。）は、一般社団法人兵庫県自動車整備振興会（以下「本会」という。）の会員事業者が<br class="pc">
            求職者に向けて求人情報を提供するためのものです。<br class="pc">
            ご利用にあたっては、以下の「利用規約」を一読のうえ、同意される場合のみご利用下さい。
         </div>
         <div class="_txt02">
            <p class="item"><span>1．</span>本会は、ウェブサイトで求人情報の場を提供するのみで、求人事業者と求職者の間を取り持つ「あっせん」は行いません。</p>
            <p class="item"><span>2．</span>求人情報に関するお問い合わせは、求人事業者に直接ご連絡下さい。本会では、求職者からの問い合わせに対し、一切お答えできません。
            </p>
            <p class="item"><span>3．</span>本会は、本掲示板を利用したことが理由で起きたトラブル、損害等について一切責任を負いません。</p>
            <p class="item"><span>4．</span>本掲示板内で掲載している情報は、求人事業者の責任において提供されるものであり、利用者は情報の内容について、<br class="pc"><span class="indent-txt">本会が何ら保証しないことを予め了承したうえ自己責任においてご利用下さい。</span></p>
            <p class="item"><span>5．</span>本掲示板に掲載された求人情報の転載や求人情報への直接リンク行為は禁止します。</p>
            <p class="item"><span>6．</span>本会は、必要に応じて事前に通知することなく利用規約を変更することがあります。</p>
            <p class="item"><span>7．</span>本会は、必要に応じて、事前に通知することなく当掲示板のサービス内容変更、一時的もしくは長期的な中断、または終了することがあります。
            </p>
            <p class="item"><span>8．</span>個人情報の取扱いは、「個人情報保護に関する基本方針」をご確認下さい。</p>
         </div>
         <div class="_txt03">
            <p>ご同意頂ける場合には「同意する」のボタンを押して下さい。<br class="pc">
               求人情報が表示されます。</p>
         </div>
      </div>
      <div class="btn-part wrap wow fadeInUp" data-wow-delay=".5s">
         <a href="{{ route('top') }}" class="agree-btn">同意する</a>
         <a href="{{ route('rule') }}" class="disagree-btn">同意しない</a>
      </div>
    </main>

    @endsection
