@extends('layouts/master')
@section('content')
<div class="containerKeranjangL-B">
    <div class="cardKeranjangL-B">
        <p class="judulL-B">Pembelian</p>
        <div class="borderNewsL-B rounded-2">
            <p class="isiNewsL-B">Ini halaman terakhir dari proses belanjamu. Pastikan semua sudah benar, ya.:)</p>
        </div>

        @foreach($keranjang as $form)
        @foreach ($product as $value)
        <div class="cardBorderL-B border border-secondary rounded-2">
            <div class="containerGambarL-B">
                <img src="/images/{{$value->foto_product1}}" alt="" class="imgCardL-B rounded-2">
            </div>

            <div class="containerIsiL-B">
                <p class="namaBajuL-B">{{$value->nama_product}}</p>
                <p class="hargaBajuL-B">Rp. {{$value->harga_product}}</p>
                <p class="diskonL-B">Rp. {{$value->discount}}</p>
                <p class="warnaL-B">Warna</p>
                @if($form->warna == "putih")
                <button style="background-color:white" type="button" class="buttonWarnaL-B btn border rounded-2"></button>
                @elseif($form->warna == "hitam")
                <button style="background-color:black" type="button" class="buttonWarnaL-B btn border rounded-2"></button>
                @elseif($form->warna == "krim")
                <button style="background-color:#fffbe7" type="button" class="buttonWarnaL-B btn border rounded-2"></button>
                @elseif($form->warna == "lilac")
                <button style="background-color:#bc8ac2" type="button" class="buttonWarnaL-B btn border rounded-2"></button>
                @endif
                <p class="ukuranL-B">Ukuran</p>
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
                    <!-- <form class="delete-form" action=" {{ URL::to('keranjang/'.$form->id_keranjang) }} " method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="buttonIconK" type="submit"><i class="iconK far fa-trash-alt"></i></button>
                    </form> -->
                    <p class="jumlahQtyK">{{$form->qty}} pcs</p>
                </div>
            </div>
            <div class="clearL-B"></div>
        </div>
        @endforeach
        @endforeach
    </div>
    <form method="POST" action="{{ URL::to('beli') }}">
        @csrf
        <div class="cardPengirimanL-B">
            <hr>
            <p class="pPembayaranL-B">Pengiriman dan Pembayaran</p>
            <div class="turunL-B">
                <p class="pilihAlamatL-B">Pilih Alamat</p>
                <div class="dropdownAlamatL-B">
                    <select style="margin-bottom:20px ;" class="borderAlamatL-B border border-dark rounded-3" id="inputGroupSelect02" name="id_alamat">
                        @foreach ($alamat as $tes)
                        <option selected value="{{$tes->id_alamat}}">{{$tes->id_alamat }} - {{$tes->alamat}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="clearL-B"></div>
                <input value="{{$value->harga_product + $ongkir}}" name="total" style="opacity: 0%;">
                <!-- <p style="font-size:20px ; color:black;" class="namaL-B">Yonathan Arya Dhamma</p>
            <p class="noTelpL-B">081296007049</p>
            <p class="alamatL-B">MARTABAK MEDAN, NEGLASARI, Jl. Pulau Bidadari, Kec. Neglasari, Kota Tangerang, Banten, 15129</p>
            <p class="noteL-B">[Note : Deket Salon Aay]</p> -->

                <!-- <div class="clearL-B"></div> -->



                <p class="pilihPengirimanL-B">Pilih Pengiriman</p>
                <div class="dropdownPengirimanL-B">
                    <select class="borderPengirimanL-B border border-dark rounded-3" id="inputGroupSelect02" name="shipping">
                        <option selected value="jne">JNE</option>
                        <option value="sicepat">SICEPAT</option>
                        <option value="ninja">NINJA</option>
                    </select>
                </div>
            </div>
            <div class="clearL-B"></div>
            <hr style="margin-top:30px;">
        </div>

        <div class="cardtotalHargaL-B border border-secondary rounded-2">
            <p class="ringkasanBelanjaL-B">Ringkasan Belanja</p>
            <p style="color:grey ;" class="totalBarangL-B">Total Harga ({{$jumlah_data }} Barang)</p>
            <p class="hargaL-B">Rp. {{$value->harga_product}}</p>
            <div class="clearL-B"></div>
            <p style="color:grey ;" class="totalOngkosL-B">Total Ongkos Kirim</p>
            <p class="hargaL-B">Rp. {{$ongkir}}</p>
            <div class="clearL-B"></div>
            <p class="totalTagihanL-B">Total Tagihan</p>

            <p class="totalHargaL-B">Rp. {{$value->harga_product + $ongkir}}</p>
            <div class="clearL-B"></div>
            <button type="submit" class="buttonBayarL-B border border-dark rounded-2">BAYAR</button>
    </form>
</div>
<div class="clearL-B"></div>

</div>

@stop