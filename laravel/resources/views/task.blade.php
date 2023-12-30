@extends('layout.app')

@section('title', $task->title)

@section('content')
        <p>{{$task->title}}</p>
        <p>{{$task->description}}</p>
        @if ($task->long_description == true) 
            <p>{{$task->long_description}}</p>
        @endif
        <p>Date: {{$task->created_at}}</p>
        <p><a href="{{ route('tasks.index') }}">Go back!</a></p>
@endsection