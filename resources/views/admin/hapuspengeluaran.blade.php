@extends('layouts.masteradmin')
@section('content')
<form class="delete-form" action=" {{ URL::to('pengeluaran/'.$pengeluaran->id_pengeluaran) }} " method="POST">
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
    <div class="containerP-HP">
        <h1 class="judulP-HP">
            Hapus Data Pengeluaran
        </h1>

        <div class="row">
            <div class="col-3">
                <p class="namaP-HP">
                    Kata Sandi
                </p>
            </div>
            <div class="col-9">
                <input class=" isiP-HP border border-dark rounded-3" type="password" name="katasandi" placeholder="  Kata Sandi">
            </div>
        </div>

        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <button class="buttonHapusP-HP border border-dark rounded-3">HAPUS</button>
            </div>
        </div>

    </div>
</form>

@stop