@extends('layouts.app')
@section('content')

<div class="container">
  <h2>Category Events <a href="{{route('createEventCategory')}}"class="btn btn-success"><i class="fas fa-plus"></i></a>

                <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
    </h2>





  @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Category Event Description</th>
        </tr>

        @foreach ($categoriesEvents as $categoryEvent)
        
          <tr>
          <td> {{ $categoryEvent->description }}</td>
          <td> 
            <a href="{{route('editEventCategory', ['categoryEvent_id'=>$categoryEvent->id])}}" class="btn btn-primary">Edit</a>
            &nbsp;
            <a href="#deleteModal{{$categoryEvent->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$categoryEvent->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Do you really wan't to delete this category Event: <p><b>{{$categoryEvent-> description}}</b></p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <a href="{{route('deleteEventCategory',['categoryEvent_id'=> $categoryEvent->id])}}"class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>  
          </td>
      </tr>
      @endforeach
      </thead>
    </table>  
    {{ $categoriesEvents-> links()}}
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection