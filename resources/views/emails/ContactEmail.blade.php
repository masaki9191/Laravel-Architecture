@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
@endcomponent
@endslot

<div>
お名前:{{$name}}<br>
郵便番号:{{$post_code}}<br>
住所:{{$address}}<br>
お電話番号:{{$tel}}<br>
メールアドレス:{{$email}}<br>
お問い合わせ内容・ご希望条件など:<br>
{{$body}}
</div>

{{-- Footer --}}
@slot('footer')
@component('mail::footer')

@endcomponent
@endslot
@endcomponent
