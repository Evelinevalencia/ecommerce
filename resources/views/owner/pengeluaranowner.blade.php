@extends('layouts.masterowner')
@section('content')
<div class="containerP-MP">
    <div class="clearP-MP"></div>

    <table class="table tableP-MP">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi Pengeluaran</th>
                <th scope="col">Total Pengeluaran</th>
                <th scope="col">Tanggal Pengeluaran</th>
                <th scope="col">Dilakukan Oleh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengeluaran as $key => $form)
            <tr>
                <th scope="row">{{$form->id_pengeluaran}}</th>
                <td>{{$form->judul_pengeluaran}}</td>
                <td>{{$form->deskripsi_pengeluaran}}</td>
                <td>{{$form->total_pengeluaran}}</td>
                <td>{{$form->tanggal_pengeluaran}}</td>
                <td>{{$form->id_user}} - {{$form->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop