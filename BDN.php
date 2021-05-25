<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Donor's Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #CF000F; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 15px;
      letter-spacing: 2px;
  }
  .navbar-nav  li a:hover {
      color: #CF000F !important;
  }
  </style>
</head>
    
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="BDN.php">Blood Donor's Network</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          
        <li><a href="BDN.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="regdonor2.php">Donors <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="member_vw_donor.php">View Donors</a></li>
          <li><a href="regdonor2.php">Donor Registration</a></li>
        </ul>
      </li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="announcement.php">Announcements</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <img src="blood1.jpg" class="img-circle img-circle margin" style="display:inline" alt="Donor" width="350" height="350">
  <h3>I'm a Blood Donor</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Need Blood?</h3>
  <p>Query for your required blood group</p>
  <a href="req.php" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Us?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <li><a href="contact.php">Contact Us</a></li>
      <!--<img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">-->
    </div>
    <div class="col-sm-4"> 
      <li><a href="https://www.google.com.bd/maps/@23.7721306,90.425981,15z" target="_blank">Direction</a></li>
      <!--<img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">-->
    </div>
    <div class="col-sm-4"> 
      <li><a href="feedback.php">Feedback</a></li>
      <!--<img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">-->
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>All rights reserved. Project of CSE 411.</p> 
</footer>

</body>
</html>
