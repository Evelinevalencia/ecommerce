@extends('layouts.masteradmin')
@section('content')
<div class="containerADCPT">
        <h1 class="judulADCPT">
            Tambah Tranksasi
        </h1>
        <form method="POST" action="{{ URL::to('beli') }}">
        @csrf


        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    alamat
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="text" name="id_alamat">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    shipping
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="text" name="shipping">
            </div>
        </div>


        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Harga
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="text" name="total">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button type="submit" class="buttonSimpanADCPT border border-dark rounded-3">SIMPAN</button>
            </div>
        </div>
        </form>

    </div>
    @stop