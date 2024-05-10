<?php
// تعيين رأس المستند كنص غير-HTML
header('Content-Type: application/json');

// تحقق من وجود معرف المشروع في الطلب
if(isset($_POST['projectid'])) {
    // هنا يجب عملية حذف البيانات من قاعدة البيانات باستخدام $_POST['projectid']
    // قم بإرجاع JSON يحتوي على حالة الحذف
    // مثال:
    /*
    $projectId = $_POST['projectid'];
    $sql = "DELETE FROM addpro WHERE projectid = '$projectId'";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("success" => false, "message" => "Error deleting record: " . $conn->error));
    }
    */
} else {
    // إذا لم يتم توفير معرف المشروع في الطلب، قم بإرجاع JSON لإظهار خطأ
    echo json_encode(array("success" => false, "message" => "Project ID not provided."));
}
?>
