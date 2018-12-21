@extends('layouts.app')
@section('content')

<div class="container">
	<div class="page-header">
		<h2>Create Category Status</h2>
	</div>
	<div class="row">
		<form method="post" action="{{route('saveStatusCategory')}}" class="col-lg-7">
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
				<label for="Descripción">Description</label>
				<input type="text"class="form-control" id="description" name="description"></input>
			</div>
			<button class="btn btn-success">Create Category Status</button>
		</form>	
	</div>
</div>

@endsection