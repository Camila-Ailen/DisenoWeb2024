document.addEventListener('DOMContentLoaded', function() {
    var addTaskButton = document.getElementById('addTaskButton');
    var taskInput = document.getElementById('taskInput');
    var taskList = document.getElementById('taskList');

    addTaskButton.addEventListener('click', function() {
        var taskText = taskInput.value.trim();
        if (taskText !== '') {
            addTask(taskText);
            taskInput.value = '';
            taskInput.focus();
        }
    });

    function addTask(taskText) {
        var listItem = document.createElement('li');
        listItem.className = 'task-item';

        var span = document.createElement('span');
        span.textContent = taskText;

        var deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.addEventListener('click', function() {
            taskList.removeChild(listItem);
        });

        listItem.appendChild(span);
        listItem.appendChild(deleteButton);
        taskList.appendChild(listItem);
    }
});
