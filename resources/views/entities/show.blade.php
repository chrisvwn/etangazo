@extends('layouts.app')

@section('content')
    
  <div class="row col-md-6 col-md-offset-3">
    <div>
      <h1>Edit Entity</h1>
      
      <table>
        <tr><td>Entity ID: </td><td>{{ $entity->id }}</td></tr>
        <tr><td>Name: </td><td>{{ $entity->name }}</td></tr>
      </table>

      @if(Auth::check())
      @if (Auth::id()== $entity->reports->first()->user_id)

      <div>
        <form method="GET" action="/entities/{{ $entity->id }}/showedit">
          <button class="btn btn-primary">edit entity</button>
        </form>
      </div>

      @endif
      @endif

    </div>
    <div>
      <h3> Photos </h3>
      {{ count($entity->photos) }}

      <div class="list-group">    
        @foreach ($entity->photos as $photo)
          <div class="list-group-item">
             <img height="100" height="100" src="/images/{{ $photo->filename }}">

            @if(Auth::check())
            @if (Auth::id()== $entity->reports->first()->user_id)

             <a href="">delete</a>

            @endif
            @endif

          </div>
        @endforeach
      </div>

      @if(Auth::check())
      @if (Auth::id()== $entity->reports->first()->user_id)

      <div class="form-group">
        {!! Form::open(['url'=>'/entities/'.$entity->id.'/savephoto', 'method'=>'POST', 'files'=>'true']) !!}
        
          {{ csrf_field() }}
    
          <label for="userfile">Image File</label>
          <input type="file" class="form-control" name="userfile">
   
          <button type="submit" class="btn btn-primary">Upload</button>
          <a href="/entities/{{ $entity->id }}/show" class="btn btn-warning">Cancel</a>
        {!! Form::close() !!}
      </div>

      @endif
      @endif
    </div>
    
    <div>
      <h3>Reports</h3>

      <div class="list-group">
        @foreach ($entity->reports as $report)
          <div class="list-group-item">
            {{ $report->id}}
            
            @if (count($report->photos) > 0)
              <img src="/images/{{ $report->photos->first()->filename}}" height="100" width="100">
            @endif
            
            <a href="/reports/{{ $report->id }}">{{ $report->title}}</a>

            {{ $report->event_date }}
          </div> 
        @endforeach
      </div>

      <div>
        <form method="GET" action="/entities/{{ $entity->id }}/reports/showadd">
          <button>Add new report</button>
        </form>
      </div>
    </div>

    <div>
      <h3> Comments </h3>
@include('comments::comments-react', [
    'content_type' => App\Entity::class,
    'content_id' => $entity->id
])
    </div>
    
  </div>
@stop
