@extends('layouts.app')

@section('content')
  
  @if(Auth::check())

    <div>    
      <div class="row col-md-6 col-md-offset-3">

       <h3>Add new Report to {{ $entity->name }}</h3>
       <form method="POST" action="/entities/{{$entity->id}}/reports/add">
         {{ csrf_field() }}
         <div class="form-group">
            Report Type <input name = "type" class = "form-control"></input>
            Title <input name = "title" class = "form-control"></input>
            Contact Name <input name = "contact_name" class = "form-control"></input>
            Contact Phone <input name = "contact_phone" class = "form-control"></input>
            Country <input name = "country_id" class = "form-control"></input>
            Area <input name = "country_area_id" class = "form-control"></input>
            Reporting Police Station <input name = "police_station" class = "form-control"></input>
            Police Reference # <input name = "police_ref_number" class = "form-control"></input>
            Date <input name = "event_date" class = "form-control"></input>
            Description <textarea name = "description" class = "form-control"></textarea>
            UserId <input name = "user_id" class = "form-control"></input>
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Report</button>
         </div>
       </form>
      </div>
     </div>
  @endif
@stop
