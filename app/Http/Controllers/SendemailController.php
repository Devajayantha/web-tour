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
class SendemailController extends Controller
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
        // $mail = $request->input('mail')

        
        // Mail::send('new \App\Mail\MyMail', $data, function ($message) {
        //     $message->from('john@johndoe.com', 'John Doe');
        //     $message->sender('john@johndoe.com', 'John Doe');
        
        //     $message->to('john@johndoe.com', 'John Doe');
        
        //     $message->cc('john@johndoe.com', 'John Doe');
        //     $message->bcc('john@johndoe.com', 'John Doe');
        
        //     $message->replyTo('john@johndoe.com', 'John Doe');
        
        //     $message->subject('Subject');
        
        //     $message->priority(3);
        
        //     $message->attach('pathToFile');
        // });
        
            



        Mail::to($request->input('mail'))->send(new \App\Mail\MyMail($request->input('subject'),
                $request->input('message_email'),
                $request->attach('image')->getRealPath()
        ));
        return redirect()->back();
    }
}
