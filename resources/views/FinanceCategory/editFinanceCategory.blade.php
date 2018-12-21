fc @extends('layouts.app')
@section('content')

<div class="container">
	<div class="page-header">
		<h2>Edit Finance Category: <p>{{$categoryFinanceMove->description}}</p></h2>
	</div>
	<div class="row">
		<form method="post" action="{{route ('updateFinanceCategory', ['categoryFinanceMove_id'=> $categoryFinanceMove->id])}}" class="col-lg-7">
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
				<input type="text"class="form-control" id="description" name="description" value="{{$categoryFinanceMove->description}}">
			</div>
			<button class="btn btn-success">Edit Finance Category</button>
		</form>	
	</div>
</div>

@endsection