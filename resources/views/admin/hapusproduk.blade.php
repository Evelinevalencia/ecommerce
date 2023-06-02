@extends('layouts.masteradmin')
@section('content')
<div class="containerADCPT">
    <h1 class="judulADCPT">
        Hapus Produk
    </h1>
    <form class="delete-form" action=" {{ URL::to('product/'.$product->id_product) }} " method="POST">
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
                <p class="namaADCPT">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiADCPT border border-dark rounded-3" type="password" name="katasandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonHapusD-HD border border-dark rounded-3">HAPUS</button>
            </div>
        </div>
    </form>

</div>
@stop