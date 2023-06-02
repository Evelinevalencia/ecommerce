@extends('layouts.master')
@section('content')
<div class="containerDProdukL-DP">
    <div class="containerImgDProdukL-DP">
        <img src="/images/{{$product->foto_product1}}" alt="" class="imgCardL-DP rounded-4">
        <img src="/images/{{$product->foto_product2}}" alt="" class="imgCardL-DP rounded-4">
        <img src="/images/{{$product->foto_product3}}" alt="" class="imgCardL-DP rounded-4">
        <img src="/images/{{$product->foto_product4}}" alt="" class="imgCardL-DP rounded-4">
    </div>

    <div class="containerIsiL-DP">
        <p class="judulIsiL-DP">{{$product->nama_product}}</p>

        <p class="cardHargaL-DP card-text">Rp. {{$product->harga_product-$product->discount}}
            @if ($product->discount != null)
        <p class="cardDiskonL-DP">Rp. {{$product->harga_product}}</p>
        @else
        <p style="opacity:0;display:inline-block">Kalau tidak diskon</p>
        @endif
        <!-- <p class="cardDiskonL-DP">Rp. 100.000</p> -->
        </p>
        <form method="POST" action="{{ URL::to('keranjang') }}">
            @csrf
        <p class="warnaL-DP">Warna</p>
        <div style="width: 40px;height:40px;background-color:white" class="buttonWarnaL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="putih" id="warna" name="warna"></div>
        <div style="width: 40px;height:40px;background-color:black" class="buttonWarnaL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="hitam" id="warna" name="warna"></div>
        <div style="width: 40px;height:40px;background-color:#fffbe7" class="buttonWarnaL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="krim" id="warna" name="warna"></div>
        <div style="width: 40px;height:40px;background-color:#bc8ac2" class="buttonWarnaL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="lilac" id="warna" name="warna"></div>
        
            <p class="ukuranL-DP">Ukuran</p>
            @if ($product->jenis_product == "oversize")
            <div style="width: 75px;" class="buttonSizeL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="s fit to m" id="ukuran" name="ukuran">S/M</div>
            <div style="width: 75px;" class="buttonSizeL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="l fit to xl" id="ukuran" name="ukuran">L/XL</div>
            @else
            <div style="width: 75px;" class="buttonSizeL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="m" id="ukuran" name="ukuran">M</div>
            <div style="width: 75px;" class="buttonSizeL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="l" id="ukuran" name="ukuran">L</div>
            <div style="width: 75px;" class="buttonSizeL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="xl" id="ukuran" name="ukuran">XL</div>
            <div style="width: 75px;" class="buttonSizeL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="xxl" id="ukuran" name="ukuran">XXL</div>
            <div style="width: 75px;" class="buttonSizeL-DP btn border border-dark rounded-2"><input style="height: 10px;" type="radio" value="xxxl" id="ukuran" name="ukuran">XXXL</div>
            @endif

            <input value="{{$product->id_product}}" name="product" style="opacity: 0%;">
            <button style="background-color:#8c661f; color:white" type="submit" class="buttonKeranjangL-DP btn border rounded-2"><i class="logoL-DP fas fa-plus-circle"></i>
                <p class="fontL-DP">Keranjang</p>
            </button>
        </form>
        <button style="color:#8c661f ;" type="button" class="buttonBeliL-DP btn border rounded-2">
            <p class="fontL-DP">Beli Sekarang</p>
        </button>

        <p class="pilihWarnaL-DP">Pilih warna dan ukuran yang diinginkan</p>

        <p class="deskripsiJudulL-DP">Deskripsi</p>
        <p class="deskripsiIsiL-DP">{{$product->deskripsi_product}}.</p>

    </div>
    <div class="clearL-DP"></div>
</div>
@stop