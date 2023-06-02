<?php

use Illuminate\Support\Facades\Form; ?>
@extends('layouts.master')
@section('content')
<Form method="POST" action=" {{ route('store') }}">
    @csrf
    <div class="containerPA">
        <i class="iconPA fas fa-user-circle"></i>
        <p class="namaPA">{{$user->name}}</p>
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
                            Label Rumah
                        </p>
                    </div>
                    <div class="col-9">
                        <select name="LabelRumah" class="isiPA-BD border border-dark rounded-3" id="inputGroupSelect02">
                            <option selected value="rumah">Rumah</option>
                            <option value="kantor">Kantor</option>
                            <option value="lainnya">lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Alamat Lengkap
                        </p>
                    </div>
                    <div class="col-9">
                        <textarea style="height:100px ;margin-bottom:10px;" class=" isiPA-BD border border-dark rounded-3" type="text" name="AlamatLengkap" placeholder="  Alamat Lengkap"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Kode Pos
                        </p>
                    </div>
                    <div class="col-9">
                        <input class=" isiPA-BD border border-dark rounded-3" type="text" name="KodePos" placeholder="  Kode Pos">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Nomor Telepon
                        </p>
                    </div>
                    <div class="col-9">
                        <input class=" isiPA-BD border border-dark rounded-3" type="text" name="NomorTelepon" placeholder="  Nomor Telepon">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p class="namaPA-BD">
                            Catatan Kurir
                        </p>
                    </div>
                    <div class="col-9">
                        <textarea style="height:100px ;margin-bottom:10px;" class=" isiPA-BD border border-dark rounded-3" type="text" name="CatatanKurir" placeholder="  Catatan Kurir"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-4">
                        <button class="buttonSimpanPA-BD border border-dark rounded-3" type="submit" value="submit">SIMPAN</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <a href="{{url('/alamat')}}" style="text-decoration:none; color:black; margin-top:-25px;display:block; margin-bottom:15px;" class="namaPA-A">Lihat Alamat</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</Form>
@stop