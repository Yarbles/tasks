<html>
<head>
        <title>To do list</title>
</head>
<body>
    <h1>To Do List</h1>

    {% if tasks is not empty %}
        <p>Here are all your tasks:</p>
        <ul>
            {% for task in tasksd %}
                <li>{{ task.getDescription }}</li>
                {% endfor %}
        </ul>
    {% endif %}

    <form action= '/tasks' method='post'>
        <label for='description'>Task Description</label>
        <input id='description' name='description' type='text'>

        <button type='submit'>Add tasks</button>
    </form>

    <form action= '/delete_tasks' method='post'>
        <button type='submit'>delete</button>
    </form>
</body>
</html>
