<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('/styles.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Task List</h1>

    <div class="task-form">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Task name" required>
            <textarea name="description" placeholder="Task description"></textarea>
            <button type="submit">Add Task</button>
        </form>
    </div>

    <ul class="task-list">
        @foreach($tasks as $task)
            <li class="{{ $task->is_completed ? 'completed' : '' }}">
                <div class="task-header">
                    <strong>{{ $task->name }}</strong>
                </div>
                <div class="task-description">
                    <em>{{ $task->description }}</em>
                </div>
                <div class="task-actions">
                    @if($task->is_completed)
                        <span class="text-success">Completed</span>
                    @else
                        <form action="{{ route('tasks.update', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm btn-success">Mark as Completed</button>
                        </form>
                    @endif
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete Task</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb6F76g8zT9H1+JfX+dQ9xKvnNfhFZp+F7dFfBo3z9dC3t5fdy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqzW5ExV4vVnCkgdtzo0snwY6enwzPiD5FffhbJvZy4I9" crossorigin="anonymous"></script>
</body>
</html>
