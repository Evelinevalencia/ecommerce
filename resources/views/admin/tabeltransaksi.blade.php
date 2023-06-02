@extends('layouts.masteradmin')
@section('content')


<div class="containerT-MP">
    <a class="borderT-MP border border-3 border-dark rounded-3" href="{{url('/tambahtransaksi')}}"><i class="fasT-MP fas fa-plus"></i>TAMBAH</a>
    <div class="clearT-MP"></div>

    <table class="table tableT-MP">
        <thead>
            <tr>
                <th scope="col">ID Transaksi</th>
                <th scope="col">ID Customer</th>
                <th scope="col">Total Transaksi</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $form)
            <tr>
                <th scope="row">{{$form->id_transaksi}}</th>
                <td>{{$form->id_user}}</td>
                <td>{{$form->total}}</td>
                <td>{{$form->status}}</td>
                <td>
                    <form class="delete-form" action=" {{ URL::to('beli/'.$form->id_transaksi) }} " method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="aT-MP">Hapus</button>
                    </form>

                    <a class="aT-MP" href="{{url('/detailtransaksi')}}">Detail</a>
                    <button type="button" class="popupT-MP" data-toggle="modal" data-target="#exampleModalLong">
                        Status
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="/beli/{{$form->id_transaksi}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="col-9">
                                            <select style="width:470px;" class="border border-dark rounded-3" id="inputGroupSelect02" name="status">
                                                <option selected value="belum dibayar">Belum Dibayar</option>
                                                <option value="dalam proses">dalam proses</option>
                                                <option value="selesai">selesai</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" id="Status" name="Status">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop