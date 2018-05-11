<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Auth;
use DB;

class UserDashboardController extends Controller
{
    public function index()
    {
        $booking=Booking::where('id_user', Auth::user()->id)->get();
        $confirm=DB::table('bookings')->where('confirmation','=','1')->whereNotNull('payment')->where('id_user', Auth::user()->id)->first();
        if ($confirm!=NULL){
        	return view('dashboard-user.home-user', compact('booking'),['success' => sprintf('Pembayaran #%s telah diverifikasi', $confirm->booking_no) ]);
        }
        else{
        	return view('dashboard-user.home-user', compact('booking'));
        }
        //return view('dashboard-user.home-user', compact('booking'));

    }
}
