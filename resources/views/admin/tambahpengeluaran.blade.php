@extends('layouts.masteradmin')
@section('content')

<div class="containerP-TP">
    <h1 class="judulP-TP">
        Tambah Data Pengeluaran
    </h1>
    <form method="POST" action="{{ URL::to('pengeluaran') }}">
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
                <p class="namaP-TP">
                    Judul
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-TP border border-dark rounded-3" type="text" name="judul_pengeluaran" placeholder="  Judul">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-TP">
                    Deskripsi Pengeluaran
                </p>
            </div>
            <div class="col-9">
                <textarea style="height:100px ;margin-bottom:10px;" class=" isiP-TP border border-dark rounded-3" name="deskripsi_pengeluaran"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-TP">
                    Total Pengeluaran
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-TP border border-dark rounded-3" type="text" name="total_pengeluaran" placeholder="  Total Pengeluaran">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-TP">
                    Tanggal Pengeluaran
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-TP border border-dark rounded-3" type="date" name="tanggal_pengeluaran" placeholder="  Tanggal Penjualan">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaP-TP">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-TP border border-dark rounded-3" type="password" name="katasandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonTambahP-TP border border-dark rounded-3" type="submit">SIMPAN</button>
            </div>
        </div>
    </form>
</div>

@stop