<html>
<head>
        <title>To do list</title>
</head>
<body>
    <h1>To Do List</h1>

    {% if tasks is not empty %}
        <p>Here are all your tasks:</p>
        <ul>
            {% for task in tasks %}
                <li><p>{{ task.getDescription}} {{task.getTimeRemain}}</p></li>


            {% endfor %}
        </ul>
    {% endif %}

    <form action= '/tasks' method='post'>
        <label for='description'>Task Description</label>
        <input id='description' name='description' type='text'>
        <label for='time_remain'>Time Remaining</label>
        <input id='time_remain' name='time_remain' type=number>
        <button type='submit' class = 'btn'>Add tasks</button>
    </form>




    <form action= '/delete_tasks' method='post'>
        <button type='submit'>delete</button>
    </form>
</body>
</html>
