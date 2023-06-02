<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = product::All();
        return view('admin.tabelproduk', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $design = design::All();
        return view('admin.tambahproduk', ['design'=>$design]);
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
        $product = new product();
        $product->id_design = $request->id_design;
        $product->nama_product = $request->nama_product;
        $product->deskripsi_product = $request->deskripsi_product;
        $product->harga_product = $request->harga_product;
        if ($files = $request->file('foto_product1')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product1 = $name;
        } else {
            return Redirect::to('productadmin/create');
        }
        if ($files = $request->file('foto_product2')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product2 = $name;
        } else {
            return Redirect::to('productadmin/create');
        }
        if ($files = $request->file('foto_product3')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product3 = $name;
        } else {
            return Redirect::to('productadmin/create');
        }
        if ($files = $request->file('foto_product4')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product4 = $name;
        } else {
            return Redirect::to('productadmin/create');
        }
        $product->discount = (($request->discount/100) * $request->harga_product);
        $product->jenis_product = $request->jenis_product;
        $product->stock_product = $request->stock_product;
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        $product->save();
        return Redirect::to('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_product)
    {
        //
        $product = product::find($id_product);
        return view('admin.detailproduk', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        //
        $design = design::All();
        $product = product::where('id_product', $id_product)->first();
        return view('admin.editproduct', ['product'=>$product, 'design'=>$design]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
        //
        $product = product::find($id_product);
        $product->id_design = $request->id_design;
        $product->nama_product = $request->nama_product;
        $product->deskripsi_product = $request->deskripsi_product;
        $product->harga_product = $request->harga_product;
        if ($files = $request->file('foto_product1')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product1 = $name;
        } else {
            return Redirect::to('product/create');
        }
        if ($files = $request->file('foto_product2')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product2 = $name;
        } else {
            return Redirect::to('product/create');
        }
        if ($files = $request->file('foto_product3')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product3 = $name;
        } else {
            return Redirect::to('product/create');
        }
        if ($files = $request->file('foto_product4')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            $product->foto_product4 = $name;
        } else {
            return Redirect::to('product/create');
        }
        $product->discount = (($request->discount/100) * $request->harga_product);
        $product->jenis_product = $request->jenis_product;
        $product->stock_product = $request->stock_product;

        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        $product->save();
        return Redirect::to('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function formkatasandi($id_product)
    {
        $product = product::find($id_product);
        return view('admin.hapusproduk', ['product' => $product]);
    }

    public function destroy($id_product, Request $request)
    {
        //
        $model = product::find($id_product);
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        $model->delete();
        return Redirect::to('product');
    }
}
