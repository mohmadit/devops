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

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Task Management</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="projectMenu">
              <li class="nav-item">
                <a class="nav-link" href="addtask.php">Add Task</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Edit Task</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Delete Task</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View Tasks</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
<!-- Main Content -->
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Project Management</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="projectMenu">
              <li class="nav-item">
                <a class="nav-link" href="add.php">Add project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Edit project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Delete project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View projects</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main role="main" class="col-md-10 main-content">
  <!-- Add Project Form -->
  <div class="container">
    <h2>Add Project Form</h2>
  <form action="addproject.php" method="post">
    <div class="form-group">
      <label for="projectid">Project ID</label>
      <input type="text" class="form-control" id="projectid" name="projectid">
    </div>
    <div class="form-group">
      <label for="projectName">Project Name</label>
      <input type="text" class="form-control" id="projectName" name="projectName">
    </div>
    <div class="form-group">
      <label for="projectType">Project Type</label>
      <input type="text" class="form-control" id="projectType" name="projectType">
    </div>
    <div class="form-group">
      <label for="startDate">Start Date</label>
      <input type="date" class="form-control" id="startDate" name="startDate">
    </div>
    <div class="form-group">
      <label for="endDate">End Date</label>
      <input type="date" class="form-control" id="endDate" name="endDate">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="cost">Cost</label>
      <input type="text" class="form-control" id="cost" name="cost">
    </div>
    <button type="submit" class="btn btn-primary">Create Project</button>
  </form>
</div>


<!-- Display Data Table -->
<!-- Display Data Table -->
  <div class="container">
    <h2>Project List</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Project Name</th>
          <th>Project Type</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Description</th>
          <th>Cost</th>
          <th>Action</th>
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
                echo "<td>".$row["cost"]."</td>";
                echo "<td>";
                echo "<button class='btn btn-primary edit-btn' data-toggle='modal' data-target='#editProjectModal' data-projectid='".$row["projectid"]."' data-projectname='".$row["projectName"]."' data-projecttype='".$row["projectType"]."' data-startdate='".$row["startDate"]."' data-enddate='".$row["endDate"]."' data-description='".$row["description"]."' data-cost='".$row["cost"]."'>Update</button>";
                echo "<button class='btn btn-danger delete-btn' data-toggle='modal' data-target='#deleteProjectModal' data-projectid='".$row["projectid"]."'>Delete</button>";
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
</div>

<!-- Edit Project Modal -->
<div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProjectModalLabel">Edit Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="edit.php" method="post">
          <input type="hidden" id="editProjectid" name="editProjectId">
          <div class="form-group">
            <label for="editProjectName">Project Name</label>
            <input type="text" class="form-control" id="editProjectName" name="editProjectName">
          </div>
          <div class="form-group">
            <label for="editProjectType">Project Type</label>
            <input type="text" class="form-control" id="editProjectType" name="editProjectType">
          </div>
          <div class="form-group">
            <label for="editStartDate">Start Date</label>
            <input type="date" class="form-control" id="editStartDate" name="editStartDate">
          </div>
          <div class="form-group">
            <label for="editEndDate">End Date</label>
            <input type="date" class="form-control" id="editEndDate" name="editEndDate">
          </div>
          <div class="form-group">
            <label for="editDescription">Description</label>
            <textarea class="form-control" id="editDescription" name="editDescription" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="editCost">Cost</label>
            <input type="text" class="form-control" id="editCost" name="editCost">
          </div>
        
      </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

</main>

      </div>
    </main>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<script>
  $('.edit-btn').click(function() {
    var projectid = $(this).data('projectid');
    var projectName = $(this).data('projectname');
    var projectType = $(this).data('projecttype');
    var startDate = $(this).data('startdate');
    var endDate = $(this).data('enddate');
    var description = $(this).data('description');
    var cost = $(this).data('cost');

    $('#editProjectid').val(projectid);
    $('#editProjectName').val(projectName);
    $('#editProjectType').val(projectType);
    $('#editStartDate').val(startDate);
    $('#editEndDate').val(endDate);
    $('#editDescription').val(description);
    $('#editCost').val(cost);
  });

  // Function to handle saving changes
  $('#saveChangesBtn').click(function() {
    var projectid = $('#editProjectid').val();
    var projectName = $('#editProjectName').val();
    var projectType = $('#editProjectType').val();
    var startDate = $('#editStartDate').val();
    var endDate = $('#editEndDate').val();
    var description = $('#editDescription').val();
    var cost = $('#editCost').val();

    // AJAX request to update data in the database
    $.ajax({
      type: "POST",
      url: "edit.php",
      data: {
        projectid: projectid,
        projectName: projectName,
        projectType: projectType,
        startDate: startDate,
        endDate: endDate,
        description: description,
        cost: cost
      },
      success: function(response) {
        // Handle success
        alert("Data updated successfully!");
        // Reload the page or update the table with new data
        // Example: location.reload();
      },
      error: function(xhr, status, error) {
        // Handle error
        alert("Error updating data: " + error);
      }
    });
  });
</script>
<!-- Delete Project Modal -->
<div class="modal fade" id="deleteProjectModal" tabindex="-1" role="dialog" aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteProjectModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this project?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>


<!-- JavaScript to handle delete confirmation -->
<script>
  $(document).ready(function() {
    $('.delete-btn').click(function() {
      var deleteProjectid = $(this).data('projectid');
      $('#deleteProjectModal').modal('show');

      $('#confirmDeleteBtn').click(function() {
        var deleteProjectid = $(this).data('projectid');
        // AJAX request to delete data from the database
        $.ajax({
          type: "POST",
          url: "deleteprojectt.php",
          data: {
            deleteProjectid: projectid
          },
          success: function(response) {
            // Handle success
            alert("Project deleted successfully!");
            // Reload the page or update the table with new data
            // Example: location.reload();
          },
          error: function(xhr, status, error) {
            // Handle error
            alert("Error deleting project: " + error);
          }
        });
      });
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  </script>
  
</body>
</html>

  