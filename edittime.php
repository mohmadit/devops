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

// Check if the task number and other fields are set
if(isset($_POST['editTaskNumber']) && isset($_POST['editTaskName']) && isset($_POST['editTaskType']) && isset($_POST['editStartDate']) && isset($_POST['editEndDate']) && isset($_POST['editResponsibleTeam']) && isset($_POST['editResponsibleUser'])) {
    $taskNumber = $_POST['editTaskNumber'];
    $taskName = $_POST['editTaskName'];
    $taskType = $_POST['editTaskType'];
    $startDate = $_POST['editStartDate'];
    $endDate = $_POST['editEndDate'];
    $responsibleTeam = $_POST['editResponsibleTeam'];
    $responsibleUser = $_POST['editResponsibleUser'];

    // Prepare and execute SQL statement to update task
    $sql = "UPDATE tasks SET taskName='$taskName', taskType='$taskType', startDate='$startDate', endDate='$endDate', responsibleTeam='$responsibleTeam', responsibleUser='$responsibleUser' WHERE taskNumber='$taskNumber'";
    if ($conn->query($sql) === TRUE) {
        echo "Task updated successfully!";
    } else {
        echo "Error updating task: " . $conn->error;
    }
    $sql = "UPDATE tasks SET  startDate='$startDate', endDate='$endDate'' WHERE taskNumber='$taskNumber'";
    if ($conn->query($sql) === TRUE) {
        echo "Task updated successfully!";
    } else {
        echo "Error updating task: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
