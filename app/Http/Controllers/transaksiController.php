<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\transaksi;
use App\models\keranjang;
use App\models\alamat;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class transaksiController extends Controller
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
        $product = product::get();
        $keranjang = keranjang::where('id_user', '=', $user->id_user)->get();
        $alamat = alamat::where('id_user', '=', $user->id_user)
        ->get();
        $ongkir = 10000;
        $jumlah_data = $keranjang->count();
        return view('beli', compact('keranjang', 'user', 'jumlah_data', 'product','alamat', 'ongkir')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('beli');
    }

    public function tambah()
    {
        return view('admin.tambahtransaksi');
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
        $transaksi = new transaksi();
        $transaksi->id_user = Auth::user()->id_user;
        $transaksi->id_alamat = $request->id_alamat;
        $transaksi->shipping = $request->shipping;
        $transaksi->total = $request->total;
        $transaksi->tanggal_transaksi = date('Y-m-d');
        $transaksi->save();
        return Redirect::to('/qr');
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
    public function edit($id_transaksi)
    {
        //
        // $transaksi = transaksi::where('id_transaksi', $id_transaksi)->first();
        // return view('tabeltransaksi', ['dtransaksi' => $transaksi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi)
    {
        //
        $transaksi = transaksi::find($id_transaksi);
        $transaksi->status = $request->status;
        $transaksi->save();
        return Redirect::to('tabeltransaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        //
        $model = transaksi::find($id_transaksi);
        $model->delete();
        return Redirect::to('home');
    }
}
