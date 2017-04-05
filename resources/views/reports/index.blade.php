@extends('layouts.app')

@section('content')
You are logged in as {{Auth::id()}} : {{ Auth::user()->name}}
  <div class="row col-md-6 col-md-offset-3">
    <h2> Reports </h2>
    <div clas="list-group"> 
      @foreach ($reports as $report)
          <div class="list-group-item">
            {{ $report->id }} 
            <a href = "/reports/{{ $report->id }}">{{ $report->title }} </a>
            {{$report->entities()->count() }} entities

            @if(Auth::check())
            @if (Auth::id() == $report->user_id)

            <a href = "/reports/{{ $report->id }}/edit" class="pull-right"> Edit </a>

            <a href = "/reports/{{ $report->id }}/delete" class="pull-right"> Delete </a>

            @endif
            @endif
          </div>
  
      @endforeach
    </div>

    <div class="form-group">
      <form method="GET" action="/reports/showadd">
        <button type="submit" class="btn btn-primary">Add Report</button>
      </form>
    </div>

  </div>

@stop
