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
<li class="nav-item">
          <a class="nav-link active" href="viewreport.php">>Report Presentation</a>
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

          <div class="container">
            
  <h2>Reports List</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Report Number</th>
        <th>Sender Name</th>
        <th>Team</th>
        <th>Date Sent</th>
        <th>Addressee</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="reportTableBody">
      <!-- Table body will be filled dynamically using JavaScript -->
    </tbody>
  </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript to fetch data from backend -->
<script>
  $(document).ready(function() {
    // Fetch data from backend
    $.ajax({
      url: "viewro.php", // اسم الملف الذي يحتوي على الكود الباك-إند
      type: "GET",
      dataType: "json",
      success: function(data) {
        // Iterate through each report and append to table
        $.each(data, function(index, report) {
          var row = "<tr>" +
                      "<td>" + report.report_number + "</td>" +
                      "<td>" + report.sender_name + "</td>" +
                      "<td>" + report.team + "</td>" +
                      "<td>" + report.date_sent + "</td>" +
                      "<td>" + report.addressee + "</td>" +
                      "<td>" + report.description + "</td>" +
                      "<td><button class='btn btn-primary view-btn' data-toggle='modal' data-target='#viewReportModal' data-description='" + report.description + "'>View</button></td>" +
                    "</tr>";
          $("#reportTableBody").append(row);
        });
      },
      error: function(xhr, status, error) {
        console.error("Error fetching data:", error);
      }
    });

    // JavaScript to handle view modal
    $('.view-btn').click(function() {
      var description = $(this).data('description');
      $('#reportDescription').text(description);
    });
  });
</script>

<!-- View Report Modal -->
<div class="modal fade" id="viewReportModal" tabindex="-1" role="dialog" aria-labelledby="viewReportModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewReportModalLabel">View Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="reportDescription"></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>