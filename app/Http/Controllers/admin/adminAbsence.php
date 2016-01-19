<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\modelAbsence;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminAbsence extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request){
        $data=$request->all();

        $petugas = DB::table('petugas')
                ->where('petugas.username','=',$data['username'])
                ->where('petugas.password','=',$data['password'])
                ->get();
        if($petugas){
        session(['id'=>$petugas['0']->id]);
        return $this->tampil();
        }else{

        return redirect('/adminAbsence');
        }
        
    }

    public function tampil(){
         $absence=$this->getAbsence("","");

         return view('admin.showAbsence',compact('absence'));

    }
    public function getAbsence($tahun,$bulan){
        $date1= $tahun."-0".$bulan."-01";
        $date2= $tahun."-0".$bulan."-30";
        $data="";
        if($bulan !=""){
            $data= DB::table('absence')
            ->join('mahasiswa','absence.nim','=','mahasiswa.nim')
            ->join('jurusan','mahasiswa.jurusan_id','=','jurusan.jurusan_id')
            ->whereBetween('absence.tanggal',[$date1,$date2])
            ->orderBy('absence.tanggal', 'asc')
            ->get();        
        }else{
            $data= DB::table('absence')
            ->join('mahasiswa','absence.nim','=','mahasiswa.nim')
            ->join('jurusan','mahasiswa.jurusan_id','=','jurusan.jurusan_id')
            ->orderBy('absence.tanggal', 'asc')
            ->get();        
        }   
        
        return $data;
    }
    public function filter(Request $request){
        $data=$request->all();
        // echo $data['tahun']."-0".$data['bulan'];
        $absence=$this->getAbsence($data['tahun'],$data['bulan']);
        // var_dump($absence);
        return view('admin.showAbsence',compact('absence'));
    }
    function chart(){
        return view('admin/chart');
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
}
