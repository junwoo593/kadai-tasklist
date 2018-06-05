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
            @foreach ($tasks as $tasks)
            <tr>
                <td>{!! link_to_route('tasks.show', $tasks->id, ['id' => $tasks->id]) !!} : {{ $tasks->status }} > {{ $tasks->content }}</td>
                <td>{{ $tasks->title }}</td>
                <td>{{ $tasks->content }}</td>
        </tr>
           @endforeach
           </tbody>
           </table>
           
    @endif

    {!! link_to_route('tasks.create', 'Posting', null, ['class' => 'btn btn-primary']) !!}

@endsection