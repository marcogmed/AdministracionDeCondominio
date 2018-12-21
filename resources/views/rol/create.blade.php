@extends('layouts.app')
@section('content')

<div class="container">
	<div class="page-header">
		<h2>Crear Rol</h2>
	</div>
	<div class="row">
		<form method="post" action="{{ route('storeRole') }}" class="col-lg-7">
			{!! csrf_field() !!}

			@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<div class="form-group">
				<label for="Descripción">Descripción</label>
				<input type="text"class="form-control" id="description" name="description"></input>
			</div>
			<button class="btn btn-success">Crear Rol</button>
		</form>	
	</div>
</div>

@endsection