<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_lapak;
use View;
use Image;

class LapakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $lapak = model_lapak::where('user_id', $id)->first();
        return View::make('layouts.lapak.profile', array('lapaks' => $lapak));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = model_lapak::where('id',$id)->get();

     return view('layouts.lapak.profile',compact('data'));
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
       $data = model_lapak::where('user_id',$id)->first();
       $data->nama_lapak = $request->nama;
       $data->alamat = $request->alamat;
       $data->user_id = $id;
       if($request->hasFile('gambarlapak')){
         $avatar = $request->file('gambarlapak');
         $filename = time().'.' .$avatar->getClientOriginalExtension();
         Image::make($avatar)->resize (300,300)->save(public_path('/upload/lapak/'.$filename));

         $data->file = $filename;
       }
       $data->save();
       return redirect()->route('home')->with('alert-success','Data berhasil diubah!');
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
