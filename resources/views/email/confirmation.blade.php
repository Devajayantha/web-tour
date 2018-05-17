@component('mail::message')
# Booking Confirmation

Your booking payment has been confirmed.

@component('mail::table')
| Detail        |  Customer Input                      |
| ------------- | ---------------------------------    |
| Booking No    | {{$user->booking_no}}                |
| Package       | {{$user->detpaket->paket->name}}     |
| Sub Paket     | {{$user->detpaket->subpaket->name}}  |
| Departure     | {{$user->departure}}                 |
| Time          | 07.00 am							   |
| Person        | {{$user->person}}                    |
| Amount        | {{$user->amount}}                    |

@endcomponent

@component('mail::button', ['url' => 'http://127.0.0.1:8000/user/dashboard'])
See Payment
@endcomponent

Thanks,<br>
Penida Hill Tour and Travel
@endcomponent
