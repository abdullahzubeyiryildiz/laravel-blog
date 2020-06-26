@extends('main')

@section('title', ' Yorum Düzenle')

@section('content')


<div class="col-md-8 offset-md-2">
	<h2>Edit Yorum</h2>
	{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT' ]) }}
	{{Form::label('name')}}
	{{Form::text('name',null, ['class' => 'form-control', 'disabled' => 'disabled'])}}

	{{ Form::label('email', 'Email:') }}
	{{ Form::text('email', null,  ['class' => 'form-control', 'disabled' => 'disabled']) }}

	{{ Form::label('comment', 'Email:') }}
	{{ Form::textarea('comment', null,  ['class' => 'form-control']) }}

	{{Form::submit('Güncelle', ['class' =>'btn btn-block btn-success', 'style' => 'margin-top: 15px'])}}
	{{Form::close()}}
</div>
@endsection