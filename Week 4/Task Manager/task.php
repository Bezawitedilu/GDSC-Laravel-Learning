<?php

class TaskManager
{
    private $mysqli;

    public function __construct($servername, $username, $password, $database)
    {
        $this->mysqli = new mysqli($servername, $username, $password, $database);

        if ($this->mysqli->connect_error) {
            throw new Exception("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function createTask($taskName, $taskDescription)
    {
        $stmt = $this->mysqli->prepare("INSERT INTO tasks (name, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $taskName, $taskDescription);

        if ($stmt->execute()) {
            echo "Task created successfully.";
        } else {
            throw new Exception("Error creating task: " . $stmt->error);
        }

        $stmt->close();
    }

    public function listTask()
    {
        $stmt = $this->mysqli->prepare("SELECT id, name, description FROM tasks");
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            echo "ID:" . $row['id'] . "<br>";
            echo "Name:" . $row['name'] . "<br>";
            echo "Descriptions:" . $row['description'] . "<br><hr>";
        }
        $stmt->close();
    }

    public function updateTask($taskId, $newTaskName, $newTaskDescription)
    {
        $stmt = $this->mysqli->prepare("UPDATE tasks SET name = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $newTaskName, $newTaskDescription, $taskId);

        if ($stmt->execute()) {
            echo "Task updated successfully.";
        } else {
            throw new Exception("Error updating task: " . $stmt->error);
        }

        $stmt->close();
    }

    public function deleteTask($taskId)
    {
        $stmt = $this->mysqli->prepare("DELETE FROM tasks WHERE id=?");
        $stmt->bind_param("i", $taskId);

        if ($stmt->execute()) {
            echo "Task Deleted successfully";
        } else {
            throw new Exception("Error deleting task: " . $stmt->error);
        }

        $stmt->close();
    }

    public function __destruct()
    {
        // Close connection to the database.
        $this->mysqli->close();
    }
}

// Enable error reporting during development
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $taskManager = new TaskManager("localhost", "root", "password", "tasmanager");


    $taskManager->createTask("Task 1", "This is task 1.");


    $taskManager->listTask();


    $taskManager->updateTask(1, "Updated Task 1", "This is the updated task 1.");

    $taskManager->deleteTask(1);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
