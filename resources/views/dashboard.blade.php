@extends('layouts/master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="" class="aturCarouselL-B d-block w-100" alt="Carousel 1">
        </div>
        <div class="carousel-item">
            <img src="" class="aturCarouselL-B d-block w-100" alt="Carousel 2">
        </div>
        <div class="carousel-item">
            <img src="" class="aturCarouselL-B d-block w-100" alt="Carousel 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="containerL-B">
    <div class="containerCardL-B">
        <p class="produkBaruL-B">Produk Baru Kami</p>
        <div class="row">
            <?php $count = 0; ?>
            @foreach ($product as $form)
            <?php if ($count == 3) break; ?>
            <div class="col-4">
                <div class="cardBorderL-B border border-3 card rounded-3">
                    <a class="aL-B" href="{{url('/deskripsiproduk/'.$form->id_product)}}"><img src="./images/{{$form->foto_product1}}" class="imgCardL-B card-img-top  rounded-3" alt="..."></a>
                    <a class="aL-B" href="{{url('/deskripsiproduk/'.$form->id_product)}}">
                        <div class="card-body">
                            <p style="color:black ;" class="cardJudulL-B card-title">{{$form->nama_product}}</p>
                            @if ($form->discount != null)
                            <p class="cardHargaL-K card-text">Rp. {{$form->harga_product - $form->discount}}
                            <p class="cardDiskonL-K">Rp. {{$form->harga_product}}</p>
                            @else
                            <p class="cardHargaL-K card-text">Rp. {{$form->harga_product}}
                            <p style="opacity:0 ;" class="kosongHome">Rp. {{$form->discount}}</p>
                            @endif
                            </p>
                            <p class="cardTerjualL-B">Terjual 50+</p>
                            <div class="clear"></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php $count++; ?>
            @endforeach



            <!-- <div class="col-4">
                <div class="cardBorderL-B border border-3 card rounded-3">
                    <a class="aL-B" href="{{url('/deskripsiproduk')}}"><img src="img/4.png" class="imgCardL-B card-img-top  rounded-3" alt="..."></a>
                    <a class="aL-B" href="{{url('/deskripsiproduk')}}">
                        <div class="card-body">
                            <p style="color:black ;" class="cardJudulL-B card-title">Kaus Deus Vespa Rambut Cepmek</p>
                            <p class="cardHargaL-B card-text">Rp. 50.000
                            <p style="opacity:0 ;" class="kosongHome">Rp. 100.000</p>
                            </p>
                            <p class="cardTerjualL-B">Terjual 50+</p>
                            <div class="clear"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="cardBorderL-B border border-3 card rounded-3">
                    <a class="aL-B" href="{{url('/deskripsiproduk')}}"><img src="img/4.png" class="imgCardL-B card-img-top  rounded-3" alt="..."></a>
                    <a class="aL-B" href="{{url('/deskripsiproduk')}}">
                        <div class="card-body">
                            <p style="color:black ;" class="cardJudulL-B card-title">Kaus Deus Vespa Rambut Cepmek</p>
                            <p class="cardHargaL-B card-text">Rp. 50.000
                            <p class="cardDiskonL-B">Rp. 100.000</p>
                            </p>
                            <p class="cardTerjualL-B">Terjual 50+</p>
                            <div class="clear"></div>
                        </div>
                    </a>
                </div>
            </div> -->

        </div>
    </div>
</div>

@stop