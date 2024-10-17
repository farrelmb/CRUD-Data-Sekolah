@extends('layouts.template')
@section('content')
@if (session('alert_danger'))
    <div class="alert alert-danger">
        <p>{{session('alert_danger')}}</p>
    </div>
@endif
@if (session('alert_success'))
    <div class="alert alert-success">
        <p>{{session('alert_success')}}</p>
    </div>
@endif
<div class="container mt-4">

    <h1 class="text-center">Data Siswa</h1>
    <div class="d-flex justify-content-between">

        <a href="{{ route('dasi.create')}}" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah data</a>
            <div class="">
                <a href="{{route('dagu.index')}}" class="btn btn-primary">Data Guru</a>
            </div>
    </div>
    <table class="table" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Rayon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->nis}}</td>
                <td>{{$item->rayon}}</td>
                <td>
                    <a href="{{ route('dasi.edit', $item->id)}}" class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                    <br>    
                    <a href="{{ route('dasi.info', $item->id)}}" class="btn btn-primary">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <form action="{{ route('dasi.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>