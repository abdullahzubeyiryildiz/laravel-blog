@extends('main')
@section('title', 'Post Ekle')
@section('styles')
{!! Html::style('css/parsley.css') !!}

{!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 offset-md-2">
		<h1 class="text-center">Post Ekle</h1>
		{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
		{{ Form::label('title', "Tittle:")}}
		{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Başlık' , 'required' => '', 'maxlength' => '255'])}}
		
		{{ Form::label('slug', 'Slug:')}}
		{{ Form::text('slug', null, ['class' =>  'form-control', 'required' => '', 'minlength' => '5', 'maxlength'=> '255' ])}}


		{{Form::label('category' , 'Kategori:')}}
		<select class="form-control" name="category_id">
			@foreach ($categories as $category)
			<option value="{{$category->id}}">{{$category->name}}</option>
			@endforeach
		</select>

		{{Form::label('tags' , 'Etiketler:')}}
		<select class="form-control multiselect" multiple="multiple" name="tags[]">
			@foreach ($tags as $tag)
			<option value="{{$tag->id}}">{{$tag->name}}</option>
			@endforeach
		</select>



		{{ Form::label('body', "Post İçerik:")}}
		{{ Form::textarea('body', null, ['class' => 'form-control','placeholder' => 'İçerik' , 'required' => ''])}}
		{{ Form::submit('İçerik Ekle', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'])}}
		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.min.js') !!}
{!! Html::script('js/tr.js') !!}

<script>
	$(".multiselect").select2();
</script>
@endsection