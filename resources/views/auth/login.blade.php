@include('layouts/navbar')
  <div style="margin-top: 14.4px;">
    <div class="containerRegisterD-L ">
      <p class="judulD-L">Selamat Datang Kembali</p>
      <p class="subJudulD-L">Yuk Masuk Untuk Mulai Berbelanja</p>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input class="borderInputD-L border border-dark rounded-2 @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="{{ __('Email Address') }}">
        <input class="borderInputD-L border border-dark rounded-2 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" id="password" placeholder="{{ __('Password') }}">

        @error('email')
        <p class="salahInfoD-L">Nama pengguna atau kata sandi tidak sesuai</p>
        @enderror
        @error('password')
        <p class="salahInfoD-L">Nama pengguna atau kata sandi tidak sesuai</p>
        @enderror
        <button type="submit" class="buttonMasukD-L border border-dark rounded-3">MASUK</button>
        <div class="akunD-L">
          <a href="{{ route('register') }}" class="punyaAkunD-L">Belum punya akun? Daftar</a>
          <a href="{{ route('password.request') }}" class="kataSandiD-L">Lupa katasandi?</a>
        </div>

        <div class="copyRightD-L">
          Copyright &copy; 2022, VeEvYo
        </div>
    </div>
    <div class="containerImgD-L">
      <img src="img/13.png" alt="" class="imgCardD-L">
    </div>
    <div class="clearD-L"></div>
  </div>