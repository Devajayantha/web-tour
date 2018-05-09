<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Booking;
class PesanadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->join('users','users.id', '=', 'bookings.id_user' )
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.name as name', 'users.email as email')
        ->orderBy('id', 'DESC')
        ->get();

        $confirm=DB::table('bookings')->where('confirmation','=','0')->whereNotNull('payment')->first();
        //select('*')->where('confirmation','=','0')->count();
        if ($confirm!=NULL){
            return view ('dashboard-admin.home-admin', compact('booking'), ['warning' => sprintf('Mohon verifikasi booking #%s yang baru dibayar', $confirm->booking_no) ]);
        }
        else{
            return view ('dashboard-admin.home-admin', compact('booking'));
        }

        //return view ('dashboard-admin.home-admin', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmationPayment(Request $request, $id)
    {
        $payment = Booking::find($id);
        $payment->confirmation=1;
        $payment->save();
        return redirect('/admin/dashboard')->with('success',sprintf('Berhasil melakukan verifikasi #%s',$payment->booking_no ));
    }
}
