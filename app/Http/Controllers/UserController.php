<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
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
    //buat ngubah profile
    public function profile(){
      return view('profile',array('user' => Auth::user() ));
    }

    public function update_avatar(Request $request)
    {
      // handle the user upload of avatar
      if($request->hasFile('avatar')){
        $user->name = $request->nama;
        $avatar = $request->File('avatar');
        $filename = time().'.' .$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize (300,300)->save(public_path('/upload/avatars/'.$filename));

        $user = Auth::user();
        $user->avatar = $filename;
        $user ->save();
      }
        return view('profile',array('user' => Auth::user() ));
    }
}
