@extends('layouts.master')
@section('content')
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
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                {{ csrf_field() }}
                <div class="card-body">
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
                    <div class="containerPA-BD">
                        <div class="row">
                            <div class="col-3">
                                <p class="namaPA-BD">
                                    Kata Sandi Lama
                                </p>
                            </div>
                            <div class="col-9">
                                <input id="current-password" type="password" class=" isiPA-BD border border-dark rounded-3 @error('current_password') is-invalid @enderror" name="current-password" required autocomplete="current_password" placeholder="  Kata Sandi Lama">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p class="namaPA-BD">
                                    Kata Sandi
                                </p>
                            </div>
                            <div class="col-9">
                                <input id="newPasswordInput" class=" isiPA-BD border border-dark rounded-3 @error('password') is-invalid @enderror" type="password" name="new-password" required autocomplete="new-password" placeholder="  Kata Sandi Baru">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <p class="namaPA-BD">
                                    Kata Sandi Baru
                                </p>
                            </div>
                            <div class="col-9">
                                <input id="confirmNewPasswordInput" class=" isiPA-BD border border-dark rounded-3" type="password" required autocomplete="new-password" name="new-password-confirmation" placeholder="  Konfirmasi Kata Sandi Baru">
                            </div>
                        </div>
                        @error('new_password')
                        <span class="infoSalahPA-KS">{{ $message }}</span>
                        @enderror
                        @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-4">
                                <button class="buttonSimpanPA-KS border border-dark rounded-3" type="submit">SIMPAN</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="{{url('/sandibaru')}}" class="lupaSandiPA-KS">Lupa Kata Sandi ?</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    @stop