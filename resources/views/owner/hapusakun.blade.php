@extends('layouts.masterowner')
@section('content')
<div class="containerA-HA">
    <h1 class="judulA-HA">
        Hapus Akun
    </h1>
    <form class="delete-form" action=" {{ URL::to('tambahakun/'.$user->id_user) }} " method="POST">
        @method('DELETE')
        @csrf
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
        <div class="row">
            <div class="col-3">
                <p class="namaA-HA">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiA-HA border border-dark rounded-3" type="password" name="katasandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button type="submit" class="buttonHapusA-HA border border-dark rounded-3">HAPUS</button>
            </div>
        </div>
    </form>

</div>
@stop