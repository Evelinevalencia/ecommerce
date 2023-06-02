<?php

namespace App\Http\Controllers;

use App\Models\alamat;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class alamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $alamat = alamat::where('id_user', '=', $user->id_user)->get();
        $jumlah_data = alamat::count();
        return view('auth.listalamat', compact('user', 'alamat', 'jumlah_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        return view('auth.alamat', ['user'=>$user]);
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
        $alamat = new alamat();
        $alamat->id_user = Auth::user()->id_user;
        $alamat->label = $request->LabelRumah;
        $alamat->alamat = $request->AlamatLengkap;
        $alamat->kodepos = $request->KodePos;
        $alamat->notelp = $request->NomorTelepon;
        $alamat->notes = $request->CatatanKurir;
        $alamat->save();
        return Redirect::to('listalamat');
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
    public function destroy($id_alamat)
    {
        //
        $model = alamat::find($id_alamat);
        $model->delete();
        return Redirect::to('listalamat');
    }
}
