@extends('layouts.masterowner')
@section('content')
<div class="containerA-EA">
    <h1 class="judulA-EA">
        Edit Admin
    </h1>

    <div class="row">
        <div class="col-3">
            <p class="namaA-EA">
                ID User
            </p>
        </div>
        <div class="col-9">
            <p class="isiA-EA">{{$user->id_user}}</p>
        </div>
    </div>
    <form method="POST" action="/tambahakun/{{$user->id_user}}">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-3">
                <p class="namaA-EA">
                    Nama
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-EA border border-dark rounded-3" type="text" value="{{$user->name}}" name="name" placeholder="  Nama">
            </div>
        </div>


        <div class="row">
            <div class="col-3">
                <p class="namaA-EA">
                    Email
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-EA border border-dark rounded-3" type="email" name="email" value="{{$user->email}}" placeholder="  Email">
            </div>
        </div>


        <div class="row">
            <div class="col-3">
                <p class="namaA-EA">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-EA border border-dark rounded-3" type="password" name="password" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <p class="namaA-EA">
                    Role
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-EA border border-dark rounded-3" type="text" value="{{$user->role}}" name="role" placeholder="  Role">
            </div>
        </div>

        <p class="infoSalahA-EA">
            Nama Pengguna sudah digunakan
        </p>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button type="submit" class="buttonSimpanA-EA border border-dark rounded-3">SIMPAN</button>
            </div>
        </div>
    </form>

</div>
@stop