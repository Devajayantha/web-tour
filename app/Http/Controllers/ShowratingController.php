<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DB;

class ShowratingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ratings = DB::table('bookings')->join('users','users.id', '=', 'bookings.id_user' )
        ->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->select('bookings.*','users.name as name', 'subpakets.name as subpaket', 'pakets.name as paket')
        ->orderBy('id','DESC')
        ->where('confirmation','1')
        ->get();

        return view('dashboard-admin.rating-admin', compact('ratings'));
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
    public function updateValid(Request $request)
    {
        $ratings = Booking::findOrFail($request->id);
        $ratings->confirm_rating=1;
        $ratings->save();

        return redirect ('/admin/rating');


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCancel(Request $request)
    {
        $ratings = Booking::findOrFail($request->id);
        $ratings->confirm_rating=0;
        $ratings->save();

        return redirect ('/admin/rating');
    }
}
