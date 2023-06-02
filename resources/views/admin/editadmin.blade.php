@extends('layouts.masteradmin')
@section('content')
<div class="containerADCPT">
        <h1 class="judulADCPT">
            Edit Admin
        </h1>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    ID Admin
                </p>
            </div>
            <div class="col-9">
                <p class="isiADCPT">120</p>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Email
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="email" name="Email" placeholder="  Email">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Nama
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="email" name="Nama" placeholder="  Nama">
            </div>
        </div>

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

        <div class="row">
            <div class="col-3">
                <p class="namaADCPT">
                    Role
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="text" name="Role" placeholder="  Role">
            </div>
        </div>

        <p class="infoSalahADCPT">
            Nama Pengguna sudah digunakan
        </p>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonSimpanADCPT border border-dark rounded-3">SIMPAN</button>
            </div>
        </div>

    </div>
    @stop