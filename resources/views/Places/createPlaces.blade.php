@extends ('layouts.app')
@section('content')

<div class="container">
	<div class=#page-header>
		<h2>Add new Place</h2>
	</div>

	<div class="row">
		<form method="post" action="{{route('savePlace')}}" class="col-lg-7">
			{!! csrf_field() !!}

			@if ($errors->any())
				<div class="laert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li> {{error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<div class="form-group">
				<label for="Url">URL</label>
				<input type="text" class="form-control" id="url" nmae="url"></input>
			</div>

			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" class="form-control" id="descripcion" nmae="descripcion"></input>
			</div>
			
			<button class="btn btn-success">Add place</button>

		</form>
	</div>
</div>

@endsection