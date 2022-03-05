@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <h1>Create Image</h1>
      <form action="/store" method="POST" enctype="multipart/form-data" class="mt-5">
        {{csrf_field()}}
        <input type="file" name="image">

        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
          <button type="submit" class="btn btn-success ">Add</button>
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