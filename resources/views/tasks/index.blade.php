<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
</head>
<body>

    <h1>Task Manager</h1>

    <a href="/tasks/create">Create Task</a>

    <h2>All Tasks</h2>

    @foreach ($tasks as $task)
        <div>
            <h3>{{ $task->title }}</h3>

            <p>{{ $task->description }}</p>

            <p>Status: {{ $task->status }}</p>

            <a href="/tasks/{{ $task->id }}/edit">Edit</a>


<form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>
        </div>
    @endforeach

</body>
</html>
