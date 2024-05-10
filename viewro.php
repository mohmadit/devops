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

// استعلام SQL لاسترداد البيانات
$sql = "SELECT report_number, sender_name, team, date_sent, addressee, description FROM reports";
$result = $conn->query($sql);

// التحقق من وجود بيانات
if ($result->num_rows > 0) {
    // إخراج البيانات كـ JSON
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo "0 results";
}

// إغلاق الاتصال
$conn->close();
?>
س