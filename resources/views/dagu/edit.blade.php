@extends('layouts.template')
@section('content')
    
<h1>Edit Data</h1>
<form action="{{ route('dagu.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nama : </label>
    <input type="text" name="name" id="name" value="{{$data->name}}">
    <br>
    <label for="mapel">Mapel : </label>
    <input type="text" name="mapel" id="mapel" value="{{$data->mapel}}">
    <br>
    <label for="age">Usia : </label>
    <input type="number" name="age" id="age" value="{{$data->age}}">
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('dagu.index')}}" class="btn btn-danger">Back</a>
</form>
@endsection