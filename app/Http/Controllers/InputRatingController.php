<?php

namespace App\Http\Controllers;

use App\InputRating;
use Auth;
use Illuminate\Http\Request;

class InputRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rating=InputRating::where('id_user', Auth::user()->id)->get();
        return view('dashboard-user.home-user-rating', compact('rating'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $rating=InputRating::all();
        return view('dashboard-user.home-user-rating',compact('rating'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rating = new InputRating();
        $rating->id_user = $request->id_user;
        $rating->stars = $request->stars;
        $rating->message = $request->message;
        $rating->save();
        return redirect('/user/addrating');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InputRating  $inputRating
     * @return \Illuminate\Http\Response
     */
    public function show(InputRating $inputRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InputRating  $inputRating
     * @return \Illuminate\Http\Response
     */
    public function edit(InputRating $inputRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InputRating  $inputRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputRating $inputRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InputRating  $inputRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputRating $inputRating)
    {
        //
    }
}
