@extends('layouts/masteradmin')
@section('content')
<div class="containerP-EP">
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1 class="judulP-EP">
        Edit Produk
    </h1>
    <form method="POST" action="/product/{{$product->id_product}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    ID Product
                </p>
            </div>
            <div class="col-9">
                <p style="line-height:35px ;" class="isiP-EP">{{$product->id_product}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Design Produk
                </p>
            </div>
            <div class="col-9">
                <select class="isiP-EP border border-dark rounded-3" id="inputGroupSelect02" name="id_design">
                    <option selected value="{{ old('id_design', $product->id_design) }}">Data Awal</option>
                    @foreach($design as $form)
                    <option value="{{$form->id_design}}">{{$form->id_design}} - {{$form->nama_design}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Nama Product
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-EP border border-dark rounded-3" value="{{ old('nama_product', $product->nama_product) }}" type="text" name="nama_product" placeholder="  {{$product->nama_product}}">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Deskripsi Produk
                </p>
            </div>
            <div class="col-9">
                <textarea style="height:100px ;margin-bottom:10px;" class=" isiP-EP border border-dark rounded-3" type="text" name="deskripsi_product" placeholder="  {{$product->deskripsi_product}}">{{ old('deskripsi_product', $product->deskripsi_product) }}</textarea>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Harga
                    </p>
                </div>
                <div class="col-9">
                    <input class=" isiP-EP border border-dark rounded-3" value="{{ old('harga_product', $product->harga_product) }}" type="text" name="harga_product" placeholder="  Rp. {{$product->harga_product}}">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Gambar 1
                    </p>
                </div>
                <div class="col-9">
                    <input class=" isiP-EPFile border border-dark rounded-3" value="{{ old('foto_product1', $product->foto_product1) }}" type="file" name="foto_product1">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Gambar 2
                    </p>
                </div>
                <div class="col-9">
                    <input class=" isiP-EPFile border border-dark rounded-3" value="{{ old('foto_product2', $product->foto_product2) }}" type="file" name="foto_product2">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Gambar 3
                    </p>
                </div>
                <div class="col-9">
                    <input class=" isiP-EPFile border border-dark rounded-3" value="{{ old('foto_product3', $product->foto_product3) }}" type="file" name="foto_product3">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Gambar 4
                    </p>
                </div>
                <div class="col-9">
                    <input class=" isiP-EPFile border border-dark rounded-3" value="{{ old('foto_product4', $product->foto_product4) }}" type="file" name="foto_product4">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Discount
                    </p>
                </div>
                <div class="col-9">
                    <div class="input-group mb-3">
                        <input style="height: 35px; width:271px;" value="{{ old('discount', $product->discount) }}" type="number" name="discount" placeholder="  {{$product->discount}}" class="border border-dark rounded-3" aria-label="Amount (to the nearest percentage)"><i style="font-size:20px;line-height:35px;margin-left:5px;" class="fas fa-percentage"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Jenis Produk
                    </p>
                </div>
                <div class="col-9">
                    <select class="isiP-EP border border-dark rounded-3" id="inputGroupSelect02" name="jenis_product">
                        <option selected value="oversize">Over Size</option>
                        <option value="normalsize">Normal Size</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Stock Produk
                    </p>
                </div>
                <div class="col-9">
                    <input class=" isiP-EP border border-dark rounded-3" value="{{ old('stock_product', $product->stock_product) }}" type="text" name="stock_product" placeholder="  {{$product->stock_product}}">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <p class="namaP-EP">
                        Kata Sandi
                    </p>
                </div>
                <div class="col-9">
                    <input class=" isiP-EP border border-dark rounded-3" type="text" name="katasandi">
                </div>
            </div>

            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-4">
                    <button class="buttonTambahP-EP border border-dark rounded-3" type="submit">SIMPAN</button>
                </div>
            </div>
    </form>

</div>
@stop