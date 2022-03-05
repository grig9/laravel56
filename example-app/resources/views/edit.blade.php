@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <h1>Edit Image</h1>

      
     
      <img src="/{{$image->path}}" alt="php image" class="img-thumbnail rounded mx-auto d-block" width="500">
      <form action="/update/{{$image->id}}" method="POST" enctype="multipart/form-data" class="mt-5">
        {{csrf_field()}}
        
        <input type="file" name="image">

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-warning mt-3">Edit</button>
        </div>
      </form>
    </div>
  </div>
  @if($status)
    <div class="alert alert-{{$status['type']}} mt-3 text-center" role="alert">
      {{{$status['message']}}}
    </div>
  @endif
</div>
@endsection