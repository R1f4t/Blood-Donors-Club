<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Donor's Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: 100px;
  text-align: center;
  font-family: arial;
  float: left;
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
    
  <div class="card1">
  <img src="nbs.jpg" alt="Nabila" style="width:50%">
  <h3 style = color:black>Nabila Shova</h3>
  <p style = color:black>Student</p>
  <p style = color:black>East West University</p>
  <div style="margin: 15px 0;">
    <a href="https://www.instagram.com/nb.shova/" target="_blank"><i class="fa fa-instagram"></i></a>  
    <a href="https://www.linkedin.com/in/nabila-b-shova/" target="_blank"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/nabila.shova" target="_blank"><i class="fa fa-facebook"></i></a>
     <a href="https://plus.google.com/u/0/+NabilaShova" target="_blank"><i class="fa fa-google-plus"></i></a> 
 </div>
      <p><button type="button" <a href="https://www.facebook.com/nabila.shova">Contact</a></button></p>
  </div>
      
  <div class="card1">   
  <img src="rifat.jpg" alt="Rifat" style="width:50%">
  <h3 style = color:black>Rifat Hossain</h3>
  <p style = color:black>Student</p>
  <p style = color:black>East West University</p>
  <div style="margin: 55px 0;">
    <a href="https://www.instagram.com/r1f4t_ahm3d/" target="_blank"><i class="fa fa-instagram"></i></a>  
    <a href="https://www.linkedin.com/in/rifat-hossain-76b752159/" target="_blank"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/rifat.hossain.313" target="_blank"><i class="fa fa-facebook"></i></a>
     <a href="https://plus.google.com/u/0/101980070453912591904" target="_blank"><i class="fa fa-google-plus"></i></a>
      
 </div>
      <p><button type="button" <a href="https://www.facebook.com/rifat.hossain.313">Contact</a></button></p>
</div>
      
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>All rights reserved. Project of CSE 411.</p> 
</footer>

</body>
</html>