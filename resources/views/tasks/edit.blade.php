<!DOCTYPE html>
<html>

<head>
    <title>Edit Task</title>
</head>

<body>
    @extends('layout')
    @section('content')

    <h1>Edit Task</h1>
   

    @if($errors->any())
        <ul style="color:red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>Title: <input type="text" name="title" value="{{ old('title', $task->title) }}"></p>
        <p>Description:<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <textarea name="description">{{ old('description', $task->description) }}</textarea></p>
        <p>Priority:
            <select name="priority">
                <option value="low" {{ (old('priority', $task->priority) == 'low') ? 'selected' : '' }}>Low</option>
                <option value="medium" {{ (old('priority', $task->priority) == 'medium') ? 'selected' : '' }}>Medium</option>
                <option value="high" {{ (old('priority', $task->priority) == 'high') ? 'selected' : '' }}>High</option>
            </select>
        </p>
        <p>Status:
            <select name="status">
                <option value="pending" {{ (old('status', $task->status) == 'pending') ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ (old('status', $task->status) == 'completed') ? 'selected' : '' }}>Completed
                </option>
            </select>
        </p>

        <div class="btnChanges">

        <button type="submit">Update Task</button>
         <a href="{{ route('tasks.index') }}" class="btn-delete" style="text-decoration:none; padding:6px 10px;">
                Back
            </a>
        </div>
    </form>
    @endsection
</body>

</html>