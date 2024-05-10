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
    .login-frame {
      border: 2px solid #343a40; 
      padding: 20px; 
      margin-top: 50px; 
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
        <a class="nav-link" href="dev.html">Home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="loginp.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
  <h1>Welcome to DevOps Project Management</h1>
  <p>DevOPS</p>
  
  <!-- Login Section -->
  <!-- Login Section -->
<div id="login" class="login-frame">
  <h2 class="text-center">Login</h2>
  <form action="loginp.php" method="post"> <!-- تغيير هنا -->
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username"> <!-- تغيير هنا -->
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <select class="form-control" id="type" name="type"> <!-- تغيير هنا -->
        <option value="boss">Boss</option>
        <option value="Quality team">Quality Team</option>
        <option value="Operations team">Operations Team</option>
        <option value="Development team">Development Team</option>
      </select>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password"> <!-- تغيير هنا -->
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
