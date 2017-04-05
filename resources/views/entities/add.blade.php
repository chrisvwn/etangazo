@extends('layouts.app')

@section('content')
    <div>    
      <div class="row col-md-6 col-md-offset-3">

       <h3>Add new entity</h3>

       <form method="POST" action="/reports/{{ $report->id }}/entities/add">
         {{ csrf_field() }}
         <div class="form-group">
            Name <input name = "name" class = "form-control"></input>
            Phone <input name = "phone" class = "form-control"></input>
            Date of Birth <input name = "dateofbirth" class = "form-control"></input>
            Nationality <input name = "nationality" class = "form-control"></input>
            ID Type <input name = "idtype" class = "form-control"></input>
            ID Number <input name = "idnumber" class = "form-control"></input>
            Gender <input name = "gender_id" class = "form-control"></input>

         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Entity</button>
         </div>
       </form>
      </div>
     </div>
@stop
