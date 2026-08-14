<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

    <h1>Edit Task</h1>

    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('PUT')

        <div>
            <label>Title</label>
            <input
                type="text"
                name="title"
                value="{{ $task->title }}"
                required
            >
        </div>

        <br>

        <div>
            <label>Description</label>
            <textarea name="description">{{ $task->description }}</textarea>
        </div>

        <br>

        <div>
            <label>Status</label>

            <select name="status">
                <option value="pending"
                    {{ $task->status === 'pending' ? 'selected' : '' }}>
                    Pending
                </option>

                <option value="completed"
                    {{ $task->status === 'completed' ? 'selected' : '' }}>
                    Completed
                </option>
            </select>
        </div>

        <br>

        <button type="submit">Update Task</button>
    </form>

    <br>

    <a href="/tasks">Back to Tasks</a>

</body>
</html>
