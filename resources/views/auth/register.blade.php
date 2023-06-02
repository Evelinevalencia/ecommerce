@include('layouts.navbar')
<div style="margin-top: 14.4px;">
    <div class="containerRegisterD-P ">
        <p class="judulD-P">Selamat Datang</p>
        <p class="subJudulD-P">Yuk Daftar Untuk Mulai Berbelanja</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input id="name" type="text" placeholder="  Nama" class="borderInputD-P border border-dark rounded-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <input id="email" type="email" placeholder="  Email" class="borderInputD-P border border-dark rounded-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <input id="password" type="password" placeholder="  Kata Sandi" class="borderInputD-P border border-dark rounded-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <input id="password-confirm" type="password" placeholder="  Kata Sandi Ulang" class="borderInputD-P border border-dark rounded-2" name="password_confirmation" required autocomplete="new-password">
            
            @error('name')
            <span class="salahInfoD-P" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('email')
            <span class="salahInfoD-P" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @error('password')
            <span class="salahInfoD-P" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <button type="submit" class="buttonDaftarD-P border border-dark rounded-3">
                {{ __('Register') }}
            </button>
        </form>
        <a href="{{url('/login')}}" class="punyaAkunD-P">Sudah Memiliki Akun? Masuk</a>
        <div class="copyRightD-P">
            Copyright &copy; 2022, VeEvYo
        </div>
    </div>
    <div class="containerImgD-P">
        <img src="img/13.png" alt="" class="imgCardD-P">
    </div>
    <div class="clearD-P"></div>
</div>