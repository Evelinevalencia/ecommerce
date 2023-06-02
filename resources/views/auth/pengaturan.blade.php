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
            <a class="keluarPA-P" href="href=" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                keluar
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a class="hapusAkunPA-P" onclick="return confirm('Hapus Akun?')">Hapus Akun</a>
            <form method="POST" action="{{ route('hapusakun') }}" style="display: inline-block;">
                @csrf
                @method('DELETE')
                
            </form>
        </div>
    </div>
</div>
@stop