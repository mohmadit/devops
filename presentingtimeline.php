<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DevOps Project Management</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f2f2f2; 
    }
    .container-fluid {
      padding-left: 0;
      padding-right: 0;
    }
    .container {
      margin-top: 20px;
    }
    th, td {
      text-align: center;
    }
    th {
      background-color: #007bff;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DevOps Project Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <!-- Modified login button -->
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2 class="text-center">view time</h2>
  <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Project Name</th>
          <th>Project Type</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Description</th>
        
        </tr>
      </thead>
      <tbody>
        <!-- PHP code to fetch and display data -->
        <?php
        // اتصال بقاعدة البيانات
        $servername = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dbname = 'devops';

        // إنشاء اتصال
        $conn = new mysqli($servername, $username, $password, $dbname);

        // التحقق من الاتصال
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // استعداد الاستعلام لاسترداد البيانات
        $sql = "SELECT * FROM addpro";
        $result = $conn->query($sql);

        // عرض البيانات في الجدول
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["projectid"]."</td>";
                echo "<td>".$row["projectName"]."</td>";
                echo "<td>".$row["projectType"]."</td>";
                echo "<td>".$row["startDate"]."</td>";
                echo "<td>".$row["endDate"]."</td>";
                echo "<td>".$row["description"]."</td>";
              
                echo "<td>";
               
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No projects found</td></tr>";
        }

        // إغلاق الاتصال
        $conn->close();
      ?>
    </tbody>
  </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
