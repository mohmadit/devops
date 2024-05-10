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
    .nav-link:hover {
      color: #ffffff !important; 
    }
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
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
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
            <a class="nav-link active" href="add.php">Project Management</a>
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
          <li class="nav-item">
          <a class="nav-link active" href="task.php">Task Management</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="taskManagementMenu">
              <li class="nav-item">
                <a class="nav-link" href="#">Add tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Edit tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Delete tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View tasks</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="releaseManagementLink">Release Management</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="releaseManagementMenu">
              <li class="nav-item">
                <a class="nav-link" href="#">Select version</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Publish version</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View version</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="uploadrequierment.php">Performance Analysis</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="performanceAnalysisMenu">
              <li class="nav-item">
                <a class="nav-link" href="#">Add a description of the project</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Charts</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="task.php">Time Plan Management</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="timePlanManagementMenu">
              <li class="nav-item">
                <a class="nav-link" href="#">Add plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Modify plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Delete plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View plan</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="viewreport.php">Report Presentation</a>
            <ul class="nav flex-column ml-3" style="display: none;" id="reportPresentationMenu">
              <li class="nav-item">
                <a class="nav-link" href="#">Development team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Operations team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quality team</a>
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
      <div class="container">
        <h1>Welcome to DevOps Project Management</h1>
        <p>DevOps</p>
      </div>
    </main>
  </div>
</div>

</script>
</body>
</html>
