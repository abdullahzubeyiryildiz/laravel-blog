@extends('main')

@section('title', ' Postlar')

@section('content')
<div class="row">
	<div class="col-md-10 mt-4">
		<h1>Tüm Paylaşımlar</h1>
	</div>
	<div class="col-md-2">
		<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Post Oluştur</a>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
</div> 

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->title}}</td>
					<td>{{ substr($post->body,0, 300)}} {{ strlen($post->body) > 300 ? "..." : ""}}</td>
					<td>{{ date('M j Y, H:i', strtotime($post->created_at)) }}</td>
					<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-primary btn-sm">view</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-warning  btn-sm">Edit</a></td>
				</tr>
				@endforeach

			</tbody>
		</table>

		<div class="text-center">
			{!! $posts->links(); !!}
		</div>
	</div>
</div>
@endsection

