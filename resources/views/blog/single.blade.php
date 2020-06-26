@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', " $titleTag; ")

@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<img src="{{ asset('images/' . $post->image) }}" alt="">
		<h1>{{$post->title}}</h1>
		<p>{!! $post->body !!}</p>
		<hr>
		<p>Kategori: {{$post->category->name }}</p>
	</div>
</div>

<div class="row">
	<div class="col-md-8 offset-md-2">
		<h3 class="comment-title"> <span class=""> <svg class="bi bi-subtract" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 12v2.5A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4H12v6.5a1.5 1.5 0 0 1-1.5 1.5H4z"/>
  <path fill-rule="evenodd" d="M10.5 1h-9a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-9-1A1.5 1.5 0 0 0 0 1.5v9A1.5 1.5 0 0 0 1.5 12h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 0h-9z"/>
</svg>  </span> Yorumlar ( {{ $post->comments()->count() }} ) </h3>
		@foreach ($post->comments as $comment)
		<div class="comment">
			<div class="author-info">
				<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email ))) . "?s=50&d=monsterid" }}" alt="" class="author-image">
				<div class="author-name">
					<h4>{{ $comment->name }}</h4>
					<p class="author-time"> {{ date('F nS, Y - g:iA', strtotime($comment->created_at))}} </p>
				</div>
			</div>
			<div class="comment-content">
				{{ $comment->comment }} 
			</div>
		</div>
		@endforeach
	</div>
</div>

<div class="row">
	<div id="comment-form" class="col-md-8 offset-md-2">
		{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
		<div class="row">
			<div class="col-md-6">
				{{Form::label('name', "Name")}}
				{{ Form::text('name',null, ['class' => 'form-control'])}}
			</div>
			<div class="col-md-6">
				{{ Form::label('email', "Email:")}}
				{{ Form::text('email', null, ['class' => 'form-control'])}}
			</div>

			<div class="col-md-12">
				{{ Form::label('comment', "Comment:")}}
				{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5'])}}

				{{ Form::submit('Yorum Gönder', ['class' => 'btn btn-primary btn-block mt-2']) }}
			</div>
		</div>

		{{ Form::close()}}
	</div>
</div>
@endsection