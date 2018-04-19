<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $booking=Booking::where('id_user', Auth::user()->id)->get();
        return view('dashboard-user.home-user', compact('booking'));

    }
}
