<?php
// بيانات الاتصال بقاعدة البيانات
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'devops';

// إنشاء اتصال بقاعدة البيانات
$connect = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
