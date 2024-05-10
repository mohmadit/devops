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
  <h2 class="text-center">Tasks</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Task Number</th>
        <th>Task Name</th>
        <th>Task Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Responsible Team</th>
        <th>Responsible User</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- PHP loop to display table rows -->
      <?php
      // Connection to the database
      $servername = '127.0.0.1';
      $username = 'root';
      $password = '';
      $dbname = 'devops';

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Prepare and execute query to retrieve data
      $sql = "SELECT * FROM task";
      $result = $conn->query($sql);

      // Display data in table
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row["taskNumber"]."</td>";
              echo "<td>".$row["taskName"]."</td>";
              echo "<td>".$row["taskType"]."</td>";
              echo "<td>".$row["startDate"]."</td>";
              echo "<td>".$row["endDate"]."</td>";
              echo "<td>".$row["responsibleTeam"]."</td>";
              echo "<td>".$row["responsibleUser"]."</td>";
              echo "<td>";

              echo "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='8'>No tasks found</td></tr>";
      }

      // Close connection
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
