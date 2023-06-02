@extends('layouts.master')
@section('content')
<div class="containerPA">
        <i class="iconPA fas fa-user-circle"></i>
        <p class="namaPA">{{$akun->name}}</p>
        <div class="containerNavPA border border-dark rounded-3">
            <div class="divNavPA d-flex justify-content-center">
                <a href="{{url('/akun')}}" class="isiNavPA">Biodata Diri</a>
                <a href="{{url('/alamat')}}" class="isiNavPA">Alamat</a>
                <a href="{{url('/changePassword')}}" class="isiNavPA">Kata Sandi</a>
                <a href="{{url('/transaksi')}}" class="isiNavPA">Transaksi</a>
                <a href="{{url('/pengaturan')}}" class="isiNavPA">Pengaturan</a>
            </div>
            <hr>
            @foreach($transaksi as $form)
            <div class="containerPA-T">
                <div class="borderPA-T border border-dark rounded-2">
                    <div class="row">
                        <div class="col-10">
                            <p class="p1PA-T">Pembelian
                            <p class="p2PA-T">{{$form->tanggal_transaksi}}</p>
                            </p>
                        </div>

                        <div class="col">
                            <div class="borderStatusPA-T border border-dark rounded-4">
                                <p>{{$form->status}}</p>
                            </div>
                            <div class="clearPA-T"></div>
                        </div>

                        <div class="col-2">
                            <img src="img/4.png" alt="" width="120px" height="130px" class="aturPosisiPA-T">
                        </div>

                        <div class="col-10">
                            <div class="aturPosisiPA-T">
                                <p class="judulItemPA-T">Lorem ipsum dolor sir amet, consectetur adipiscing elit.</p>
                                <p class="isiItem1PA-T">1 Produk x Rp. 50.000</p>
                                <p class="isiItem2PA-T">Warna - Ukuran</p>
                            </div>
                        </div>

                        <div class="col-7">

                        </div>
                        @if($form->status == "belum dibayar") 
                        <div class="col-3 fakturPA-T">
                            <a href="{{url('/qr')}}" class="isiAPA-T">Lihat QR</a>
                        </div>
                        @endif

                        <div class="col">
                            <div class="aturFloatPA-T">
                                <p>Total Belanja</p>
                                <p class="hargaBelanjaPA-T">Rp. {{$form->total}}</p>
                            </div>
                            <div class="clearPA-T"></div>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>
@stop