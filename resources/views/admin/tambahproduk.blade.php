@extends('layouts.masteradmin')
@section('content')
<div class="containerADCPT">
    <h1 class="judulADCPT">
        Tambah Produk
    </h1>

    <form method="POST" action="{{ URL::to('product') }}" enctype="multipart/form-data">
        @csrf
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
        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Design Produk
                </p>
            </div>
            <div class="col-9">
                <select class="isiADCPT border border-dark rounded-3" id="inputGroupSelect02" name="id_design">
                    @foreach($design as $form)
                    <option selected value="{{$form->id_design}}">{{$form->id_design}} - {{$form->nama_design}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Nama Product
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="text" name="nama_product" placeholder="  Nama Produk">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Deskripsi Produk
                </p>
            </div>
            <div class="col-9">
                <textarea style="height:100px ;margin-bottom:10px;" class=" textADCPT border border-dark rounded-3" type="text" name="deskripsi_product" placeholder="  Deskripsi Produk"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Harga
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="text" name="harga_product" placeholder="  50000">
            </div>
        </div>
        
        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Gambar 1
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPTFile border border-dark rounded-3" type="file" name="foto_product1" placeholder="  123.png">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Gambar 2
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPTFile border border-dark rounded-3" type="file" name="foto_product2" placeholder="  123.png">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Gambar 3
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPTFile border border-dark rounded-3" type="file" name="foto_product3" placeholder="  123.png">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Gambar 4
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPTFile border border-dark rounded-3" type="file" name="foto_product4" placeholder="  123.png">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    discount
                </p>
            </div>
            <div class="col-9">
                <div class="input-group mb-3">
                    <input style="height: 35px; width:271px;" type="number" name="discount" placeholder="20" class="border border-dark rounded-3" aria-label="Amount (to the nearest percentage)"><i style="font-size:20px;line-height:35px;margin-left:5px;" class="fas fa-percentage"></i>
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
                <select class="isiADCPT border border-dark rounded-3" id="inputGroupSelect02" name="jenis_product">
                    <option selected value="oversize">Over Size</option>
                    <option value="normalsize">Normal Size</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Stock Produk
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="number" name="stock_product" placeholder="  20">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="password" name="katasandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonSimpanADCPT border border-dark rounded-3">SIMPAN</button>
            </div>
        </div>
    </form>
</div>
@stop