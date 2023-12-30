@extends('layout.app')

@section('title', "Add Task")

@section('content')
<form method="POST" action="{{ route('tasks.store') }}">
@csrf

<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
</div>

<div>
    <label for="description">Description</label>
    <textarea rows="2" name="description" id="description"> </textarea>
</div>

<div>
    <label for="long_description">Long Description</label>
    <textarea rows="5" name="long_description" id="long_description"> </textarea>
</div>

<div>
    <button type="submit">Add Task</button>
</div>
</form>
<p><a href="{{ route('tasks.index') }}">Go back!</a></p>

@endsection