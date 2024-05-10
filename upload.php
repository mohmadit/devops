<?php
// تأسيس الاتصال بقاعدة البيانات
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'devops';

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (isset($_POST['requirementName']) && isset($_FILES["descriptionFile"]) && isset($_FILES["diagramFile"])) {
        // Get requirement name
        $requirementName = $_POST['requirementName'];

        // Get temporary files paths
        $descriptionTempFile = $_FILES["descriptionFile"]["tmp_name"];
        $diagramTempFile = $_FILES["diagramFile"]["tmp_name"];

        // Get file names
        $descriptionFileName = basename($_FILES["descriptionFile"]["name"]);
        $diagramFileName = basename($_FILES["diagramFile"]["name"]);

        // Set target directory
        $targetDirectory = "D:/xampp/htdocs/devops/";

        // Set target file paths
        $descriptionTargetFile = $targetDirectory . $descriptionFileName;
        $diagramTargetFile = $targetDirectory . $diagramFileName;

        // Move uploaded files to target directory
        if (move_uploaded_file($descriptionTempFile, $descriptionTargetFile) && move_uploaded_file($diagramTempFile, $diagramTargetFile)) {
            // Files uploaded successfully, now insert data into database
            $sql = "INSERT INTO requirements (requirement_name, description_file_name, diagram_file_name, description_file_path, diagram_file_path) 
                    VALUES ('$requirementName', '$descriptionFileName', '$diagramFileName', '$descriptionTargetFile', '$diagramTargetFile')";

            if ($conn->query($sql) === TRUE) {
                echo "Files uploaded and data inserted successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your files.";
        }
    } else {
        echo "Please fill all the fields.";
    }
}

// Close connection
$conn->close();
?>
