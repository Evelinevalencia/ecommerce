@extends('layouts.master')
@section('content')
<div class="containerPA">
        <i class="iconPA fas fa-user-circle"></i>
        <p class="namaPA">{{$akun->name}}</p>
        <div class="containerNavPA border border-dark rounded-3">
            <div class="divNavPA d-flex justify-content-center">
                <a href="{{url('/akun')}}" class="isiNavPA">Biodata Diri</a>
                <a href="{{url('/listalamat')}}" class="isiNavPA">Alamat</a>
                <a href="{{url('/changePassword')}}" class="isiNavPA">Kata Sandi</a>
                <a href="{{url('/transaksi')}}" class="isiNavPA">Transaksi</a>
                <a href="{{url('/pengaturan')}}" class="isiNavPA">Pengaturan</a>
            </div>
            <hr>

            <div class="containerPA-BD">
                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Nama Pengguna
                        </p>
                    </div>
                    <div class="col-9">
                        <input class=" isiPA-BD border border-dark rounded-3" type="text" name="Nama Pengguna" disabled value="  {{$akun->name}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Email
                        </p>
                    </div>
                    <div class="col-9">
                        <input class=" isiPA-BD border border-dark rounded-3" type="email" name="Email" disabled value="{{$akun->email}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Tanggal Lahir
                        </p>
                    </div>
                    <div class="col-9">
                        <input class=" isiPA-BD border border-dark rounded-3" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $akun->tanggal_lahir) }}" placeholder="  Tanggal Lahir">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Jenis Kelamin
                        </p>
                    </div>

                    <div class="col-9">
                        <select class="isiPA-BD border border-dark rounded-3" id="inputGroupSelect02" name="jk">
                            <option selected value="{{ old('jk', $akun->jk) }}">{{ old('jk', $akun->jk) }}</option>
                            <option value="lakilaki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-4">
                        <button class="buttonSimpanPA-BD border border-dark rounded-3">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop