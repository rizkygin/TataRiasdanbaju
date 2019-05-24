<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\model_lapak;
use App\model_pemesanan;
use App\User;
use View;

class tatarias_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = model_lapak::all();
        return View('tatarias',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return View('pesan');
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
      $newData->jenispemesanan = "tatarias";
      $newData->tanggal = $request->tanggal;
      $newData->alamat = $request->alamat;
      $newData->noHp = $user->noHP;
      $newData->id_cus = $user->id;
      $newData->lapak_id = $id;

      $newData->save();
      return redirect()->route('tatarias.index')->with('alert-success','Berhasil Membooking Jasa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = model_lapak::all();
        $ids = $data[$id-1];
        return View('ttd',compact('ids'));

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
