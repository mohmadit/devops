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
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Time Management</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="projectMenu">
              <li class="nav-item">
                <a class="nav-link" href="addtime.php">Add time</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Edit time</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Delete time</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View time</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
<!-- Main Content -->
<main role="main" class="col-md-10 main-content">
      <!-- Add Task Form -->
      <div class="container">
        <h2>Add Time</h2>
        <form action="addtask.php" method="post">
          <div class="form-group">
            <label for="taskNumber">Task Number</label>
            <input type="text" class="form-control" id="taskNumber" name="taskNumber">
          </div>
          
          <div class="form-group">
            <label for="startDate">Start Date</label>
            <input type="date" class="form-control" id="startDate" name="startDate">
          </div>
          <div class="form-group">
            <label for="endDate">End Date</label>
            <input type="date" class="form-control" id="endDate" name="endDate">
          </div>
          
          <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
      </div>

      <!-- Display Task Table -->
      <div class="container">
        <h2>Task List</h2>
        <table class="table table-bordered">
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
            <!-- PHP code to fetch and display data -->
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
            $sql = "SELECT * FROM tasks";
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
                    echo "<button class='btn btn-primary edit-btn' data-toggle='modal' data-target='#editTaskModal' data-tasknumber='".$row["taskNumber"]."' data-startdate='".$row["startDate"]."' data-enddate='".$row["endDate"]."'>Update</button>";
                    echo "<button class='btn btn-danger delete-btn' data-toggle='modal' data-target='#deleteTaskModal' data-tasknumber='".$row["taskNumber"]."'>Delete</button>";
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
    </main>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Edit Task Modal -->
<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editTaskModalLabel">Edit Time</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edittask.php" method="post">
          <input type="hidden" id="editTaskNumber" name="editTaskNumber">
          <div class="form-group">
          
          <div class="form-group">
            <label for="editStartDate">Start Date</label>
            <input type="date" class="form-control" id="editStartDate" name="editStartDate">
          </div>
          <div class="form-group">
            <label for="editEndDate">End Date</label>
            <input type="date" class="form-control" id="editEndDate" name="editEndDate">
          </div>
        
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Task Modal -->
<div class="modal fade" id="deleteTaskModal" tabindex="-1" role="dialog" aria-labelledby="deleteTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteTaskModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this task?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to handle edit and delete modals -->
<script>
  $(document).ready(function() {
    $('.edit-btn').click(function() {
      var taskNumber = $(this).data('tasknumber');
     
      var startDate = $(this).data('startdate');
      var endDate = $(this).data('enddate');
      

      $('#editTaskNumber').val(taskNumber);
      
      $('#editStartDate').val(startDate);
      $('#editEndDate').val(endDate);
      
    });

    // Function to handle delete confirmation
    $('.delete-btn').click(function() {
      var deleteTaskNumber = $(this).data('tasknumber');
      $('#deleteTaskModal').modal('show');

      $('#confirmDeleteBtn').click(function() {
        // AJAX request to delete data from the database
        $.ajax({
          type: "POST",
          url: "deletetask.php",
          data: {
            deleteTaskNumber: deleteTaskNumber
          },
          success: function(response) {
            // Handle success
            alert("Task deleted successfully!");
            // Reload the page or update the table with new data
            // Example: location.reload();
          },
          error: function(xhr, status, error) {
            // Handle error
            alert("Error deleting task: " + error);
          }
        });
      });
    });
  });
</script>

</body>
</html>