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

// Check if all fields are set
if(isset($_POST['taskNumber'])  && isset($_POST['startDate']) && isset($_POST['endDate'])) {
    $taskNumber = $_POST['taskNumber'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
   
    // Prepare and execute SQL statement to insert task
    $sql = "INSERT INTO tasks (taskNumber, startDate, endDate) VALUES ('$taskNumber',  '$startDate', '$endDate')";
    if ($conn->query($sql) === TRUE) {
        echo "Task created successfully!";
    } else {
        echo "Error creating task: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
