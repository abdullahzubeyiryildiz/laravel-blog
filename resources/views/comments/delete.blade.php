@extends('main')

@section('title', ' Yorum Silinenler')

@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<h1>Bu Yorumu Sil</h1>
		
			<p><strong>Name:</strong> {{ $comment->name }}</p>
			<p><strong>Email:</strong> {{ $comment->email }}</p>
			<p><strong>Yorum:</strong> {{ $comment->comment }}</p>

			{{Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
			{{Form::submit('Evet Bu Yorumu Sil', ['class' => 'btn btn-lg btn-block btn-danger'])}}
			{{Form::close() }}
		</div>
	</div>
	@endsection