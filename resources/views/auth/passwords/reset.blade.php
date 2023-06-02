@include('layouts.navbar')
<div style="margin-top:14.4px">
    <div class="containerRegisterL-PB ">
        <p class="judulL-PB">Buat Kata Sandi Baru</p>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            <input id="email" type="email" class="borderInputL-PB border border-dark rounded-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="  Email">
            @error('email')
            <p class="pSalahInfoLP" role="alert">Email tidak terdaftar</p>
            @enderror
            <input id="password" class="borderInputL-PB border border-dark rounded-2 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Katasandi baru">
            <input id="password-confirm" class="borderInputL-PB border border-dark rounded-2" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi katasandi baru">
            @error('password')
            <p class="salahInfoL-PB" role="alert">Kata sandi tidak sesuai</p>
            @enderror

            <button type="submit" class="buttonSimpanL-PB border border-dark rounded-3">SIMPAN</button>
            <div class="copyRightL-PB">
                Copyright &copy; 2022, VeEvYo
            </div>
    </div>
    <div class="containerImgL-PB">
        <img src="/img/13.png" alt="" class="imgCardL-PB">
    </div>
    <div class="clearL-PB"></div>
</div>