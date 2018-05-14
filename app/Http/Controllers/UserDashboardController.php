<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Auth;
use DB;
use App\User;

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


    public function edit(User $user)
    {
        return view('dashboard-user.edit-user', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'birth' => 'required|date',
            'address' => 'required|string|max:50',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birth = $request->birth;
        $user->address = $request->address;
        
        $user->save();
        return redirect ('/user/dashboard'); 
    }
}
