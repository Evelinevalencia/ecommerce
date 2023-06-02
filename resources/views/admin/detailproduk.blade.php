@extends('layouts.masteradmin')
@section('content')
<div class="containerADCPT">
    <h1 class="judulADCPT">
        Detail Produk
    </h1>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                ID Product
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->id_product}}" name="ID Product">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Design Produk
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->id_design}}" name="Design Produk">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Nama Product
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->nama_product}}" name="Nama Product">
        </div>
    </div>



    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Deskripsi Produk
            </p>
        </div>
        <div class="col-9">
            <textarea style="height:100px ;margin-bottom:10px;" class=" isiADCPT border border-dark rounded-3" disabled name="Deskripsi Produk">{{$product->deskripsi_product}}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Harga
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->harga_product}}" name="Harga">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Warna
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->warna_product}}" name="Warna">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Kode Warna
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->kode_warna}}" name="Warna">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Ukuran
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->ukuran_product}}" name="Ukuran">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Gambar 1
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPTFile border border-dark rounded-3" type="text" disabled value="{{$product->foto_product1}}" name="Gambar 1">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Gambar 2
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPTFile border border-dark rounded-3" type="text" disabled value="{{$product->foto_product2}}" name="Gambar 2">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Gambar 3
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPTFile border border-dark rounded-3" type="text" disabled value="{{$product->foto_product3}}" name="Gambar 3">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Gambar 4
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPTFile border border-dark rounded-3" type="text" disabled value="{{$product->foto_product4}}" name="Gambar 4">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Diskon
            </p>
        </div>
        <div class="col-9">
            <div class="input-group mb-3">
                <input style="height: 35px; width:271px;" type="text" disabled value="{{$product->discount}}" class="border border-dark rounded-3" aria-label="Amount (to the nearest percentage)"><i style="font-size:20px;line-height:35px;margin-left:5px;" class="fas fa-percentage"></i>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Jenis Produk
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->jenis_product}}" name="Jenis Produk">
        </div>
    </div>


    <div class="row">
        <div class="col-3">
            <p class="namaADCPT">
                Stock Produk
            </p>
        </div>
        <div class="col-9">
            <input class=" isiADCPT border border-dark rounded-3" type="text" disabled value="{{$product->stock_product}}" name="Stock Produk">
        </div>
    </div>
</div>
@stop