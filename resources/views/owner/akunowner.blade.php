@extends('layouts.masterowner')
@section('content')
<div class="containerA-MP">
    <a class="borderA-MP border border-3 border-dark rounded-3" href="{{url('/tambahakun/create')}}"><i class="fasA-MP fas fa-plus"></i>TAMBAH</a>
    <div class="clearA-MP"></div>

    <table class="table tableA-MP">
        <thead>
            <tr>
                <th scope="col">ID Owner</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $form)
            <tr>
                <th scope="row">{{$form->id_user}}</th>
                <td>{{$form->name}}</td>
                <td>{{$form->email}}</td>
                <td>{{$form->role}}</td>
                <td>{{$form->created_at}}</td>
                <td>
                    <a class="aA-MP" href="{{URL::to('/tambahakun/'.$form->id_user.'/edit')}}">Edit</a>
                    <a class="aA-MP" href="{{URL::to('/hapusakun/'.$form->id_user)}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop