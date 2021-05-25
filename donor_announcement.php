<?php
session_start();


if(empty($_SESSION['usrname']) && empty($_SESSION['password'])){
   echo"<script>
    
    window.location= 'index.php';
    alert('you need to log in first');
    </script>
    ";
}

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
      <a class="navbar-brand" href="donor.php">Blood Donor's Network</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="donor_vwdonor.php">Donors</a></li> 
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="donor_vwforum.php">Forum <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="donor_vwforum.php">View Posts</a></li>
          <li><a href="donor_forum.php">Make Posts</a></li>
        </ul>
      </li>
        <li><a href="donor_announcement.php">Announcements</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <div id="apDiv1">
      <h3 style="color:white";><b>Announcements</b></h3>
  <iframe src="vw_ann.php" width="800" height="450" frameborder="0"></iframe>
</div>
</div>


<!--second and third container removed-->

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>All rights reserved. Project of CSE 411.</p> 
</footer>

</body>
</html>
