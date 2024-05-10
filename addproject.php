  
<?php
require_once 'db_connect.php';

// تحقق من أن النموذج قد تم إرساله
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تحقق من أن البيانات مرسلة بشكل صحيح
    if (isset($_POST['projectid']) && isset($_POST['projectName']) && isset($_POST['projectType']) && isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['description']) && isset($_POST['cost'])) {
        
        // بيانات الاتصال بقاعدة البيانات
        $servername = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dbname = 'devops';// اسم قاعدة البيانات

        // إنشاء اتصال
        $conn = new mysqli($servername, $username, $password, $dbname);

        // التحقق من الاتصال
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // استخراج البيانات المدخلة من النموذج
        $projectid = $_POST['projectid'];
        $projectName = $_POST['projectName'];
        $projectType = $_POST['projectType'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $description = $_POST['description'];
        $cost = $_POST['cost'];

        // استعداد الاستعلام لإدراج البيانات في جدول البيانات
        $sql = "INSERT INTO addpro (projectid, projectName, projectType, startDate, endDate, description, cost)
        VALUES ('$projectid', '$projectName', '$projectType', '$startDate', '$endDate', '$description', '$cost')";

        if ($conn->query($sql) === TRUE) {
           
           echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // إغلاق الاتصال
        $conn->close();
    } else {
        echo "Invalid data received.";
    }
}
?>
