@extends('layouts.masterowner')
@section('content')
<div class="containerA-TA">
    <h1 class="judulA-TA">
        Tambah Akun
    </h1>
    <form method="POST" action="{{ URL::to('tambahakun') }}">
    @csrf
        <div class="row">
            <div class="col-3">
                <p class="namaA-TA">
                    Nama
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-TA border border-dark rounded- 3 @error('name') is-invalid @enderror" type="text" name="name" placeholder="  Nama Lengkap" required autocomplete="name" autofocus>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaA-TA">
                    Email
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-TA border border-dark rounded-3 @error('email') is-invalid @enderror" type="email" name="email" placeholder="  Email" required autocomplete="email">
            </div>
        </div>


        <div class="row">
            <div class="col-3">
                <p class="namaA-TA">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-TA border border-dark rounded-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password" placeholder=" Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaA-TA">
                    Ulang Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-TA border border-dark rounded-3" id="password-confirm" type="password" placeholder="  Kata Sandi Ulang" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaA-TA">
                    Role
                </p>
            </div>
            <div class="col-9">
                <select class="isiA-TA border border-dark rounded-3 @error('role') is-invalid @enderror" id="inputGroupSelect02" name="role" required autocomplete="role">
                    <option selected value="admin">Admin</option>
                    <option value="customer">Customer</option>
                    <option value="owner">Owner</option>
                </select>
            </div>
        </div>

        @error('name')
        <span class="infoSalahA-TA" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        @error('email')
        <span class="infoSalahA-TA" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        @error('password')
        <span class="infoSalahA-TA" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button type="submit" class="buttonTambahA-TA border border-dark rounded-3">SIMPAN</button>
            </div>
        </div>
    </form>
</div>
@stop