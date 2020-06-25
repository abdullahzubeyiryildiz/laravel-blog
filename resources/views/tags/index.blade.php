@extends('main')

@section('title' ,  'Etiketler')

@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>Etiketler</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tags as $tag)
				

				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	

	<div class="col-md-3">
		<div class="col-md-12">
			{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
				<h2>Yeni Etiket</h2>
				{{ Form::label('name', 'Name:' )}}
				{{ Form::text('name', null, ['class' => 'form-control'] )}}

				{{ Form::submit('Etiket Oluştur', ['class' => 'btn btn-primary mt-3 btn-block']) }}
			{!! Form::close() !!}
		</div>
	</div>

</div>
@endsection

