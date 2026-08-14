<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>

    <h1>Create Task</h1>

    <form method="POST" action="/tasks">
        @csrf

        <div>
            <label>Title</label>
            <input type="text" name="title" required>
        </div>

        <br>

        <div>
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>

        <br>

        <div>
            <label>Status</label>
            <select name="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <br>

        <button type="submit">Create Task</button>
    </form>

    <br>

    <a href="/tasks">Back to Tasks</a>

</body>
</html>
