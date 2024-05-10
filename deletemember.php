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
      background-color: #f2f2f2; /* تغيير لون الخلفية إلى رمادي */
    }
    .container-fluid {
      padding-left: 0;
      padding-right: 0;
    }
    .sidebar {
      background-color: #007bff; /* تغيير لون الخلفية للشريط الجانبي إلى الأزرق */
      color: #ffffff; /* لون النص في الشريط الجانبي */
      border-right: 2px solid #007bff; /* إضافة حاشية يمينية زرقاء */
      padding-top: 60px; /* تباعد الحواف العلوية للشريط الجانبي */
    }
    .nav-link {
      color: #ffffff !important; /* لون النص في الروابط بالشريط الجانبي */
    }
    .nav-link.active {
      font-weight: bold; /* تحديد الروابط النشطة */
    }
    .nav-link:hover {
      color: #ffffff !important; /* تغيير لون النص عند تحويم المؤشر إلى الأبيض */
    }
    .nav-item {
      border-bottom: 1px solid #ffffff; /* إضافة حاشية سفلية بيضاء لكل عنصر في القائمة */
      padding-bottom: 5px; /* تباعد أسفل الحاشية السفلية */
      margin-bottom: 5px; /* تباعد العناصر بشكل عام */
      border: 1px solid #ccc; /* إضافة إطار مربع رمادي */
      border-radius: 5px; /* تدوير الحواف لتكوين حواف مستديرة */
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
            <a class="nav-link" href="#" id="deleteMembersLink">Delete Members</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main role="main" class="col-md-10 main-content">
      <div class="container">
        <h1>Welcome to DevOps Project Management</h1>
        <p>This is a simple Bootstrap template for managing your DevOps projects.</p>
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
                <button class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deleteMemberModal">Delete</button>
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
    var deleteMembersLink = document.getElementById('deleteMembersLink');
    deleteMembersLink.addEventListener('click', function() {
      // Populate delete member modal with data here if needed
    });

    // Show delete member modal when delete button clicked
    var deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        $('#deleteMemberModal').modal('show');
      });
    });
  });
</script>

<!-- Delete Member Modal -->
<div class="modal fade" id="deleteMemberModal" tabindex="-1" role="dialog" aria-labelledby="deleteMemberModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteMemberModalLabel">Delete Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this member?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
