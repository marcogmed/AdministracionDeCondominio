@extends('layouts.app')
@section('content')

<div class="container">
	<div class="page-header">
		<h2>Edit Category: <p>{{$category->description}}</p></h2>
	</div>
	<div class="row">
		<form method="post" action="{{route ('updateCategory', ['category_id'=> $category->id])}}" class="col-lg-7">
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
				<input type="text"class="form-control" id="description" name="description" value="{{$category->description}}">
			</div>
			<button class="btn btn-success">Edit Category</button>
		</form>	
	</div>
</div>

@endsection