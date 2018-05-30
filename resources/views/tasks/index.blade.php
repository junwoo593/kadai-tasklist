@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
       <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
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

    {!! link_to_route('tasks.create', 'タスクの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection