@extends('main')

@section('title', ' Post Görüntüle')
@section('styles')

{!! Html::style('css/all.min.css') !!}
@endsection

@section('content')
<div class="row">
	<div class="col-md-8">
		<img src="{{ asset('images/'.$post->image) }}" alt="">
		<h1>{{ $post->title }}</h1>
		<p class="lead mt-2">{!! $post->body !!}</p>

		<hr>

		<div class="tags">
			@foreach ($post->tags as $tag)
			<span class="badge badge-secondary">{{ $tag->name }}</span>
			@endforeach
		</div>

		<div id="backend-comments" style="margin-top: 50px;">
			<h3>Yorumlar <small>{{ $post->comments()->count() }} Toplam </small></h3>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Yorum</th>
						<th ></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($post->comments as $comment)
					<tr>
						<td>{{$comment->name}}</td>
						<td>{{$comment->email}}</td>
						<td>{{$comment->comment}}</td>
						<td style="width: 100px;">
							<a href="{{ route('comments.edit', $comment->id)}}" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i> </a>
							<a href="{{ route('comments.delete', $comment->id)}}" class="btn btn-sm btn-danger"> <i class="fas fa-trash-alt"></i> </a>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-4">

		<div class="card text-center bg-light">
			<div class="card-body">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Kategori</label>
					<p>{{ $post->category->name }}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('j M  Y H:i', strtotime($post->created_at)) }}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('j M  Y H:i', strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Düzenle', [$post->id], ['class' =>'btn btn-primary btn-block'] )!!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
						{!! Form::submit('Sil', ['class' =>'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< Paylaşımlara Geri Dön', [], ['class' => 'btn btn-block btn-h1-spacing btn-light'] ) }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('scripts')
{!! Html::script('js/all.min.js') !!}

@endsection