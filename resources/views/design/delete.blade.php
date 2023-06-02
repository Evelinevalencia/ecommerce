@extends('layouts.masteradmin')
@section('content')
<div class="containerD-HD">
    <h1 class="judulD-HD">
        Hapus Desain
    </h1>
    <form class="delete-form" action=" {{ URL::to('designadmin/'.$design->id_design) }} " method="POST">
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
                <p class="namaD-HD">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiD-HD border border-dark rounded-3" type="password" name="katasandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonHapusD-HD border border-dark rounded-3" type="submit">HAPUS</button>
            </div>
        </div>
    </form>

</div>
@stop