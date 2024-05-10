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
    /* Add your custom CSS here */
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
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#" id="editMembersLink">Edit Members</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main role="main" class="col-md-10 main-content">
      <div class="container">
        <h1>Welcome to DevOps Project Management</h1>
        <p>DevOps</p>
        <!-- Members Table -->
        <table class="table">
          <thead>
            <tr>
              <th>Full Name</th>
              <th>User Name</th>
              <th>Team</th>
              <th>Projects Received</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Sample Row -->
            <tr>
              <td>John Doe</td>
              <td>johndoe</td>
              <td>Team A</td>
              <td>5</td>
              <td>2024-01-01</td>
              <td>2024-12-31</td>
              <td>
                <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editMemberModal">Edit</button>
              </td>
            </tr>
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
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var editMembersLink = document.getElementById('editMembersLink');
    editMembersLink.addEventListener('click', function() {
      // Populate edit member modal with data here if needed
    });

    // Show edit member modal when edit button clicked
    var editButtons = document.querySelectorAll('.edit-btn');
    editButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        $('#editMemberModal').modal('show');
      });
    });
  });
</script>

<!-- Edit Member Modal -->
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
        <form>
          <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName">
          </div>
          <div class="form-group">
            <label for="userName">User Name</label>
            <input type="text" class="form-control" id="userName">
          </div>
          <div class="form-group">
            <label for="team">Team</label>
            <input type="text" class="form-control" id="team">
          </div>
          <div class="form-group">
            <label for="projectsReceived">Projects Received</label>
            <input type="text" class="form-control" id="projectsReceived">
          </div>
          <div class="form-group">
            <label for="startDate">Start Date</label>
            <input type="date" class="form-control" id="startDate">
          </div>
          <div class="form-group">
            <label for="endDate">End Date</label>
            <input type="date" class="form-control" id="endDate">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
