@extends('layouts.masterowner')
@section('content')
<div class="containerP-MP">
    <div class="clearP-MP"></div>

    <table class="table tableP-MP">
        <thead>
            <tr>
                <th scope="col">ID Produk</th>
                <th scope="col">ID Desain</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jenis Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $form)
            <tr>
                <th scope="row">{{$form->id_product}}</th>
                <td>{{$form->id_design}}</td>
                <td>{{$form->nama_product}}</td>
                <td>{{$form->jenis_product}}</td>
                <td>Rp. {{$form->harga_product}}</td>
                <td>{{$form->stock_product}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop