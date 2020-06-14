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
   <div class="post">
    <h3>Post Tittle</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id consequuntur dolore ex excepturi rem omnis voluptatibus praesentium, maxime officia unde! Repudiandae non quam beatae eaque omnis unde mollitia minus maiores.</p>
    <a href="#" class="btn btn-primary">Devamını Oku</a>
  </div>

  <hr>

  <div class="post">
    <h3>Post Tittle</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id consequuntur dolore ex excepturi rem omnis voluptatibus praesentium, maxime officia unde! Repudiandae non quam beatae eaque omnis unde mollitia minus maiores.</p>
    <a href="#" class="btn btn-primary">Devamını Oku</a>
  </div>

  <hr>


  <div class="post">
    <h3>Post Tittle</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id consequuntur dolore ex excepturi rem omnis voluptatibus praesentium, maxime officia unde! Repudiandae non quam beatae eaque omnis unde mollitia minus maiores.</p>
    <a href="#" class="btn btn-primary">Devamını Oku</a>
  </div>

  <hr>

  <div class="post">
    <h3>Post Tittle</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id consequuntur dolore ex excepturi rem omnis voluptatibus praesentium, maxime officia unde! Repudiandae non quam beatae eaque omnis unde mollitia minus maiores.</p>
    <a href="#" class="btn btn-primary">Devamını Oku</a>
  </div>
</div>
<div class="col-md-3 col-md-offset-1">
 <h2>Sidebar</h2>
</div>
</div>
@endsection

@section('scripts')
  <script>
    confirm('test');
  </script>
@endsection
