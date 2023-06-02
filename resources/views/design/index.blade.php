@extends('layouts.masteradmin')
@section('content')
<div class="containerD-MP">
    <a class="borderD-MP border border-3 border-dark rounded-3" href="{{url('/designadmin/create')}}"><i class="fasD-MP fas fa-plus"></i>TAMBAH</a>
    <div class="clearD-MP"></div>

    <table class="table tableD-MP">
        <thead>
            <tr>
                <th scope="col">ID Desain</th>
                <th scope="col">Nama Desain</th>
                <th scope="col">Deskripsi Desain</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($design as $form)
            <tr>
                <th scope="row">{{$form->id_design}}</th>
                <td>{{$form->nama_design}}</td>
                <td>{{$form->deskripsi_design}}</td>
                <td>
                    <a class="aD-MP" href="{{ URL::to('designadmin/'.$form->id_design.'/edit')}}">Edit</a>
                    <a class="aD-MP" href="{{ URL::to('hapusdesain/'.$form->id_design)}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop