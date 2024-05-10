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
if(isset($_POST['taskNumber']) && isset($_POST['taskName']) && isset($_POST['taskType']) && isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['responsibleTeam']) && isset($_POST['responsibleUser'])) {
    $taskNumber = $_POST['taskNumber'];
    $taskName = $_POST['taskName'];
    $taskType = $_POST['taskType'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $responsibleTeam = $_POST['responsibleTeam'];
    $responsibleUser = $_POST['responsibleUser'];

    // Prepare and execute SQL statement to insert task
    $sql = "INSERT INTO task (taskNumber, taskName, taskType, startDate, endDate, responsibleTeam, responsibleUser) VALUES ('$taskNumber', '$taskName', '$taskType', '$startDate', '$endDate', '$responsibleTeam', '$responsibleUser')";
    if ($conn->query($sql) === TRUE) {
        echo "Task created successfully!";
    } else {
        echo "Error creating task: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
