@extends('layouts.app')
@section('content')

<div class="container">
	<div class="page-header">
		<h2>Edit Category Status: <p>{{$CategoryStatus->description}}</p></h2>
	</div>
	<div class="row">
		<form method="post" action="{{route ('updateStatusCategory', ['CategoryStatus_id'=> $CategoryStatus->id])}}" class="col-lg-7">
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
				<input type="text"class="form-control" id="description" name="description" value="{{$CategoryStatus->description}}">
			</div>
			<button class="btn btn-success">Edit Category Status</button>
		</form>	
	</div>
</div>

@endsection