<!DOCTYPE html>
<html>

<head>
    <title>Task Manager</title>
</head>

<body>
    @extends('layout')

@section('content')

<h1>Task Manager</h1>

@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

<a href="{{ route('tasks.create') }}" class="button"> Add Task</a>

<table>
<tr>
    <th>Title</th>
    <th>Description</th>
    <th>Priority</th>
    <th>Status</th>
    <th>Actions</th>
</tr>

@foreach($tasks as $task)
<tr>
    <td>{{ $task->title }}</td>
    <td>{{ $task->description }}</td>
    <td class="{{ $task->priority }}">{{ ucfirst($task->priority) }}</td>
    <td>
        <span class="{{ $task->status }}">
            {{ ucfirst($task->status) }}
        </span>
    </td>
    <td>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn-edit">Edit</a>

        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn-delete">Delete</button>
        </form>

        @if($task->status == 'pending')
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" style="display:inline">
            @csrf
            @method('PUT')
            <input type="hidden" name="status" value="completed">
            <button class="btn-complete">✔ Complete</button>
        </form>
        @endif
    </td>
</tr>
@endforeach
</table>

@endsection

</body>

</html>