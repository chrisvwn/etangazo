@extends('layouts.app')

@section('content')
    
    @foreach ($entities as $entity)
        <div>
            <a href="/entities/{{ $entity->id }}"> {{ $entity->name }} </a>
        </div>

    @endforeach
@stop
