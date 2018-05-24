@component('mail::message')
# {{ $email_content }}


{{ $text_area }}

@component('mail::button', ['url' => ''])
Click Here
@endcomponent

Thanks,<br>
Penida Hill Tour and Travel
@endcomponent
