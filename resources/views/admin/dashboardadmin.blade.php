@extends('layouts.masteradmin')
@section('content')
<div class="containerADCPT">
    <h1 class="judulADCPT">
        Laba Rugi
    </h1>

    <div class="row">
        <div class="col-3">
            <p class="namaL-B">
                Pilih Periode
            </p>
        </div>
        <div class="col-9">
            <select class="btnL-B border border-dark rounded-3" id="inputGroupSelect02">
                <option selected value="1">Maret 2022</option>
                <option value="2">April 2022</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p style="opacity:0 ;">a</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p style="opacity:0 ;">a</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p style="opacity:0 ;">a</p>
        </div>
    </div>

    <div class="clearD-P"></div>

    <div class="row">
        <div class="col-3">
            <p style="color:green ; font-size:25px" class="namaL-B">
                Pendapatan
            </p>
        </div>
        <div class="col-9">
            <p style="color:green ; font-size:25px" class="isiL-B">Rp. {{$pendapatan}}</p>
        </div>
    </div>
    <div class="clearD-P"></div>

    <div class="row">
        <div class="col-3">
            <p style="color:red ; font-size:25px" class="namaL-B">
                Pengeluaran
            </p>
        </div>
        <div class="col-9">
            <p style="color:red ; font-size:25px" class="isiL-B">Rp. {{$pengeluaran}}</p>
        </div>
    </div>
    <div class="clearD-P"></div>

    <div class="row">
        <div class="col-3">
            <p style="color:black ; font-size:25px" class="namaL-B">
                Laba Rugi
            </p>
        </div>
        <div class="col-9">
            <p style="color:black ; font-size:25px" class="isiL-B">Rp. {{$pengeluaran - $pendapatan}}</p>
        </div>
    </div>
    <div class="clearD-P"></div>



</div>
@stop