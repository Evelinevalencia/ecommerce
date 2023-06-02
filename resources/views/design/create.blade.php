@extends('layouts.masteradmin')
@section('content')
<div class="containerD-TD">
    <h1 class="judulD-TD">
        Tambah Desain
    </h1>

    <form method="POST" action="{{ URL::to('designadmin') }}" enctype="multipart/form-data">
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
                <p class="namaD-TD">
                    Nama Desain
                </p>
            </div>
            <div class="col-9">
                <input class="isiD-TD border border-dark rounded-3" name="nama_design" type="text">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaD-TD">
                    Deskripsi Desain
                </p>
            </div>
            <div class="col-9">
                <textarea style="height:100px ;margin-bottom:10px;" class=" isiD-TD border border-dark rounded-3" name="deskripsi_design"></textarea>
            </div>
        </div>


        <div class="row">
            <div class="col-3">
                <p class="namaD-TD">
                    Gambar Desain
                </p>
            </div>
            <div class="col-9">
                <input type="file" name="foto_design" class="isiD-TDFile border border-dark rounded-3">
            </div>
        </div>

        
        <div class="row">
            <div class="col-3">
                <p class="namaD-TD">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class="isiD-TD border border-dark rounded-3" name="katasandi" type="password">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button type="submit" class="buttonTambahD-TD border border-dark rounded-3">upload</button>
            </div>
        </div>
    </form>
</div>
@stop