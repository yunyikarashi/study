@extends('layout')
@section('content')
<h1>ToDo編集</h1>
<form method="POST" action="{{ route('todos.update', $todo) }}">
  @csrf
  @method('PUT')
  <input type="text" name="title" value="{{ $todo->title }}">
  <label>
    <input type="checkbox" name="completed" value="1" {{ $todo->completed ? 'checked' : '' }}>
    
  </label>
  <button type="submit">更新</button>
</form>
@endsection