@extends('layouts.app')

@section('content')

    <h1>List of Task</h1>

    @if (count($tasks) > 0)
       <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Status</th>
                    <th>Task</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $task->content }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->content }}</td>
        </tr>
           @endforeach
           </tbody>
           </table>
           
    @endif

    {!! link_to_route('tasks.create', 'Posting', null, ['class' => 'btn btn-primary']) !!}

@endsection