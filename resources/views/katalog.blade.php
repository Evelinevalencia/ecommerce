@extends('layouts/master')
@section('content')
<div style="margin-top: 30px;">
  <div class="containerL-K">
    <div class="dropdownL-K">
      <select style="width:120px; text-align:left; word-spacing:25px; margin-bottom:15px; font-weight:600; background-color:white; color:black; height: 45px" class="border border-dark rounded-3" id="inputGroupSelect02">
        <option selected value="1">Default</option>
        <option value="2">OverSize</option>
        <option value="2">NormalSize</option>
      </select>
    </div>
    <div class="clear"></div>

    <div class="containerCardL-K">
      <div class="row">
        @foreach ($product as $form)
        <div class="col-4">
          <div class="cardBorderL-K border border-3 card rounded-3">
            <a class="aL-K" href="{{url('/deskripsiproduk/'.$form->id_product)}}"><img src="./images/{{$form->foto_product1}}" class="imgCardL-K card-img-top  rounded-3" alt="..."></a>
            <a class="aL-K" href="{{url('/deskripsiproduk/'.$form->id_product)}}">
              <div class="card-body">
                <p style="color:black ;" class="cardJudulL-K card-title">{{$form->nama_product}}</p>
                  @if ($form->discount != null)
                  <p class="cardHargaL-K card-text">Rp. {{$form->harga_product - $form->discount}}
                <p class="cardDiskonL-K">Rp. {{$form->harga_product}}</p>
                @else
                <p class="cardHargaL-K card-text">Rp. {{$form->harga_product}}
                <p style="opacity:0 ;" class="kosongHome">Rp. {{$form->discount}}</p>
                @endif
                </p>
                <p class="cardTerjualL-K">Terjual 50+</p>
                <div class="clear"></div>
              </div>
            </a>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</div>
@stop