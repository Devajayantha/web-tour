<?php

namespace App\Http\Controllers;
use App\Http\requests;
use Illuminate\Http\Request;
use App\Post;
// use Illuminate\Mail\Mailer;
use App\Mail\Mymail;
use Mail;
use Image;
use Storage;
use Session;
use App\Subsribe;
class SendemailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsribe = Subsribe::all();
        $selectedTags = request()->get('subsribe');

        return view('dashboard-admin.broadcast-admin',compact('subsribe','selectedTags'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        //$emails = $request->all();
        //dd($request->subsribe);
        foreach($request->subsribe as $subscribe){
            Mail::to($subscribe)->send(new \App\Mail\MyMail($request->input('subject'),
                    $request->input('message_email')
            ));
        }
        return redirect()->back();
    }
}
