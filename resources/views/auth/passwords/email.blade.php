@include('layouts.navbar')
<div style="margin-top: 14.4px;">
    <div class="containerRegisterL-P ">
        <p class="judulL-P">Lupa Kata Sandi Kamu?</p>
        <p class="subJudulL-P">Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan email kepada Anda tautan pengaturan ulang kata sandi yang memungkinkan Anda memilih yang baru.</p>
        @if (session('status'))
        <div class="alert" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input id="email" type="email" class="borderInputL-P border border-dark rounded-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="  Email">
            @error('email')
            <p class="salahInfoL-P" role="alert">Email tidak terdaftar</p>
            @enderror
            <button type="submit" class="buttonKirimL-P border border-dark rounded-3">KIRIM</button>
            <div class="copyRightL-P">
                Copyright &copy; 2022, VeEvYo
            </div>
    </div>
    <div class="containerImgL-P">
        <img src="/img/13.png" alt="" class="imgCardL-P">
    </div>
    <div class="clearL-P"></div>
</div>