@extends('layouts.masteradmin')
@section('content')
<div class="containerP-MP">
    <a class="borderP-MP border border-3 border-dark rounded-3" href="{{URL::to('product/create')}}"><i class="fasP-MP fas fa-plus"></i>TAMBAH</a>
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
                <th scope="col">Aksi</th>
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
                <td>
                    <a class="aP-MP" href="{{URL::to('product/'.$form->id_product)}}">Detail</a>
                    <a class="aP-MP" href="{{URL::to('product/'.$form->id_product.'/edit')}}">Edit</a>
                    <a class="aP-MP" href="{{URL::to('hapusproduk/'.$form->id_product)}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop