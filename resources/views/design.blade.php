@extends('layouts/master')
@section('content')
<div class="containerDesain">
    @foreach($design as $form)
    @if ($form->id_design % 2 != 0)
    <div class="row">
        <div class="col-6">
            <img src="./images/{{$form->foto_design}}" alt="design product" class="border rounded-3 imgKanan" />
        </div>

        <div class="col-5">
            <h1 class="h1JudulKanan">{{$form->nama_design}}</h1>
            <p class="pIsiKanan">
                {{$form->deskripsi_design}}
            </p>
        </div>
    </div>
    @endif
    @if ($form->id_design % 2 == 0)
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-5">
            <h1 class="h1JudulKiri">{{$form->nama_design}}</h1>
            <p class="pIsiKiri">
                {{$form->deskripsi_design}}
            </p>
        </div>
        <div class="col-6">
            <img src="./images/{{$form->foto_design}}" alt="design product" class="border rounded-3 imgKiri" />
        </div>
    </div>
    @endif
    @endforeach

</div>

@stop