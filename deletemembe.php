<?php
if (isset($_POST['deletememberid'])) {
    $projectid = $_POST['deletememberid'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'devops';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM addmember WHERE deletememberid = '$memberid'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Project ID not provided";
}
?>