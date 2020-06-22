@extends('main')

@section('title', 'Blog Post Düzenle')

@section('content')
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
<div class="row">
	<div class="col-md-8">
		{{ Form::label('title', 'Title:')}}
		{{ Form::text('title', null, ["class" => 'form-control']) }}

		{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top'])}}
		{{ Form::text('slug', null, ['class' =>  'form-control' ])}}


		{{ Form::label('body', 'İçerik:', ['class' => 'form-spacing-top'])}}
		{{ Form::textarea('body', null, ["class" => 'form-control']) }}
	</div>
	<div class="col-md-4">

		<div class="card text-center bg-light">
			<div class="card-body">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('j M  Y H:i', strtotime($post->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('j M  Y H:i', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'İptal', [$post->id], ['class' =>'btn btn-danger btn-block'] )!!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Kaydet', ['class' => 'btn btn-success btn-block'])}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}
@endsection