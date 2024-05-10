  
<?php
require_once 'db_connect.php';

// تحقق من أن النموذج قد تم إرساله
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تحقق من أن البيانات مرسلة بشكل صحيح
    if (isset($_POST['memberid']) && isset($_POST['memberName']) && isset($_POST['memberTeam']) && isset($_POST['usarname']) && isset($_POST['projectName']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
        
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
        $memberid = $_POST['memberid'];
        $memberName = $_POST['memberName'];
        $memberTeam = $_POST['memberTeam'];
        $usarname = $_POST['usarname'];
        $projectName = $_POST['projectName'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        // استعداد الاستعلام لإدراج البيانات في جدول البيانات
        $sql = "INSERT INTO addmember (memberid, memberName, memberTeam, usarname, projectName, password, confirmpassword)
        VALUES ('$memberid', '$memberName', '$memberTeam', '$usarname', '$projectName', '$password', '$confirmpassword')";

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
