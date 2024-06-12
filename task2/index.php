<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        .completed {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Todo List Application</h2>
        <form id="todoForm" class="row g-3 mb-4">
            <div class="col-md-10">
                <input type="text" class="form-control" id="todoInput" placeholder="Enter your todo">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Add Todo</button>
            </div>
        </form>
        <ul id="todoList" class="list-group"></ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
