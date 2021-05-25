<?php
session_start();



if(empty($_SESSION['username'])){
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

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
      letter-spacing: 3px;
  }
  .navbar-nav  li a:hover {
      color: #CF000F !important;
  }

  button {
    background-color: #CF000F;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
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
      <a class="navbar-brand" href="test.php">Blood Donor's Network</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          
        <li><a href="test.php">Home</a></li>
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

<div class="container">
  <h1 style="color: red;">Your Feedback</h1>
  <h3 style="color: black;">Feel free to say what you think about us:</h3>
  <form method="post" id="form1" action="add_feedback.php" onSubmit="alert('Thank you for your feedback.');" >
    <div class="form-group">
	
	<!--<label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="subject"><b>Subject</b></label>
      <input type="text" placeholder="Enter Subject" name="subject" required>

      <label for="post"><b>Post</b></label>
      <input type="text" placeholder="Enter Your Post" name="post" required>-->
    <label for="name" style="color: black;">Name:</label>
      <textarea class="form-control" rows="1" id="name" name="name"></textarea>
        <label for="contact" style="color: black;">Contact Number:</label>
      <textarea class="form-control" rows="1" id="contact" name="contact"></textarea>
      <label for="feedback" style="color: black;">Feedback:</label>
      <textarea class="form-control" rows="5" id="feedback" name="feedback"></textarea>
      <button type="submit" <a href="BDN.php">Submit</a></button>
    </div>
  </form>
</div>

</body>
</html>