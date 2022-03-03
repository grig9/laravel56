@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5 mx-auto">
      <h1>Edit Image</h1>
      <img src="./image.png" alt="php image" class="img-thumbnail rounded mx-auto d-block" width="500">
      <form action="" method="POST" enctype="multipart/form-data" class="mt-5">
        <input type="file" name="image">

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-warning mt-3">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection