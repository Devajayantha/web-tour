<?php

namespace App\Http\Controllers;

use App\Messageuser;
use Auth;
use Alert;
use Illuminate\Http\Request;

class MessageuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msg=Messageuser::where('id_user', Auth::user()->id)->get();
        return view('dashboard-user.home-user-message', compact('msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $msg=Messageuser::all();
        return view('dashboard-user.home-user-message',compact('msg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg = new Messageuser();
        $msg->id_user = $request->id_user;
        $msg->message = $request->message;
        $msg->save();
        return redirect('/user/message');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Messageuser  $messageuser
     * @return \Illuminate\Http\Response
     */
    public function show(Messageuser $messageuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messageuser  $messageuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Messageuser $messageuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messageuser  $messageuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messageuser $messageuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messageuser  $messageuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messageuser $messageuser)
    {
        //
    }
}
