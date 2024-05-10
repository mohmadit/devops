<?php
// التحقق من إرسال معرف المشروع عبر الطلب النموذجي
if (isset($_POST['editmemberid'])) {
    // استلام البيانات من النموذج
    $memberid = $_POST['editmemberid'];
    $memberName = $_POST['editmemberName'];
    $memberTeam = $_POST['editmemberTeam'];
    $usarname = $_POST['editusarname'];
    $projectName = $_POST['editprojectName'];
    $password = $_POST['editpassword'];
    $confirmpassword = $_POST['editconfirmpassword'];

    // اتصال بقاعدة البيانات
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'devops';

    // إنشاء اتصال
    $conn = new mysqli($servername, $username, $password, $dbname);

    // التحقق من الاتصال
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // استعداد الاستعلام لتحديث البيانات
    $sql = "UPDATE addmember SET memberName='$memberName', memberTeam='$memberTeam', usarname='$usarname', projectName='$projectName', password='$password', confirmpassword='$confirmpassword' WHERE memberid=$memberid";

    // تنفيذ الاستعلام
    if ($conn->query($sql) === TRUE) {
        echo "تم تحديث البيانات بنجاح";
    } else {
        echo "خطأ أثناء تحديث البيانات: " . $conn->error;
    }

    // إغلاق الاتصال
    $conn->close();
}
?>
