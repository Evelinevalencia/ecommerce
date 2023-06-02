@extends('layouts.master')
@section('content')
<div style="margin-top:30px ;">
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

            <div class="containerLihatAlamat">
                @foreach ($alamat as $key => $value)
                @if ($value->id_user == Auth::user()->id_user)
                <div class="borderAlamat rounded-2">
                    <div class="row">
                        <div class="col-3">
                            <p class="namaPA-A">
                                Label Rumah
                            </p>
                        </div>
                        <div class="col-9">
                            <input class=" isiPA-A border border-dark rounded-3" disabled value="  {{ $value->label }}" type="text" name="Label Rumah">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p style="margin-top:15px ;" class="namaPA-A">
                                Alamat Lengkap
                            </p>
                        </div>
                        <div class="col-9">
                            <textarea style="margin-top:15px ;height:100px ;margin-bottom:10px;" class=" isiPA-A border border-dark rounded-3" disabled type="text" name="Alamat Lengkap"> {{ $value->alamat }}</textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-3">
                            <p class="namaPA-A">
                                Kode Pos
                            </p>
                        </div>
                        <div class="col-9">
                            <input class=" isiPA-A border border-dark rounded-3" disabled value="  {{ $value->kodepos }}" type="text" name="Kode Pos">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <p class="namaPA-A">
                                Nomor Telepon
                            </p>
                        </div>
                        <div class="col-9">
                            <input class=" isiPA-A border border-dark rounded-3" disabled value="  {{ $value->notelp }}" type="text" name="Nomor Telepon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p class="namaPA-BD">
                                Catatan Kurir
                            </p>
                        </div>
                        <div class="col-9">
                            <textarea style="height:100px ;margin-bottom:10px;" disabled class=" isiPA-BD border border-dark rounded-3" type="text" name="CatatanKurir"> {{ $value->notes }}</textarea>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="row">
                        <div class="col-12">
                            <a href="{{url('/alamat/create')}}" style="text-decoration:none; color:black; margin-top:-25px;display:block; margin-bottom:15px;" class="namaPA-A">Tambah Alamat</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @stop