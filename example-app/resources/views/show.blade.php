@extends('layout')

@section('content')
  <div class="container">
    <h1 class="mt-3">Show</h1>
    <div class="row mt-5">
      <div class="col-md-12">
        <img src="/{{$image}}" alt="image" class="img-thumbnail rounded mx-auto d-block" width="500">
      </div>
    </div>
  </div>

@endsection