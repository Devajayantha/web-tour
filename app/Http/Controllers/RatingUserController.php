<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RatingUser;
use App\Booking;
use DB;
use Auth;
use App\Http\Requests;
class RatingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rating=Booking::where('id_user', Auth::user()->id)
        ->where('confirmation','1')->orderBy('id', 'DESC')->get(); 
        // $rating = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        // ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        // ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        // ->join('users','users.id', '=', 'bookings.id_user' )
        // ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.name as name', 'users.email as email')
        // ->orderBy('id', 'DESC')
        // ->get();
        return view ('dashboard-user.home-user-add-rating', compact('rating'));

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
    public function update(Request $request)
    {
        // dd($request->all());
        $rating = Booking::findOrFail($request->id);
        $rating->stars = $request->get('stars');
        $rating->message = $request->get('message');
        $rating->save();
        // return back();
        return redirect ('/user/rating');
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

}
