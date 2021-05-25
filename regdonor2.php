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
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Blood Donor's Network</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("login.jpeg");
  background-size: cover;
}


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #CF000F;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.button1 {
    position: absolute;
    top: 45%;
    left: 40%;
    border-radius: 5px;
}

.button2 {
    position: absolute;
    top: 48%;
    left: 40%;
    border-radius: 5px;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 15%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
     font-color: #CF000F;
}

</style>
</head>
<body>

<!--<nav class="navbar navbar-inverse">-->
<ul><li><a href="test.php" style="text-align: center; font-size:30px;">Blood Donor's Network</a></li></ul>
  
<!--</nav>-->

<button class="button button2" onclick="document.getElementById('id02').style.display='block'" style="width:300px;">Donor Registration</button>


<div id="id02" class="modal">
  
  <form class="modal-content animate" action="adddonor.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.svg" alt="LgImg" class="avatar">
    </div>

    <div class="container">
      <label for="fname"><b>User Name</b></label>
      <input type="text" placeholder="Enter User Name" name="uname" required>

      <label for="gender"><b>Gender</b></label><br>
      <input type="radio" name="gender" value="male" required> Male
      <input type="radio" name="gender" value="female" required> Female<br><br>

      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>

      <label for="weight"><b>Weight</b></label>
      <input type="text" placeholder="Enter Weight" name="weight" required>

      <label for="bgrp"><b>Blood Group</b></label>
      <input type="text" placeholder="Enter Blood Group" name="bgrp" required>

      <label for="adrs"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="adrs" required>

      <label for="mob"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Mobile Number" name="mob" required>

      <label for="email"><b>E-mail</b></label>
      <input type="text" placeholder="Enter E-mail" name="email" required>
        
      <label for="ldd"><b>Last Donated Date</b></label>
      <input type="text" placeholder="YY-MM-DD" name="ldd" required>
      
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="cpsw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Password Again" name="cpsw" required>
        
      <button type="submit" <a href="regdoner2.php">Register</a></button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
