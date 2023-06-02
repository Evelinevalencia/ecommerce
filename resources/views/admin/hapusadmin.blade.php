@extends('layouts.masteradmin')
@section('content')
<div class="containerADCPT">
        <h1 class="judulADCPT">
            Hapus Admin
        </h1>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="password" name="Kata Sandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <p class="infoSalahADCPT">
            Kata Sandi yang anda masukan salah
        </p>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonHapusADCPT border border-dark rounded-3">HAPUS</button>
            </div>
        </div>

    </div>
    @stop