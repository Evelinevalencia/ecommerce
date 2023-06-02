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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{URL::to('/home')}}">
        <img src="" alt="Logo Brand" width="120px" class="navTulisanadmin" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav navFlex">
          <div class="navKiri">
            <ul class="ulKiri">
              <li class="nav-item">
                <a class="nav-link navTulisanadmin" href="{{URL::to('/home')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navTulisanadmin" href="{{URL::to('/productowner')}}">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navTulisan" href="{{url('/designowner')}}">Desain</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navTulisanadmin" href="#">Transaksi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navTulisanadmin" href="{{url('/pengeluaranowner')}}">Pengeluaran</a>
              </li>
            </ul>
          </div>
          <div class="navKanan">
            <ul class="ulKanan">
              <li class="nav-item">
                <div class="dropdown">
                  <button style="width:120px; text-align:left; word-spacing:25px;font-weight:600; background-color:white; color:black; height: 45px" class="btn btn-secondary dropdown-toggle border border-3 rounded-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    AKUN
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item dropdownL-K" href="{{URL::to('/akunadmin')}}">Admin</a></li>
                    <li><a class="dropdown-item dropdownL-K" href="{{URL::to('/akuncust')}}">Customer</a></li>
                    <li><a class="dropdown-item dropdownL-K" href="{{URL::to('/akunowner')}}">Owner</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link navTulisanadmin border rounded-3 navKeluaradmin" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"">KELUAR</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <main>@yield('content')</main>

  <div class="containerFooter">
    <div class="containerImgIsiFooter">
      <div class="imgFooter">
        <img class="imgWHFooter" src="/img/6.png" alt="">
      </div>
      <div class="informasiFooter">
        <p style="font-weight:650 ; font-size: 30px" class="isiInformasiFooter">Informasi</p>
        @guest
        <a href="{{URL::to('/')}}" class="isiInformasiFooter">Beranda</a>
        @else
        <a href="{{URL::to('/home')}}" class="isiInformasiFooter">Beranda</a>
        @endguest
        <a href="{{URL::to('/katalog')}}" class="isiInformasiFooter">Katalog</a>
        <a href="{{URL::to('/design')}}" class="isiInformasiFooter">Desain</a>
        <a href="{{URL::to('/tentangkami')}}" class="isiInformasiFooter">Tentang Kami</a>
      </div>

      <div class="informasiFooter">
        <p style="font-weight:650 ; font-size: 30px" class="isiInformasiFooter">Kilograms</p>
        @guest
        @if (Route::has('register'))
        <a class="isiInformasiFooter" href="{{ route('register') }}">Daftar</a>
        @endif
        @if (Route::has('login'))
        <a class="isiInformasiFooter" href="{{ route('login') }}">Masuk</a>
        @endif
        <a class="isiInformasiFooter">keranjang</a>
        <a style="opacity: 0;" href="#" class="isiInformasiFooter">Dummy</a>
        @else
        <a class="isiInformasiFooter">Akun</a>
        <a class="isiInformasiFooter" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        <a style="opacity: 0;" href="#" class="isiInformasiFooter">Dummy</a>
        <a style="opacity: 0;" href="#" class="isiInformasiFooter">Dummy</a>
        @endguest
      </div>
      <div class="socialMediaFooter">
        <p style="font-weight:650 ; font-size: 30px" class="isiInformasiFooter">Social Media</p>
        <a href="#" class="iconFooter"><img src="/img/7.png" alt="" class="tokpedFooter"></a>
        <a href="#" class="iconFooter fab fa-instagram"></a>
        <a href="#" class="iconFooter fab fa-whatsapp"></a>
      </div>
      <div class="clearBothFooter"></div>
    </div>
    <div class="copyRightFooter">Copyright &copy; 2022. vynero</div>
  </div>
</body>

</html>