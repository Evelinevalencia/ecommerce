<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" type="/text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <nav class="navAll navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{URL::to('home')}}">
                <img src="/img/logo.jpg" alt="Logo Naruto" width="130px" class="navTulisan" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav navFlex">
                    <div class="navKiri">
                        <ul class="ulKiri">

                            @guest
                            <li class="nav-item">
                                <a class="nav-link navTulisan" href="{{URL::to('/')}}">BERANDA</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link navTulisan" href="{{URL::to('/home')}}">BERANDA</a>
                            </li>
                            @endguest
                            <li class="nav-item">
                                <a class="nav-link navTulisan navGeserL-KR" href="{{URL::to('/katalog')}}">KATALOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navTulisan navGeserL-KR" href="{{URL::to('/design')}}">DESAIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navTulisan navGeserL-KR" href="{{URL::to('/tentangkami')}}">TENTANG KAMI</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navKanan">
                        <ul class="ulKanan">
                            @guest

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link navTulisan navGeserL-KN border border-3 border-dark rounded-3 navDaftar" href="{{ route('register') }}">DAFTAR</a>
                            </li>
                            @endif

                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link navTulisan navGeserL-KN border rounded navMasuk" href="{{ route('login') }}">MASUK</a>
                            </li>
                            @endif

                            @else
                            <li class="nav-item">
                                <a class="nav-link navTulisan navGeserL-KN border border-3 border-dark rounded-3 navDaftar" href="{{URL::to('/akun')}}">
                                    <i class="fas fa-user-circle navLogoAkun"></i>Akun
                                </a>
                            </li>
                            @endguest
                            <li class="nav-item">
                                <a class="nav-link navTulisan navGeserL-KN border rounded-3 navKeranjang" href="{{URL::to('/login')}}">
                                    <i class="fas fa-shopping-cart navLogoKeranjang"></i>KERANJANG
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>