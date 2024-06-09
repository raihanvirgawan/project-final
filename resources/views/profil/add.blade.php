@extends('layouts.master')

@section('title')
    add profil
@endsection

@section('content')
<form action="/profil" method="post">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" nama="nama">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection