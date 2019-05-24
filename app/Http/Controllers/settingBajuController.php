<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_lapak;
use App\model_barang;
use Auth;

use Image;

use View;

class settingBajuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return View('layouts.lapak.baju');
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
    public function store(Request $request, $id)
    {
      $namaLapak = model_lapak::find($id)->nama_lapak;

      $data = new model_barang();
      $data->id_lapak = 0;
      $data->nama_lapak = $namaLapak;
      $data->nama_barang = $request->nama;
      $data->harga_barang = $request->harga;
      $data->id_transaksi = 0;
      $data->id_cus = $id;

      if($request->hasFile('gambar')){
        $avatar = $request->file('gambar');
        $filename = time().'.' .$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize (300,300)->save(public_path('/upload/barang/'.$filename));

        $data->gambar = $filename;
      }
      $data->save();
      return redirect()->route('home')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return View::make('home');
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
