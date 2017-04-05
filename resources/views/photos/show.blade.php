@extends('layouts.app')

@section('content')
    
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <table>
            <tr><td>{{ $entity->id }}</tr></td>
            <tr><td>{{ $entity->name }}</tr></td>
          </table>

         <div>
           <form type="GET" action="/entities/{{ $entity->id }}/showedit">
             <button >edit entity</button>
           </form>
         </div>

         <h3> Photos </h3>
          <div class="list-group">
            @foreach ($entity->entityphotos as $photo)
              <div class="list-group-item">
                <img url="/images/{{ $photo->filename }}"></img> <a href="">delete</a>
              </div>
            @endforeach
          </div>

        <div>
        <h3>Reports</h3

        <div class="list-group">
            @foreach ($entity->reports as $report)
                <ul>
                    <li class="list-group-item">{{ $report->id }} : {{ $report->title}} </li>
                </ul> 
            @endforeach
        </div>

       <button>Add new report</button>
       </div>
      </div>
@stop
