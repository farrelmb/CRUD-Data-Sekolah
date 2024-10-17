@extends('layouts.template')
@section('content')

 <h1>Page tambah data</h1>
<form action="{{route('dasi.store')}}" method="POST">
 @csrf
 <label for="name">Nama :</label>
 <input type="text" name="name" id="name">
 <br>
 <label for="nis"></label>Nis :</label>
 <input type="number" name="nis" id="nis">
 <br>
 <label for="rayon">Rayon :</label>
 <input type="text" name="rayon" id="rayon">
 <br>
 <button type="submit" class="btn btn-primary">Submit</button>
 <a href="{{route('dasi.index')}}" class="btn btn-danger">Back</a>
</form>
@endsection