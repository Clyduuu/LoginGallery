<?php

class Task
{
    public $title;
    public $description;
    public $status;

    public function __construct($title, $description, $status = "pending")
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }
}

class TaskManager
{
    private $tasks = [];

    public function addTask($task)
    {
        $this->tasks[] = $task;
        echo "Task added successfully!";
    }

    public function viewTasks()
    {
        return $this->tasks;
    }

    public function updateTask($index, $newTitle, $newDescription, $newStatus)
    {
        $task = $this->tasks[$index - 1];
        $task->title = $newTitle;
        $task->description = $newDescription;
        $task->status = $newStatus;
        echo "Task updated successfully!";
    }

    public function deleteTask($index)
    {
        unset($this->tasks[$index - 1]);
        $this->tasks = array_values($this->tasks); // reindex array
        echo "Task deleted successfully!";
    }
}

$taskManager = new TaskManager();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST["action"];

    switch ($action) {
        case "add":
            $title = $_POST["title"];
            $description = $_POST["description"];
            $newTask = new Task($title, $description);
            $taskManager->addTask($newTask);
            break;

        case "update":
            $index = $_POST["index"];
            $newTitle = $_POST["newTitle"];
            $newDescription = $_POST["newDescription"];
            $newStatus = $_POST["newStatus"];
            $taskManager->updateTask($index, $newTitle, $newDescription, $newStatus);
            break;

        case "delete":
            $index = $_POST["index"];
            $taskManager->deleteTask($index);
            break;
    }
}

$tasks = $taskManager->viewTasks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #container {
            max-width: 600px;
            margin: auto;
        }

        h2 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 4px;
        }

        .btn-danger {
            background-color: #DC3545;
        }
    </style>
</head>
<body>

<div id="container">
    <h2>Task Management System</h2>

    <form action="index.php" method="post">
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Task Description:</label>
        <input type="text" id="description" name="description" required>

        <input type="hidden" name="action" value="add">
        <input type="submit" value="Add Task" class="btn">
    </form>

    <?php if (!empty($tasks)) : ?>
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php foreach ($tasks as $index => $task) : ?>
                <tr>
                    <td><?= $task->title ?></td>
                    <td><?= $task->description ?></td>
                    <td><?= $task->status ?></td>
                    <td>
                        <form action="index.php" method="post" style="display: inline-block;">
                            <input type="hidden" name="index" value="<?= $index + 1 ?>">
                            <input type="hidden" name="action" value="update">
                            <input type="text" name="newTitle" placeholder="New Title">
                            <input type="text" name="newDescription" placeholder="New Description">
                            <input type="text" name="newStatus" placeholder="New Status">
                            <input type="submit" value="Update" class="btn">
                        </form>

                        <form action="index.php" method="post" style="display: inline-block;">
                            <input type="hidden" name="index" value="<?= $index + 1 ?>">
                            <input type="hidden" name="action" value="delete">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>

</body>
</html>
