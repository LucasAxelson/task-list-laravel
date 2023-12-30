@extends('layout.app')

@section('title', "Task List!")

@section('content')
    @forelse($tasks as $task)
          <p><a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{$task->title}}</a></p>
    @empty
        <div>
            <p>No tasks to do!</p>
        </div>
    @endforelse
@endsection