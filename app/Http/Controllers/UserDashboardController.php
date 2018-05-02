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
        $confirm=DB::table('bookings')->select('*')->where('confirmation','=','1')->whereNotNull('payment')->count();
        if ($confirm>0){
        	return view('dashboard-user.home-user', compact('booking'),['success' => 'Pembayaran telah diverifikasi' ]);
        }

    }
}
