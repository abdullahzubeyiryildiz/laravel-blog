@extends('main')
@section('title', 'Post Ekle')
@section('styles')
{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<h1 class="text-center">Post Ekle</h1>
		{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
		{{ Form::label('title', "Tittle:")}}
		{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Başlık' , 'required' => '', 'maxlength' => '255'])}}
		{{ Form::label('body', "Post İçerik:")}}
		{{ Form::textarea('body', null, ['class' => 'form-control','placeholder' => 'İçerik' , 'required' => ''])}}
		{{ Form::submit('İçerik Ekle', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'])}}
		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/tr.js') !!}
@endsection