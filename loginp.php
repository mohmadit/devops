<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require_once 'db_connect.php';

// تحقق من إرسال البيانات بواسطة الطريقة POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // التحقق من أن تم إرسال اسم المستخدم وكلمة المرور
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])) {
        
        // تخزين قيم المتغيرات المرسلة
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        
        // استعلام للتحقق من وجود اسم المستخدم وكلمة المرور في قاعدة البيانات
        $query = "SELECT * FROM login WHERE username='$username' AND password='$password' AND type='$type'";
        
        // تنفيذ الاستعلام
        $result = mysqli_query($connect, $query);
        
        // التحقق من وجود صف واحد على الأقل
        if(mysqli_num_rows($result) == 1) {
            // تسجيل الدخول ناجح
            // يمكنك توجيه المستخدم إلى صفحة أخرى بعد تسجيل الدخول بنجاح
            header("Location: manger.php");
        } else {
            // تسجيل الدخول فاشل
            echo "Invalid username, password, or type";
        }
    } else {
        // عندما لا يتم إرسال اسم المستخدم أو كلمة المرور
        echo "Please enter both username, password, and type";
    }
}
?>
