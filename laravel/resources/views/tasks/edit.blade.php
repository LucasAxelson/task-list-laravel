@extends('layout.app')

@section('title', "Edit Task")

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }

        .input-div {
            display: flex;
            flex-direction: row;
            margin: 1rem;
        }

        .div-elements {
            margin: 0 1rem;
        }
    </style>
@endsection

@section('content')
<form method="POST" action="{{ route('tasks.update', [ 'id' => $task->id ] ) }}">
@csrf
@method('PUT')    
    
<div class="input-div">
    <label class="div-elements" for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $task->title }}">
    @error('title')
        <p class="div-elements error-message">{{ $message }}</p>
    @enderror
</div>

<div class="input-div">
    <label class="div-elements" for="description">Description</label>
    <textarea rows="2" name="description" id="description">{{ $task->description }} </textarea>
    @error('description')
        <p class="div-elements error-message">{{ $message }}</p>
    @enderror
</div>

<div class="input-div">
    <label class="div-elements" for="long_description">Long Description</label>
    <textarea rows="5" name="long_description" id="long_description">{{ $task->long_description }} </textarea>
    @error('long_description')
        <p class="div-elements error-message">{{ $message }}</p>
    @enderror
</div>

<div class="input-div">
    <label class="div-elements" for="completed">Completed?</label>
    <input type="checkbox" name="completed" id="completed" value="1">
    @error('completed')
    <p class="div-elements error-message">{{ $message }}</p>
    @enderror
</div>

<div>
    <button type="submit">Edit Task</button>
</div>
</form>
<p><a href="{{ route('tasks.index') }}">Go back!</a></p>

@endsection