<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To-Do List</title>
</head>
<body>
<h1>To-Do List</h1>
<form action="add_task.php" method="POST">
    <input type="text" name="task" placeholder="Enter new task" required>
    <button type="submit">Add Task</button>
</form>
</body>
</html>

*copy it inside the db.php*
<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Your KSWEB MySQL password if any
$database = 'todolist';

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>