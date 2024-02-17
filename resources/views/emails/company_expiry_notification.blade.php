<p>{{ $mailData['companyName'] }}様</p>

<p>これは、貴社のサブスクリプションが {{ $mailData['expirationDate'] }} に期限切れになることをお知らせする通知です。</p>

<p>サブスクリプションを延長するには、次のリンクをクリックしてください。</p>

<a href="{{ route('home', ['token' => $token]) }}">サブスクリプションの延長</a>

<p>ありがとうございます。</p>
<p>兵庫県自動車整備振興会</p>