@extends('layouts.app')

@section('content')
@if(Auth::check())
@if (Auth::user()->id == $report->user_id)

    <div>    
      <div class="row col-md-6 col-md-offset-3">

       <h3>Edit Report</h3>
       <form method="POST" action="/reports/{{ $report->id }}/update">
         {{ csrf_field() }}
         {{ method_field('PATCH') }}

         <div class="form-group">
            Report Type <input name = "type" class = "form-control" value="{{ $report->type }}"></input>
            Title <input name = "title" class = "form-control" value="{{ $report->title }}"></input>
            Contact Name <input name = "contact_name" class = "form-control" value="{{ $report->contact_name }}"></input>
            Contact Phone <input name = "contact_phone" class = "form-control" value="{{ $report->contact_phone }}"></input>
            Country <input name = "country_id" class = "form-control" value="{{ $report->country_id }}"></input>
            Area <input name = "country_area_id" class = "form-control" value="{{ $report->country_area_id }}"></input>
            Description <textarea name = "description" class = "form-control">{{ $report->description }}</textarea>
            UserId <input name = "user_id" class = "form-control" value="{{ $report->user_id }}"></input>

         <h3> Photos </h3>
          <div class="list-group">
            @foreach ($report->photos as $photo)
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
            <button type="submit" class="btn btn-primary">Update Report</button>
         </div>
       </form>
      </div>
     </div>
     
  @endif
  @endif
@stop
