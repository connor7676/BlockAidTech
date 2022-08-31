
@component('mail::message')
Hello **{{$name}}**,  {{-- use double space for line break --}}

Note:
{{$note}}

Click below to send your bitcoin payment.
@component('mail::button', ['url' => $url])
Send Payment
@endcomponent

${{$amount}} will be deducted from your account.

Sincerely,
Blockaid Team.
@endcomponent
