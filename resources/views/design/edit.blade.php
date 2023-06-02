@extends('layouts/masteradmin')
@section('content')
<div class="containerD-ED">
    <h1 class="judulD-ED">
        Edit Desain
    </h1>

    <div class="row">
        <div class="col-3">
            <p class="namaD-ED">
                ID Desain
            </p>
        </div>
        <div class="col-9">
            <p style="line-height:35px ;" class="isiD-ED">{{$design->id_design}}</p>
        </div>
    </div>
    <form method="POST" action="/designadmin/{{$design->id_design}}" enctype="multipart/form-data">
        @method('PUT')
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
                <p class="namaD-ED">
                    Nama Desain
                </p>
            </div>
            <div class="col-9">
                <input class="isiD-ED border border-dark rounded-3" value="{{ old('nama_design', $design->nama_design) }}" type="text" name="nama_design" placeholder="  {{$design->nama_design}}">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaD-ED">
                    Deskripsi Desain
                </p>
            </div>
            <div class="col-9">
                <textarea style="height:100px ;margin-bottom:10px;" class=" isiD-ED border border-dark rounded-3" type="text" name="deskripsi_design" placeholder="  {{$design->deskripsi_design}}">{{ old('deskripsi_design', $design->deskripsi_design) }}</textarea>
            </div>
        </div>


        <div class="row">
            <div class="col-3">
                <p class="namaD-ED">
                    Gambar Desain
                </p>
            </div>
            <div class="col-9">
                <input class=" isiD-EDFile border border-dark rounded-3" type="file" name="foto_design">
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
                <button type="submit" class="buttonSimpanD-ED border border-dark rounded-3">SIMPAN</button>
            </div>
        </div>
    </form>

</div>
@stop