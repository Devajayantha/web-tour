<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Paket;
use App\Subpaket;
use App\detpakets;
use Auth;
use Session;
use DB;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\BookingNotification;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking=Booking::all();
        $detpaket = detpakets::all();       
        return view('bookingnow', compact('booking', 'detpaket'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'telp' => 'required|numeric',
            'id_detpaket' => 'required',
            'person' => 'required',
            'departure' => 'required'
        ]);
        
        $booking= new Booking();
        $booking->booking_no = $request->booking_no;
        $booking->id_user = $request->id_user;
        $booking->telp = $request->telp;
        $booking->id_detpaket = $request->id_detpaket;
        $booking->person = $request->person;
        $booking->departure = $request->departure;
        $booking->amount = $booking->detpaket->price*$booking->person;
        $booking->save();

        $user=User::find(1);
        $user->notify(new BookingNotification($booking));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
