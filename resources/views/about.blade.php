@extends('template/main')

@section('judul','About Me')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1>Hello {{$nama}}</h1>
    </div>
  </div>
</div>
@endsection