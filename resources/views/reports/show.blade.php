@extends('layouts.app')

@section('content')
  
  <div class="row col-md-6 col-md-offset-3">
    <div>
      <h1>Report</h1>
        <table>
          <tr><td>Report ID:</td><td>{{ $report->id }}</td></tr>
          <tr><td>Title:</td><td>{{ $report->title }}</td></tr>
          <tr><td>Description:</td><td>{{ $report->description }}</td></tr>
        </table>
    </div>

    <div>
      <h3> Photos </h3>
      {{ count($report->photos) }}
      
      <div class="list-group"> 
        @foreach ($report->photos as $photo)
          <div class="list-group-item">
            <img height="100" height="100" src="/images/{{ $photo->filename }}"><a href="">delete</a>
          </div>
        @endforeach
      </div>

      @if(Auth::check())
        @if (Auth::id()== $report->user_id)
        {!! Form::open(['url'=>'/reports/'.$report->id.'/savephoto', 'method'=>'POST', 'files'=>'true']) !!}
         {{ csrf_field() }}
          <div class="form-group">
            <label for="userfile">Image File</label>
            <input type="file" class="form-control" name="userfile">
          </div>

          <button type="submit" class="btn btn-primary">Upload</button>
          <a href="/reports/{{ $report->id }}/show" class="btn btn-warning">Cancel</a>

        {!! Form::close() !!}
        @endif
      @endif
    </div>

    <div>
      <h3> Entities </h3>
          
      <div class="list-group">
        @foreach ($report->entities as $entity)
          <div class="list-group-item">
            <a href="/entities/{{ $entity->id }}">{{ $entity->name }}</a> 
            @if(Auth::check())
            @if (Auth::id()== $report->user_id)
            <a href="/entities/{{ $entity->id }}">edit</a> <a href="">delete</a>
            @endif
            @endif
          </div>
        @endforeach
      </div>

      @if(Auth::check())
        @if (Auth::id()== $report->user_id)
          <div>
            <form method="GET" action="/reports/{{ $report->id }}/entities/showadd">
             <button>Add entity</button>
            </form>
          </div>
        @endif
      @endif
    </div>

    @if(Auth::check())
      @if (Auth::id()== $report->user_id)

        <div type="form-group">
          <form method="GET" action="/reports/{{ $report->id }}/edit">
            <button class="btn btn-primary">Edit Report</button>
          </form>
        </div>
        
        <div type="form-group">
          <form method="GET" action="/reports/{{ $report->id }}/delete">
            <button class="btn btn-primary">Delete Report</button>
          </form>
        </div>
      @endif
    @endif

    <div>
      <h3> Comments </h3>
	@include('comments::comments-react', [
         'content_type' => App\Report::class,
         'content_id' => $report->id
	])

    </div>
  </div>
@stop
