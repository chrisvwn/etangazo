@extends('layouts.app')

@section('content')
    <div>    
      <div class="row col-md-6 col-md-offset-3">

       <h3>Add Photo</h3>

       <form method="POST" action="/entity/{{ $entity->id }}/addphoto">
         {{ csrf_field() }}
         <div class="form-group">
            Name <input name = "filename" class = "form-control"></input>

         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Entity</button>
         </div>
       </form>
      </div>
     </div>
@stop
