<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\design;

use Illuminate\Support\Facades\Redirect;

class designcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $design = design::All();
        return view('design.index', compact('design'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('design.create');
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
        $design = new design();
        $design->nama_design = $request->nama_design;
        $design->deskripsi_design = $request->deskripsi_design;
        if ($files = $request->file('foto_design')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $design->foto_design = $name;
        } else {
            return Redirect::to('designadmin/create');
        }

        
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }

        $design->save();
        return Redirect::to('designadmin');
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
    public function edit($id_design)
    {
        //
        $design = design::where('id_design', $id_design)->first();
        return view('design.edit', ['design' => $design]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_design)
    {
        //
        $design = design::find($id_design);
        $design->nama_design = $request->nama_design;
        $design->deskripsi_design = $request->deskripsi_design;
        if ($files = $request->file('foto_design')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $design->foto_design = $name;
        } else {
            return Redirect::to('designadmin');
        }
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        $design->save();
        return Redirect::to('designadmin');
    }
    
     public function formkatasandi($id_design)
     {
         $design = design::find($id_design);
         return view('design.delete', ['design' => $design]);
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_design, Request $request)
    {
        $model = design::find($id_design);
         if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
              //The passwords matches
             return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
         }
        
        $model->delete();
        return Redirect::to('designadmin');
    }
}
