<?php
  session_start();




   if(empty($_SESSION['uname']) && empty ($_SESSION['psw'])){

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

.carousel-inner img {
      /*-webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
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
      <a class="navbar-brand" href="admin.php">Blood Donor's Network</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="vwdonor.php">Donors</a></li>
        <li><a href="vwmember.php">Members</a></li>
        <li><a href="vwforum.php">Forum</a></li>
        <li><a href="admin_announcement.php">Announcements</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>


 <div class="container">
  <h1 style="color: red;">Announcement</h1>
  <form method="post" id="form1" action="add_announcement.php" onSubmit="alert('Your post has been submitted successfully. Thank you!');" >
    <div class="form-group">
  
  <!--<label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="subject"><b>Subject</b></label>
      <input type="text" placeholder="Enter Subject" name="subject" required>

      <label for="post"><b>Post</b></label>
      <input type="text" placeholder="Enter Your Post" name="post" required>-->
    
      <label for="subject" style="color: black;">Subject:</label>
      <textarea class="form-control" rows="2" id="subject" name="subject"></textarea>
      <label for="post" style="color: black;">Post:</label>
      <textarea class="form-control" rows="5" id="post" name="post"></textarea>
      <button type="submit" <a href="admin.php">Submit</a></button>
    </div>
  </form>
</div>

</body>
</html>