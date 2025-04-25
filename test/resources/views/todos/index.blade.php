@extends('layout')

@section('content')
<h1>ToDo一覧</h1>
<a href="{{ route('todos.create') }}">追加</a>
<ul>
  @foreach ($todos as $todo)
    <li>
      {{ $todo->title }} - {{ $todo->completed ? '〇' : '×' }}
      <a href="{{ route('todos.edit', $todo) }}">編集</a>
      <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button>
      </form>
    </li>
  @endforeach
</ul>
@endsection