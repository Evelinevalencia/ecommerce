<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\pengeluaran;
use App\Models\User;

class pengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengeluaran = pengeluaran::All();
        return view('admin.pengeluaran', ['pengeluaran'=>$pengeluaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tambahpengeluaran');
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
        $pengeluaran = new pengeluaran();
        $pengeluaran->id_user = Auth::user()->id_user;
        $pengeluaran->judul_pengeluaran = $request->judul_pengeluaran;
        $pengeluaran->deskripsi_pengeluaran = $request->deskripsi_pengeluaran;
        $pengeluaran->total_pengeluaran = $request->total_pengeluaran;
        $pengeluaran->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }

        $pengeluaran->save();
        return Redirect::to('pengeluaran');

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
    public function edit($id_pengeluaran)
    {
        //
        $pengeluaran = pengeluaran::where('id_pengeluaran', $id_pengeluaran)->first();
        return view('admin.editpengeluaran', ['pengeluaran' => $pengeluaran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengeluaran)
    {
        //
        $pengeluaran = pengeluaran::find($id_pengeluaran);
        $pengeluaran->judul_pengeluaran = $request->judul_pengeluaran;
        $pengeluaran->deskripsi_pengeluaran = $request->deskripsi_pengeluaran;
        $pengeluaran->total_pengeluaran = $request->total_pengeluaran;
        $pengeluaran->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        $pengeluaran->save();
        return Redirect::to('pengeluaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function formkatasandi($id_pengeluaran)
    {
        $pengeluaran = pengeluaran::find($id_pengeluaran);
        return view('admin.hapuspengeluaran', ['pengeluaran' => $pengeluaran]);
    }
    
    public function destroy($id_pengeluaran, Request $request)
    {
        //
        $model = pengeluaran::find($id_pengeluaran);
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        $model->delete();
        return Redirect::to('pengeluaran');
    }
}
