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
    .sidebar {
      background-color: #007bff; 
      color: #ffffff; 
      border-right: 2px solid #007bff; 
      padding-top: 60px; 
    }
    .nav-link {
      color: #ffffff !important; 
    }
    .nav-link.active {
      font-weight: bold; 
    }
    .nav-link:hover {
      color: #ffffff !important; 
    }
    .nav-item {
      border-bottom: 1px solid #ffffff; 
      padding-bottom: 5px; 
      margin-bottom: 5px; 
      border: 1px solid #ccc; 
      border-radius: 5px; 
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

<!-- Main Content -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Add Requirements</div>
        <div class="card-body">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="requirementName">Requirement Name</label>
              <input type="text" class="form-control" id="requirementName" name="requirementName">
            </div>
            <div class="form-group">
              <label for="descriptionFile">Description File</label>
              <input type="file" class="form-control-file" id="descriptionFile" name="descriptionFile">
            </div>
            <div class="form-group">
              <label for="diagramFile">Diagram File</label>
              <input type="file" class="form-control-file" id="diagramFile" name="diagramFile">
            </div>
            <button type="submit" class="btn btn-primary" id="uploadButton">Upload Requirements</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
        <h2>view Requirement</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Requirement Name</th>
              <th>Requirement Name </th>
              <th>Diagram File </th>
      
             
              <th>Action</th>
            </tr>
          </thead>
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

      // Fetch uploaded files from the database
      $sql = "SELECT * FROM requirements";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row['requirement_name']."</td>";
              echo "<td>".$row['description_file_name']."</td>";
              echo "<td>".$row['diagram_file_name']."</td>";
              echo "<td><a href='view.php?id=".$row['id']."' class='btn btn-primary'>View</a></td>"; // Link to view file
              echo "</tr>";
          }
      } else {
          echo "0 results";
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

<script>
  // Show uploaded files section after form submission
  $(document).ready(function(){
    $("#uploadButton").click(function(){
      $("#uploadedFiles").show();
    });
  });
</script>
