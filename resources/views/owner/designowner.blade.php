@extends('layouts.masterowner')
@section('content')
<div class="containerD-MP">
    <div class="clearD-MP"></div>

    <table class="table tableD-MP">
        <thead>
            <tr>
                <th scope="col">ID Desain</th>
                <th scope="col">Nama Desain</th>
                <th scope="col">Deskripsi Desain</th>
            </tr>
        </thead>
        <tbody>
            @foreach($design as $form)
            <tr>
                <th scope="row">{{$form->id_design}}</th>
                <td>{{$form->nama_design}}</td>
                <td>{{$form->deskripsi_design}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop