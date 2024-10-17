@extends('layouts.template')
@section('content')
@if (session('alert_failed'))
    <div class="alert alert-failed">
        <p>{{session('alert_failed')}}</p>
    </div>
@endif
@if (session('alert_success'))
    <div class="alert alert-success">
        <p>{{session('alert_success')}}</p>
    </div>
@endif
<div class="container mt-4">

    <h1 class="text-center">Data Guru</h1>
    <div class="d-flex justify-content-between">

        <a href="{{ route('dagu.create')}}" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah data</a>
            <div class="">
                <a href="{{route('dasi.index')}}" class="btn btn-primary">Back</a>
            </div>
    </div>
<table class="table" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Usia</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->mapel}}</td>
            <td>{{$item->age}} </td>
            <td>
                <a href="{{route('dagu.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('dagu.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
@endsection