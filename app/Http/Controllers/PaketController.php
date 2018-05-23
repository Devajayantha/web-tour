<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Booking;
class PaketController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function grafik($id_detpaket){
        //  jumlah bintang keseluruhan
        $value_rating = DB::table('bookings')
        ->where('bookings.id_detpaket','=',$id_detpaket)
        ->sum('bookings.stars');
        

        // jumlah orang yang ngepost
        $count_rating = DB::table('bookings')
        ->where('bookings.id_detpaket','=',$id_detpaket)
        ->where('confirm_rating','=','1')
        ->count();
        if($count_rating>0){
            $rating= $value_rating/$count_rating;
        }else{
            $rating=0;
        }
        // menghitung grafik bintang yang muncul
        $stars5 = DB::table('bookings')
        ->where('bookings.id_detpaket','=',$id_detpaket)
        ->where('bookings.stars','=','5')
        ->count();
        
        if($count_rating>0){
            $value_rating_5 = $stars5*100/$count_rating;
        }else{
            $value_rating_5=0;
        }
        $stars4 = DB::table('bookings')
        ->where('bookings.id_detpaket','=',$id_detpaket)
        ->where('bookings.stars','=','4')
        ->count();
        // $value_rating_4 = $stars4*100/$count_rating;
        if($count_rating>0){
            $value_rating_4 = $stars4*100/$count_rating;
        }else{
            $value_rating_4=0;
        }
        $stars3 = DB::table('bookings')
        ->where('bookings.id_detpaket','=',$id_detpaket)
        ->where('bookings.stars','=','3')
        ->count();
        // $value_rating_3 = $stars3*100/$count_rating;      
        if($count_rating>0){
            $value_rating_3 = $stars3*100/$count_rating;
        }else{
            $value_rating_3=0;
        }
        $stars2 = DB::table('bookings')
        ->where('bookings.id_detpaket','=',$id_detpaket)
        ->where('bookings.stars','=','2')
        ->count();
        // $value_rating_2 = $stars2*100/$count_rating;    
        if($count_rating>0){
            $value_rating_2 = $stars2*100/$count_rating;
        }else{
            $value_rating_2=0;
        }
        $stars1 = DB::table('bookings')
        ->where('bookings.id_detpaket','=',$id_detpaket)
        ->where('bookings.stars','=','1')
        ->count();
        // $value_rating_1 = $stars1*100/$count_rating; 
        if($count_rating>0){
            $value_rating_1 = $stars1*100/$count_rating;
        }else{
            $value_rating_1=0;
        }
        $array = [
            'value_rating5'=> $value_rating_5,
            'value_rating4'=> $value_rating_4,
            'value_rating3'=> $value_rating_3,
            'value_rating2'=> $value_rating_2,
            'value_rating1'=> $value_rating_1,
            'stars5'=> $stars5,
            'stars4'=> $stars4,
            'stars3'=> $stars3,
            'stars2'=> $stars2,
            'stars1'=> $stars1,
            'rating'=> $rating
        ];
        return $array;
     }
    public function nphalfday()
    {
        $paket = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->join('users','users.id', '=', 'bookings.id_user' )
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.profilepic as profilepic','users.name as name', 'subpakets.name as subpaket')
        ->where('pakets.name','=','Nusa Penida')
        ->where('subpakets.name','=','Half Day')
        ->where('confirm_rating','=','1')
        ->orderBy('id', 'DESC')
        ->get();
        $array=$this->grafik(1);
        return view('paket-penida.nusapenida-hd', compact('paket','array'));
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function np2d1n()
    {
        $paket = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->join('users','users.id', '=', 'bookings.id_user' )
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.profilepic as profilepic', 'users.name as name', 'subpakets.name as subpaket')
        ->where('pakets.name','=','Nusa Penida')
        ->where('subpakets.name','=','2 Day 1 Night')
        ->where('confirm_rating','=','1')
        ->orderBy('id', 'DESC')
        ->get();
        $array=$this->grafik(2);
        return view('paket-penida.nusapenida-2d1n', compact('paket','array'));
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function np3d2n()
    {
        $paket = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->join('users','users.id', '=', 'bookings.id_user' )
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.profilepic as profilepic', 'users.name as name', 'subpakets.name as subpaket')
        ->where('pakets.name','=','Nusa Penida')
        ->where('subpakets.name','=','3 Day 2 Night')
        ->where('confirm_rating','=','1')
        ->orderBy('id', 'DESC')
        ->get();
        $array=$this->grafik(3);
        return view('paket-penida.nusapenida-3d2n', compact('paket','array'));
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nlhalfday()
    {
        $paket = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->join('users','users.id', '=', 'bookings.id_user' )
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.profilepic as profilepic', 'users.name as name', 'subpakets.name as subpaket')
        ->where('pakets.name','=','Nusa Lembongan')
        ->where('subpakets.name','=','Half Day')
        ->where('confirm_rating','=','1')
        ->orderBy('id', 'DESC')
        // ->take(2)
        ->get();
        $array=$this->grafik(4);
        return view('paket-lembongan.lembongan-hd', compact('paket','array'));
    }
            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nl2d1n()
    {
        $paket = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->join('users','users.id', '=', 'bookings.id_user' )
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.profilepic as profilepic', 'users.name as name', 'subpakets.name as subpaket')
        ->where('pakets.name','=','Nusa Lembongan')
        ->where('subpakets.name','=','2 Day 1 Night')
        ->where('confirm_rating','=','1')
        ->orderBy('id', 'DESC')
        ->get();
        $array=$this->grafik(5);
        return view('paket-lembongan.lembongan-2d1n', compact('paket','array'));
    }
    public function nl3d2n()
    {
        $paket = DB::table('bookings')->join('detpakets', 'detpakets.id' , '=', 'bookings.id_detpaket' )
        ->join('pakets', 'pakets.id', '=', 'detpakets.id_paket')
        ->join('subpakets', 'subpakets.id', '=', 'detpakets.id_subpaket' )
        ->join('users','users.id', '=', 'bookings.id_user' )
        ->select('bookings.*', 'subpakets.name as subpaket', 'pakets.name as paket', 'users.profilepic as profilepic', 'users.name as name', 'subpakets.name as subpaket')
        ->where('pakets.name','=','Nusa Lembongan')
        ->where('subpakets.name','=','3 Day 2 Night')
        ->where('confirm_rating','=','1')
        ->orderBy('id', 'DESC')
        ->get();
        $array=$this->grafik(6);
        return view('paket-lembongan.lembongan-3d2n', compact('paket','array'));
    }
    
}