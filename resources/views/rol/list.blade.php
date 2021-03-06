@extends('layouts.app')
@section('content')

<div class="container">
  <h2>Roles <a href="{{ route('createRole') }}" class="btn btn-success"><i class="fas fa-buysellads"></i></a></h2>



  @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Descripción</th>
  </div>

        </tr>
        @foreach ($roles as $role)
        
          <tr>
          <td> {{ $role->description }}</td>
          <td> 
            <a href="" class="btn btn-primary">Edit</a>
            &nbsp;
            <a href="#deleteModal{{$role->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Do you really wan't to delete this video: <p><b>{{$role-> description}}</b></p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <a href=""class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>  
          </td>
      </tr>
      @endforeach
      </thead>
    </table>  
    
</div>

@endsection