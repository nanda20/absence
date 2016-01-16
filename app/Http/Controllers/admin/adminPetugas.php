<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\modelPetugas;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
class adminPetugas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= modelPetugas::all();
        return view('admin.petugasIndex',compact('data'));
        
        
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petugasCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value=$request->all();
        

        $data=array(
            "username"=>$value['username'],
            "password"=>$value['password'],
            "level"=>'admin'
            );

        modelPetugas::create($data);
      return redirect()->route('adminPetugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data= modelPetugas::find($id);
        $data->delete($data);
        return redirect()->route('adminPetugas.index');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=modelPetugas::find($id);
        return view('admin.petugasUpdate',compact('data'));
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
        $data= modelPetugas::find($id);
        $request=array_except(Input::all(),'_method');
        $data->update($request);
        return redirect()->route('adminPetugas.index');
           

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

}
