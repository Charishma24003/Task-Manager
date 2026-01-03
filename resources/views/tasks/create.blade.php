<!DOCTYPE html>
<html>

<head>
    <title>Add Task</title>
</head>

<body>
    @extends('layout')
    @section('content')

        <h1>Add Task</h1>
        
        @if($errors->any())
            <ul style="color:red">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <p>Title: <input type="text" name="title" value="{{ old('title') }}"></p>
            <p>Description: <textarea name="description">{{ old('description') }}</textarea></p>
            <p>Priority:
                <select name="priority">
                    <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                    <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                </select>
            </p>
            <p>Status:
                <select name="status">
                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </p>
            <button type="submit" class="btn-edit">Add Task</button>

            <a href="{{ route('tasks.index') }}" class="btn-delete" style="text-decoration:none; padding:6px 10px;">
                Back
            </a>

        </form>
    @endsection
</body>

</html>