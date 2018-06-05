@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $tasks->status }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $tasks->content }}</td>
        </tr>
    </table>

     {!! link_to_route('tasks.edit', 'Edit', ['id' => $tasks->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection