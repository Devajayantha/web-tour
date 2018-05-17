@component('mail::message')
# Booking Success

You have finished booking. Here are the details.<br>

@component('mail::table')
| Detail        |  Customer Input                      |
| ------------- | ---------------------------------:   |
| Booking No    | {{$user->booking_no}}                |
| Package       | {$user->detpaket->paket->name}}      |
| Sub Paket     | {$user->detpaket->subpaket->name}}   |
| Person        | {$user->person}}                     |
| Amount        | {$user->amount}}                     |

@endcomponent
Please proceed to upload your payment below.
@component('mail::button', ['url' => '/user/dashboard'])
Upload Payment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent