@extends('layouts.app')

@section('content')
@if (Auth::user()->id == $task->user_id)
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

     {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@else
{{ print "forbidden"}}
@endif
@endsection