@extends('layout')

@section('content')

<div class="container">
  <h1 class="text-center mt-3">Main page</h1>
  <div class="row mt-5">
    <div class="col-3">
      <div>
        <img src="../image.png" alt="asdfasd" width="300">
      </div>
      <div class="d-grid gap-3 mt-3">
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
      </div>
    </div>
    <div class="col-3">
      <div>
        <img src="../image.png" alt="asdfasd" width="300">
      </div>
    </div>
    <div class="col-3">
      <div>
        <img src="../image.png" alt="asdfasd" width="300">
      </div>
    </div>
    <div class="col-3">
      <div>
        <img src="../image.png" alt="asdfasd" width="300">
      </div>
    </div>
  </div>
</div>



@endsection