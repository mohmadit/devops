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

<!-- Main Content -->
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="admember.php">Team Member Management</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="teamMemberMenu">
              <li class="nav-item">
                <a class="nav-link" href="#">Add members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Edit members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Delete members</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View members</a>
              </li>
            </ul>
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
    <h2>Add Member Form</h2>
  <form action="addmember.php" method="post">
    <div class="form-group">
      <label for="memberid">Member ID</label>
      <input type="text" class="form-control" id="memberid" name="memberid">
    </div>
    <div class="form-group">
      <label for="memberName">Member Name</label>
      <input type="text" class="form-control" id="memberName" name="memberName">
    </div>
    <div class="form-group">
      <label for="memberTeam">Member Team</label>
      <input type="text" class="form-control" id="memberTeam" name="memberTeam">
    </div>
    <div class="form-group">
      <label for="usarname">User Name</label>
      <input type="text" class="form-control" id="usarname" name="usarname">
    </div>
    <div class="form-group">
      <label for="projectName">Project Name </label>
      <input type="text" class="form-control" id="projectName" name="projectName">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input class="form-control" id="password" name="password" rows="3"></input>
    </div>
    <div class="form-group">
      <label for="confirm password">Confirm Password</label>
      <input type="text" class="form-control" id="confirmpassword" name="confirmpassword">
    </div>
    <button type="submit" class="btn btn-primary">Add Member</button>
  </form>
</div>


<!-- Display Data Table -->
<!-- Display Data Table -->
  <div class="container">
    <h2>Project List</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Member ID</th>
          <th>Member Name</th>
          <th>Member Team</th>
          <th>User Name</th>
          <th>Project Name</th>
          <th>Password</th>
          <th>Confirm Password</th>
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
        $sql = "SELECT * FROM addmember";
        $result = $conn->query($sql);

        // عرض البيانات في الجدول
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["memberid"]."</td>";
                echo "<td>".$row["memberName"]."</td>";
                echo "<td>".$row["memberTeam"]."</td>";
                echo "<td>".$row["usarname"]."</td>";
                echo "<td>".$row["projectName"]."</td>";
                echo "<td>".$row["password"]."</td>";
                echo "<td>".$row["confirmpassword"]."</td>";
                echo "<td>";
                echo "<button class='btn btn-primary edit-btn' data-toggle='modal' data-target='#editMemberModal' data-memberid='".$row["memberid"]."' data-memberName='".$row["memberName"]."' data-memberTeam='".$row["memberTeam"]."' data-usarname='".$row["usarname"]."' data-projectName='".$row["projectName"]."' data-projectName='".$row["projectName"]."' data-password='".$row["password"]."'>Update</button>";
                echo "<button class='btn btn-danger delete-btn' data-toggle='modal' data-target='#deleteMemberModal' data-memberid='".$row["memberid"]."'>Delete</button>";
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
<div class="modal fade" id="editMemberModal" tabindex="-1" role="dialog" aria-labelledby="editMemberModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editMemberModalLabel">Edit Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editMemberForm" action="editmembe.php" method="post">
            <input type="hidden" id="editmemberid" name="editmemberid">
            <div class="form-group">
                <label for="editmemberName">Member Name</label>
                <input type="text" class="form-control" id="editmemberName" name="editmemberName">
            </div>
            <div class="form-group">
                <label for="editmemberTeam">Member Team</label>
                <input type="text" class="form-control" id="editmemberTeam" name="editmemberTeam">
            </div>
            <div class="form-group">
                <label for="editusarname">Username</label>
                <input type="text" class="form-control" id="editusarname" name="editusarname">
            </div>
            <div class="form-group">
                <label for="editprojectName">Project Name</label>
                <input type="text" class="form-control" id="editprojectName" name="editprojectName">
            </div>
            <div class="form-group">
                <label for="editpassword">Password</label>
                <input type="text" class="form-control" id="editpassword" name="editpassword">
            </div>
            <div class="form-group">
                <label for="editconfirmpassword">Confirm Password</label>
                <input type="text" class="form-control" id="editconfirmpassword" name="editconfirmpassword">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
      </div>
    </div>
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
    var memberid = $(this).data('memberid');
    var memberName = $(this).data('memberName');
    var memberTeam = $(this).data('memberTeam');
    var usarname = $(this).data('usarname');
    var projectName = $(this).data('projectName');
    var password = $(this).data('password');
    var confirmpassword = $(this).data('confirmpassword');

    $('#editmemberid').val(memberid);
    $('#editmemberName').val(memberName);
    $('#editmemberTeam').val(memberTeam);
    $('#editusarname').val(usarname);
    $('#editprojectName').val(projectName);
    $('#editpassword').val(password);
    $('#editconfirmpassword').val(confirmpassword);
  });

  // Function to handle saving changes
  $('#saveChangesBtn').click(function() {
    var memberid = $('#editmemberid').val();
    var memberName = $('#editmemberName').val();
    var memberTeam = $('#editmemberTeam').val();
    var usarname = $('#editusarname').val();
    var projectName = $('#editprojectName').val();
    var password = $('#editpassword').val();
    var confirmpassword = $('#editconfirmpassword').val();

    // AJAX request to update data in the database
    $.ajax({
      type: "POST",
      url: "editmembe.php",
      data: {
        editmemberid: memberid,
        editmemberName: memberName,
        editmemberTeam: memberTeam,
        editusarname: usarname,
        editprojectName: projectName,
        editpassword: password,
        editconfirmpassword: confirmpassword
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
<div class="modal fade" id="deleteMemberModal" tabindex="-1" role="dialog" aria-labelledby="deleteMemberModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteMemberModalLabel">Confirm Delete</h5>
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
      var deletememberidid = $(this).data('memberid');
      $('#deleteMemberModalLabel').modal('show');

      $('#confirmDeleteBtn').click(function() {
        var deletememberid = $(this).data('memberid');
        // AJAX request to delete data from the database
        $.ajax({
          type: "POST",
          url: "deletemembe.php",
          data: {
            deletememberid: memberid
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

  