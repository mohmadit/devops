<?php
// Connection to the database
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'devops';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the task number to be deleted is set
if(isset($_POST['deleteTaskNumber'])) {
    $taskNumber = $_POST['deleteTaskNumber'];

    // Prepare and execute SQL statement to delete task
    $sql = "Drop FROM task WHERE taskNumber = '$taskNumber'";
    if ($conn->query($sql) === TRUE) {
        echo "Task deleted successfully!";
    } else {
        echo "Error deleting task: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
