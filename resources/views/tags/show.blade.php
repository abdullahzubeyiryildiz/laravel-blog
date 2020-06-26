@extends('main')

@section('title', "$tag->name Etiket")

@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>{{ $tag->name }} <small> Etiket'e Ait {{ $tag->posts()->count() }} Post Mevcut</small></h1>
	</div>
	
	<div class="col-md-2">
		<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-primary mt-3 btn-block float-right ">Düzenle</a>
	</div>
	<div class="col-md-2">
		{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE'] ) }}
			{{ Form::submit('Sil', ['class' => 'btn btn-sm btn-danger mt-3 btn-block'])}}
		{{ Form::close() }}
	</div>
</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped ">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Tags</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tag->posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>@foreach ($post->tags as $tag)
							<span class="badge badge-secondary">{{ $tag->name }}</span>
						@endforeach</td>
						<td> <a href="{{ route('posts.show', $post->id) }}" class="btn btn-light btn-sm">View</a></td>
					</tr>
					@endforeach
					

				</tbody>
			</table>
		</div>
	</div>
@endsection