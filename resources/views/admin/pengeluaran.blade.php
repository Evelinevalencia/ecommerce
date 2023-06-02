@extends('layouts.masteradmin')
@section('content')
<div class="containerP-MP">
    <a class="borderP-MP border border-3 border-dark rounded-3" href="{{URL::to('pengeluaran/create')}}"><i class="fasP-MP fas fa-plus"></i>TAMBAH</a>
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
                <th scope="col">Aksi</th>
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
                <td>
                    <a class="aP-MP" href="{{url('pengeluaran/'.$form->id_pengeluaran.'/edit')}}">Edit</a>
                    <a class="aP-MP" href="{{url('hapuspengeluaran/'.$form->id_pengeluaran)}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop