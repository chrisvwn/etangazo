@extends('layouts.app')

@section('content')
    <div class="form-group col-md-6 col-md-offset-3">
      <div class="row">

       <h3>Update entity</h3>
       <form method="POST" action="/entities/{{ $entity->id }}/edit">
         {{ csrf_field() }}
         {{ method_field('PATCH') }}
         <div class="form-group">
           Name <input name = "name" class = "form-control" value = "{{ $entity->name }}"></input>
           Phone <input name = "phone" class = "form-control" value = "{{ $entity->phone }}"></input>
           Date of Birth <input name = "dateofbirth" class = "form-control" value = "{{ $entity->dateofbirth }}"></input>
           Nationality <input name = "nationality" class = "form-control" value = "{{ $entity->nationality }}"></input>
           ID Type <input name = "idtype" class = "form-control" value = "{{ $entity->idtype }}"></input>
           ID Number<input name = "idnumber" class = "form-control" value = "{{ $entity->idnumber }}"></input>
           Gender <input name = "gender_id" class = "form-control" value = "{{ $entity->gender_id }}"></input>

          <h3> Photos </h3>
          <div class="list-group">
            @foreach ($entity->entityphotos as $photo)
              <div class="list-group-item">
                <img url="/images/{{ $photo->filename }}"></img> <a href="">delete</a>
              </div>
            @endforeach
          </div>

         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Add photo</button>
         </div>


         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Entity</button>
         </div>
       </form>
      </div>
     </div>
@stop
