<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Booking;
use Storage;
use Auth;
class UploadbayarController extends Controller
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
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket')
        ->orderBy('id', 'DESC')
        ->get();

        return view ('dashboard-admin.home-admin', compact('booking'));
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
        $post=Booking::where('id_user', Auth::user()->id)->get();
        // $post= restore();
        $post -> booking_no = $request->booking_no;


        $image = $request->file('payment');
        if($image){
            $filename =$post->booking_no . "_" . date('m-d-Y', time()) . '.' . $image->getClientOriginalExtension();
            $post->payment = $filename;
            $image->move(public_path('asset/images'),$filename);
        }

        $post->save();
        return redirect('/user/home')->with('success','Item created successfully!');
        // $filename = null;
        // if ($request->hasfile('payment')){
        //     $path = $request->file('payment')->store('public/profileaAdmin');
        //     $filename = basename($path);
        // }

        // $post = new Booking;
        // $post->payment = $filename;
        // $post->save();
        // $input = $request->all();
        // //upload foto
        // if ($request->hasFile('payment')) {
        //   $input['payment'] = $this->uploadFoto($request);
        // }
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
        // $post = Booking::find($id);

        // return view();
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
        $post = Booking::find($id);
            
        // $post -> booking_no = $request->

        $image = $request->file('payment');
        if ($image) {
            $filename = $post->booking_no . "_" . date('m-d-Y', time()) . '.' . $image->getClientOriginalExtension();
            $oldFilename = $post->payment;
            Storage::delete($oldFilename);
            $post->payment = $filename;
            $image->move(public_path('assets/images'), $filename);
        }
        $post->save();
        return redirect('/user/home')->with('success','Berhasil membayar, silahkan tunggu konfirmasi');

        // $post->$request->all();
        // if($request->hasFile('payment')){
        //     $file = $request->('payment');
        //     $path = $request->photo->path()
        // $request->payment->
        // }

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
    public function aploadfoto(Request $request)
    {
        // $foto = $request->file('payment');
        // $ext = $foto->getClientOriginalExtension();
 
        // if($request->file('payment')->isValid()){
        //     $namaFoto = date('YmdHis').".".$ext;
        //     $upload_path = 'fotoUpload';
        //     $request->file('payment')->move($upload_path,$namaFoto);
        //     return $namaFoto;
        // }
        // return false;
    }    
    
}
