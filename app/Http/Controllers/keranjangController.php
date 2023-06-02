<?php

namespace App\Http\Controllers;

use App\Models\alamat;
use App\Models\keranjang;
use App\Models\product;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


use Auth;

class keranjangController extends Controller
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

    public function transaksi()
    {
        $transaksi = transaksi::All();
        return view('admin.tabeltransaksi', compact('transaksi'));
    }

    public function riwayattransaksi()
    {
        $akun = Auth::user();
        $transaksi = transaksi::All();
        return view('auth.transaksi', compact('transaksi', 'akun'));
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
        return view('deskripsiproduk', ['user'=>$user]);
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
        $keranjang = new keranjang();
        $keranjang->id_product = $request->product;
        $keranjang->id_user = Auth::user()->id_user;
        $keranjang->warna = $request->warna;
        $keranjang->ukuran = $request->ukuran;
        $keranjang->save();
        return Redirect::to('keranjang');
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
    public function destroy($id_keranjang)
    {
        //
        $model = product::find($id_keranjang);
        $model->delete();
        return Redirect::to('keranjang');
    }
}
