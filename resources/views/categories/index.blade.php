@extends('main')

@section('title' ,  'Kategoriler')

@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>Kategori</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
				

				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	

	<div class="col-md-3">
		<div class="col-md-12">
			{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
				<h2>Yeni Kategori</h2>
				{{ Form::label('name', 'Name:' )}}
				{{ Form::text('name', null, ['class' => 'form-control'] )}}

				{{ Form::submit('Kategori Oluştur', ['class' => 'btn btn-primary mt-3 btn-block']) }}
			{!! Form::close() !!}
		</div>
	</div>

</div>
@endsection

