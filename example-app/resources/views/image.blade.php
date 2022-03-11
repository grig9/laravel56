@extends('layout')

@section('content')
<h1>Image</h1>

  @foreach($posts as $post)
    <div>
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->content }}</p>
    </div>
    <hr>
  @endforeach

  {{ $posts->links() }}
@endsection