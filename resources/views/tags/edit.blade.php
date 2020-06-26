@extends('main')

@section('title', "$tag->name Etiket Düzenle")

@section('content')
	{{ Form::model($tag,['route' => ['tags.update', $tag->id], 'method' => "PUT" ]) }}
		{{ Form::label('name', "Title:") }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
		{{ Form::submit('Kaydet', ['class' => 'btn btn-success mt-3'])}}
	{{ Form::close() }}
@endsection