@extends('layouts.master')
@section('content')
<div class="containerKeranjangK">
    <div class="cardKeranjangK">
        <p class="judulK">Keranjang</p>

        @foreach($keranjang as $form)
        @foreach ($product as $value)
        <div class="cardBorderK border border-secondary rounded-2">
            <div class="containerGambarkeranjang">
                <img src="/images/{{$value->foto_product1}}" alt="" class="imgCardKeranjang rounded-2">
            </div>


            <div class="containerIsiK">
                <p class="namaBajuK">{{$value->nama_product}}</p>
                <p class="hargaBajuK">Rp. {{$value->harga_product}}</p>
                <p class="diskonK">Rp. {{$value->discount}}</p>
                <p class="warnaK">Warna</p>
                @endforeach

                @if($form->warna == "hitam")
                <button style="background-color:black" type="button" class="buttonWarnaK btn border border-dark rounded-2"></button>
                @elseif($form->warna == "putih")
                <button style="background-color:white" type="button" class="buttonWarnaK btn border border-dark rounded-2"></button>
                @elseif($form->warna == "krim")
                <button style="background-color:#fffbe7" type="button" class="buttonWarnaK btn border border-dark rounded-2"></button>
                @elseif($form->warna == "lilac")
                <button style="background-color:#bc8ac2" type="button" class="buttonWarnaK btn border border-dark rounded-2"></button>
                @endif

                <p class="ukuranK">Ukuran</p>
                @if($form->ukuran == "s fit to m")
                <button type="button" class="buttonSizeK btn border border-dark rounded-2">S/M</button>
                @elseif($form->ukuran == "l fit to xl")
                <button type="button" class="buttonSizeK btn border border-dark rounded-2">L/XL</button>
                @elseif($form->ukuran == "m")
                <button type="button" class="buttonSizeK btn border border-dark rounded-2">M</button>
                @elseif($form->ukuran == "l")
                <button type="button" class="buttonSizeK btn border border-dark rounded-2">L</button>
                @elseif($form->ukuran == "xl")
                <button type="button" class="buttonSizeK btn border border-dark rounded-2">XL</button>
                @elseif($form->ukuran == "xxl")
                <button type="button" class="buttonSizeK btn border border-dark rounded-2">XXL</button>
                @elseif($form->ukuran == "xxxl")
                <button type="button" class="buttonSizeK btn border border-dark rounded-2">XXXL</button>
                @endif


                <div class="tableIconK">
                    <form class="delete-form" action=" {{ URL::to('keranjang/'.$form->id_keranjang) }} " method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="buttonIconK" type="submit"><i class="iconK far fa-trash-alt"></i></button>
                    </form>
                    <p class="jumlahQtyK">{{$form->qty}}</p>
                </div>
            </div>
            <div class="clearK"></div>
        </div>

    </div>
    @endforeach
    <div class="cardtotalHargaK border border-secondary rounded-3">
        <p class="totalBarangK">Total Harga ({{$jumlah_data}} Barang)</p>
        <p class="hargaK">Rp. {{$value->harga_product*$form->qty}}</p>
        <div class="clearK"></div>
        <button type="submit" class="buttonBeliK border border-dark rounded-2"><a class="beliK" href="{{url('/beli')}}">BELI({{$jumlah_data}})</a></button>
    </div>
    <div class="clearL-PB"></div>
    
    
</div>

@stop