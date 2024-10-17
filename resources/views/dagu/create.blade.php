@extends('layouts.template')
@section('content')

 <h1>Page tambah data</h1>
<form action="{{route('dagu.store')}}" method="POST">
 @csrf
 <label for="name">Nama :</label>
 <input type="text" name="name" id="name">
 <br>
 <label for="mapel"></label>Mapel :</label>
 <input type="text" name="mapel" id="mapel">
 <br>
 <label for="age">Usia :</label>
 <input type="number" name="age" id="age">
 <br>
 <button type="submit" class="btn btn-primary">Submit</button>
 <a href="{{route('dagu.index')}}" class="btn btn-danger">Back</a>
</form>
@endsection