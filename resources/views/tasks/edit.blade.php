@extends('layouts.app')

@section('content')

<h1>id: {{ $tasks->id }} Edit of Task Page</h1>
        
        <div class="row">
        <div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
   

    {!! Form::model($tasks, ['route' => ['tasks.update', $tasks->id], 'method' => 'put']) !!}
         <div class="form-group">
        
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
         </div>
         
         <div class="form-group">
        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
         </div>
         
        {!! Form::submit('Update', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
    </div>
       </div>

@endsection