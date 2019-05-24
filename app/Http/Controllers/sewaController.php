<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\model_lapak;
use App\User;

use App\model_pemesanan;
use App\model_barang;

class sewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = model_barang::all();
        $datalapak = model_lapak::all();
        return View('sewabaju',compact('data','$datalapak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pesanbaju');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
      $user = User::find($id);


      $newData = new model_pemesanan();
      $newData->jenispemesanan = "sewa";
      $newData->tanggal = $request->tanggal;
      $newData->alamat = $request->alamat;
      $user->alamat = $request->alamat;
      $newData->noHp = $user->noHP;
      $newData->id_cus = $user->id;
      $newData->lapak_id = 0;

      $user->save();
      $newData->save();
      return redirect()->route('sewabaju.index')->with('alert-success','Berhasil Membooking Baju!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $idsh = model_lapak::where('user_id',$id)->first();
      $idbarangs= model_barang::all()->where('id', 'id');
      return view('sewads',compact('idsh','idbarangs'));
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
