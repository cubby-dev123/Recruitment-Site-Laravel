<p><strong>お名前（漢字）:</strong> {{ $surname01 }}{{ $name01 }}</p>
    <p><strong>お名前（ふりがな）:</strong> {{ $surname02 }}{{ $name02 }}</p>
    <p><strong>ご住所 :</strong> {{ $address }}</p>
    <p><strong>メールアドレス:</strong> {{ $email }}</p>
    <p><strong>電話番号:</strong> {{ $phone_number }}</p>
    <p><strong>性別:</strong> {{ $gender }}</p>
    <p><strong>年齢:</strong> {{ $age }}歳</p>
    <p><strong>希望職種:</strong> {{ $hopeful_job }}</p>
    <p><strong>雇用形態:</strong> {{ $job_type }}</p>
    <p><strong>保有資格:</strong>
        @if($degree)
            @if(is_array($degree))
                {{ implode(', ', $degree) }}
            @else
                {{ $degree }}
            @endif
        @else
            No qualifications provided
        @endif
    </p>
    <p><strong>その他資格:</strong> {{ $other_degree }}</p>

  

   