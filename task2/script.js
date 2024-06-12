let todos = [];

document.getElementById('todoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    addTodo();
});

function addTodo() {
    const todoInput = document.getElementById('todoInput');
    const todoText = todoInput.value.trim();
    if (todoText !== '') {
        const todo = {
            id: Date.now(),
            text: todoText,
            completed: false
        };
        todos.push(todo);
        todoInput.value = '';
        renderTodos();
    }
}

function editTodo(id) {
    const newTodoText = prompt('Edit your todo:');
    if (newTodoText !== null) {
        const todo = todos.find(todo => todo.id === id);
        if (todo) {
            todo.text = newTodoText.trim();
            renderTodos();
        }
    }
}

function deleteTodo(id) {
    todos = todos.filter(todo => todo.id !== id);
    renderTodos();
}

function completeTodo(id) {
    const todo = todos.find(todo => todo.id === id);
    if (todo) {
        todo.completed = !todo.completed;
        renderTodos();
    }
}

function renderTodos() {
    const todoList = document.getElementById('todoList');
    todoList.innerHTML = '';

    todos.forEach(todo => {
        const todoItem = document.createElement('li');
        todoItem.className = `list-group-item d-flex justify-content-between align-items-center ${todo.completed ? 'completed' : ''}`;
        todoItem.innerHTML = `
            <span>${todo.text}</span>
            <div>
                <button class="btn btn-success btn-sm me-2" onclick="completeTodo(${todo.id})">Complete</button>
                <button class="btn btn-warning btn-sm me-2" onclick="editTodo(${todo.id})">Edit</button>
                <button class="btn btn-danger btn-sm" onclick="deleteTodo(${todo.id})">Delete</button>
            </div>
        `;
        todoList.appendChild(todoItem);
    });
}

renderTodos();
