@extends('layouts.template')

@section('content')
    <h1>Info Siswa:</h1>
    <label for="name">Nama : </label>
    <input type="text" name="name" id="name" value="{{$data->name}}" disabled>
    <br>
    <label for="nis">Nis : </label>
    <input type="number" name="nis" id="nis" value="{{$data->nis}}" disabled>
    <br>
    <label for="rayon">Rayon : </label>
    <input type="text" name="rayon" id="rayon" value="{{$data->rayon}}" disabled>
    <br><br>
    <a href="{{route('dasi.index')}}" class="btn btn-primary">back</a>
@endsection