@extends('layouts.masteradmin')
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
        Edit Data Pengeluaran
    </h1>
    <form method="POST" action="/pengeluaran/{{$pengeluaran->id_pengeluaran}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf


        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Judul
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-EP border border-dark rounded-3" value="{{ old('judul_pengeluaran', $pengeluaran->judul_pengeluaran) }}" type="text" name="judul_pengeluaran" placeholder="  Judul">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Deskripsi Penjualan
                </p>
            </div>
            <div class="col-9">
                <textarea style="height:100px ;margin-bottom:10px;" class=" isiP-EP border border-dark rounded-3" name="deskripsi_pengeluaran">{{ old('deskripsi_pengeluaran', $pengeluaran->deskripsi_pengeluaran) }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Total Pengeluaran
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-EP border border-dark rounded-3" value="{{ old('total_pengeluaran', $pengeluaran->total_pengeluaran) }}" type="text" name="total_pengeluaran" placeholder="  Total Pengeluaran">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Tanggal Pengeluaran
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-EP border border-dark rounded-3" value="{{ old('tanggal_pengeluaran', $pengeluaran->tanggal_pengeluaran) }}" type="date" name="tanggal_pengeluaran" placeholder="  Tanggal Pengeluaran">
            </div>
        </div>



        <div class="row">
            <div class="col-3">
                <p class="namaP-EP">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-EP border border-dark rounded-3" type="password" name="katasandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonSimpanP-EP border border-dark rounded-3">SIMPAN</button>
            </div>
        </div>
    </form>
</div>
@stop