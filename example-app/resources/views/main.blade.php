@extends('layout')

@section('content')

<div class="container">
  <h1 class="text-center mt-3">Main page</h1>
  <div class="row mt-5">

    @foreach($images as $image)

      <div class="col-3">
      <div>
        <img src="/{{$image->path}}" alt="" width="300" class="img-thumbnail">
      </div>
      <div class="d-grid gap-3 mt-3">
        <a href="/show/{{$image->id}}" class="btn btn-info">Show</a>
        <a href="/edit/{{$image->id}}" class="btn btn-warning">Edit</a>
        <a href="/delete/{{$image->id}}" class="btn btn-danger">Delete</a>
      </div>
    </div>

    @endforeach

  </div>
</div>

@endsection