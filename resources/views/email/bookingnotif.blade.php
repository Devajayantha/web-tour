@component('mail::message')
# Booking Success

You have finished booking. Here are the details.<br>

@component('mail::table')
| Detail        |  Customer Input                      |
| ------------- | ---------------------------------:   |
| Booking No    | {{$user->booking_no}}                |
| Package       | {{$user->detpaket->paket->name}}      |
| Sub Paket     | {{$user->detpaket->subpaket->name}}   |
| Person        | {{$user->person}}                     |
| Amount        | {{$user->amount}}                     |

@endcomponent
Please proceed to upload your payment below.
@component('mail::button', ['url' => 'http://127.0.0.1:8000/user/dashboard'])
Upload Payment
@endcomponent

Thanks,<br>
'Penida Hill Tour and Travel'
@endcomponent
