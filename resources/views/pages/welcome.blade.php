@extends('main')

@section('title', 'Anasayfa')

@section('styles')
<link rel="stylesheet" type="text/css" href="styles.css">
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1 class="display-4">Hoşgeldiniz Laravel Blog Sayfama !</h1>
      <p class="lead">Laravel blog sayfası</p>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg" href="#" role="button">Populer Paylaşımlar</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    @foreach ($posts as $post)
    <div class="post">
      <h3>{{$post->title}}</h3>
      <p>{{ substr(strip_tags($post->body), 0,300) }} {{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
      <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Devamını Oku</a>
    </div>
    @endforeach


    <hr>

  </div>
  <div class="col-md-3 col-md-offset-1">
   <h2>Sidebar</h2>
 </div>
</div>
@endsection

@section('scripts')
  {{-- <script>
    confirm('test');
  </script> --}}
  @endsection
