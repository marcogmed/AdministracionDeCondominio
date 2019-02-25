@extends ('layouts.app')
@section('content')

<div class="container">
	<div class=#page-header>
		<h2>Agregar nuevo lugar</h2>
	</div>

	<div class="row">
		<form method="post" action="{{route('uploadPlace')}}" class="col-lg-7" enctype="multipart/form-data">
			{!! csrf_field() !!}

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li> {{error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<div>
				<h4 for="Url">Seleccionar Imagen</h4>

				<br>

					<input type='file' name='file' id='img_url'>
					<!--<input type="submit" value="Add Place" name="submit">-->
				</br>
				<br>
					<label for="descripcion">Descripción</label>
				<input type="text" class="form-control" id="descripcion" nmae="descripcion"></input>
				
				</br>
				<button class="btn btn-success">Agregar lugar</button>
				<!--<input type="hidden" value="{{ csrf_token() }} " name="_token">-->

			</div>


		</form>
	</div>
</div>

@endsection