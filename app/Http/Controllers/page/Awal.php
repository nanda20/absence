<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\modelMahasiswa;
use App\modelAbsence;
use App\Http\Controllers\Controller;
use DB;

class Awal extends Controller
{
	public function index(){
		$data= $this->getAbsence();
		
		return view('mhs\index',compact('data',$data));

	}
	public function absence(Request $requests){
		 $nim=$requests->input_nip;
		 	 
		 if($data=modelMahasiswa::find($nim)){
		 	$this->insertAbsence($data->nim,$requests['pesan']);
		 	echo "Absen Berhasil Absen !";
		 	return redirect()->action('page\Awal@index');
		 }else{
		 	return view('mhs\index');
		 }

		
	}
	function insertAbsence($nim,$pesan){
		$data=array(
			"nim"=>$nim,
			"tanggal"=>date("Y-m-d"),
			"pesan"=>$pesan
			);
		modelAbsence::create($data);
	}

	function getAbsence(){
		$count=DB::table('absence')->where('absence.tanggal',date('Y-m-d'))->count();
		
		$data=array('jml'=> $count,
					'jml_ti'=>$this->getAbsenceByJur(1),
					'jml_mi'=>$this->getAbsenceByJur(2)
					 );
		return $data;
	}
	function getAbsenceByJur($jur){
		$jml= DB::table('absence')
		->join('mahasiswa','absence.nim','=','mahasiswa.nim')
		->join('jurusan','mahasiswa.jurusan_id','=','jurusan.jurusan_id')
		->where('absence.tanggal',date('Y-m-d'))
		->where('jurusan.jurusan_id','=',$jur)->count();
		return $jml;
	}

}