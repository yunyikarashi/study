@extends('layout')
@section('content')
<h1>ToDo作成</h1>
<form method="POST" action="{{ route('todos.store') }}">
  @csrf
  <input type="text" name="title" placeholder="タイトル">
  <button type="submit">追加</button>
</form>
@endsection