<?php
if (isset($_POST['deleteProjectid'])) {
    $projectid = $_POST['deleteProjectid'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'devops';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM addpro WHERE deleteProjectid = '$projectid'";

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