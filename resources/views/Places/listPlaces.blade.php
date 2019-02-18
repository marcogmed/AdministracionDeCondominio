@extends('layouts.app')
@section('content')

<div class="container">
  <h2>Places <a href="{{route('createPlace')}}"class="btn btn-success"><i class="fas fa-plus"></i></a>

  	@if (session('message'))
  		<div class="alert alert-succes" role="alert">
  			{{ session('message') }}
  		</div>
	@endif

	<table class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th>Places description</th>
			</tr>

		@foreach ($placescontroller as $placesview)

		@endforeach

	</table>
@endsection