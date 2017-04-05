@extends('layouts.app')

@section('content')

  @if(Auth::check())

    <div>    
      <div class="row col-md-6 col-md-offset-3">

        <h3>Add new report</h3>
        {{ Form::open(['url' => '/reports/add']) }}
          {{ Form::openGroup('title', 'Title') }}
            {{ Form::label('type','Report Type') }}
            {{ Form::select('type', $reportTypes) }}
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title') }}
            {{ Form::label('contact_name', 'Contact Name') }} 
            {{ Form::text('contact_name') }}
            {{ Form::label('contact_phone', 'Contact Phone') }}
            {{ Form::text('contact_phone') }}
            {{ Form::label('country_id', 'Country') }}
            {{ Form::select('country_id', $countries) }}
            {{ Form::label('country_area_id', 'Area') }}
            {{ Form::text('country_area_id') }}
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description') }}
            {{ Form::submit('Add Report') }}
          {{ Form::closeGroup() }}
        {{ Form::close() }}
      </div>
     </div>
  @endif
@stop
