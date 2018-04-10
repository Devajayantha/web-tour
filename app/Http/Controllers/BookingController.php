<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Paket;
use App\Subpaket;
use Session;
use Illuminate\Http\Request;

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
        $paket = Paket::all();
        $subpaket= Subpaket::all();
        return view('bookingnow', compact('booking', 'paket','subpaket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking= new Booking();
        $booking->booking_no = $request->booking_no;
        $booking->id_user = $request->id_user;
        $booking->telp = $request->telp;
        $booking->id_paket = $request->id_paket;
        $booking->id_subpaket = $request->id_subpaket;
        $booking->person = $request->person;
        $booking->departure = $request->departure;
        $booking->amount = $request->amount;
        $booking->save();
        return redirect()->back()->with('openModal', 'true');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        
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
