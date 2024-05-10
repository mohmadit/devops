<?php
// التحقق من إرسال معرف المشروع عبر الطلب النموذجي
if (isset($_POST['editProjectId'])) {
    // استلام البيانات من النموذج
    $projectId = $_POST['editProjectId'];
    $projectName = $_POST['editProjectName'];
    $projectType = $_POST['editProjectType'];
    $startDate = $_POST['editStartDate'];
    $endDate = $_POST['editEndDate'];
    $description = $_POST['editDescription'];
    $cost = $_POST['editCost'];

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
    $sql = "UPDATE addpro SET projectName='$projectName', projectType='$projectType', startDate='$startDate', endDate='$endDate', description='$description', cost='$cost' WHERE projectid=$projectId";

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
