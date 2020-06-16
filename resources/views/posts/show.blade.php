@extends('main')

@section('title', ' Post Görüntüle')

@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title }}</h1>
		<p class="lead mt-2">{{ $post->body }}</p>
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
					
						{!! Html::linkRoute('posts.edit', 'Düzenle', [$post->id], ['class' =>'btn btn-primary btn-block'] )!!}
					</div>
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.destroy', 'Sil', [$post->id], ['class' =>'btn btn-danger btn-block'] )!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection