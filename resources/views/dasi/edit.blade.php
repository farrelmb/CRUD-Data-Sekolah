@extends('layouts.template')
@section('content')
    
<h1>Edit Data</h1>
<form action="{{ route('dasi.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nama : </label>
    <input type="text" name="name" id="name" value="{{$data->name}}">
    <br>
    <label for="nis">Nis : </label>
    <input type="number" name="nis" id="nis" value="{{$data->nis}}">
    <br>
    <label for="rayon">Rayon : </label>
    <input type="text" name="rayon" id="rayon" value="{{$data->rayon}}">
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('dasi.index')}}" class="btn btn-danger">Back</a>
</form>
@endsection