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
    .navbar {
      background-color: #343a40; /* لون الشريط العلوي */
    }
    .navbar-brand {
      color: #ffffff; /* لون النص في الشريط العلوي */
    }
    .navbar-nav .nav-link {
      color: #ffffff; /* لون النص في الروابط بالشريط العلوي */
    }
    .navbar-nav .nav-link:hover {
      color: #ccc; /* تغيير لون النص عند تحويم المؤشر */
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
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
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
            <a class="nav-link active" href="presentingtask.php">Presenting tasks</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="presentingtimeline.php">Presenting the time plan</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="requirement.php">Defining requirements</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active"href="code.php">Coding the code</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="managingcode.php">Managing the code</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="testimplemen.php">Testing the implementation</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="uploadcodetest.php">Uploading the code for testing</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="buildapp.php">Building the application</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="sendreport.php">Sending reports</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main role="main" class="col-md-10 main-content">
      <div class="container">
      
      
      </div>
    </main>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
