@extends('layout.app')

@section('title', $task->title)

@section('styles')
<style>
    .link-div {
        margin-top: 3rem;
        display: flex;
        flex-direction: row;
        justify-content: space-between
    }

    .link {
    /* Font Design */
        text-decoration: none;
        font-weight: 700;
        color: black;

    /* Button Design */
        border: 1px solid black;
        border-radius: 5px;
        padding: 5px;
        background-color: rgba(222, 219, 200, 0);
    }
    .link:hover {
        background-color: rgba(222, 219, 200, 0.456);
    }
</style>
@endsection    

@section('content')
    
    <p>{{$task->title}}</p>
    <p>{{$task->description}}</p>
    
    @if ($task->long_description == true) 
        <p>{{$task->long_description}}</p>
    @endif
        
    <p>Date: {{$task->created_at}}</p>

    <div class="link-div">
        <span><a class="link" href="{{ route('tasks.index') }}">Go back!</a></span>
        <span><a class="link" href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit Task</a></span>
    </div>

@endsection