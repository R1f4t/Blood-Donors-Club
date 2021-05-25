<?php 

$conn = mysqli_connect("localhost", "root", "", "logintest");
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

$uname = $gender = $age = $weight = $bgrp = $adrs = $mob = $email = $psw = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$uname = test_input($_POST['uname']);
$gender = test_input($_POST['gender']);
$age = test_input($_POST['age']);
$weight = test_input($_POST['weight']);
$bgrp = test_input($_POST['bgrp']);
$adrs = test_input($_POST['adrs']);
$mob = test_input($_POST['mob']);
$email = test_input($_POST['email']);
$psw = test_input($_POST['psw']);
$ldd = test_input($_POST['ldd']);
}

 $usercheck = $uname;
 $qry = "SELECT uname FROM donor WHERE uname = '$usercheck'";
 $check = mysqli_query($conn, $qry) 

or die(mysqli_error());

 $check2 = mysqli_num_rows($check);


if ($uname=="" or $gender==""  or $age=="" or $weight==""  or $bgrp=="" or $adrs==""  or $mob=="" or $email=="" or $psw=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
elseif ($check2 != 0) {

 	//echo '<script type="text/javascript">alert("Sorry, the username '.$_POST['uname'].' is already in use.")</script>';
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Sorry, the username '.$_POST['uname'].' is already in use!");'; 
    echo 'document.location.href = "regdonor2.php";';
    echo '</script>';
    //header( 'Location: index.php' ) ;

 				}
elseif($_POST['psw'] != $_POST['cpsw']) {

 	//echo '<script type="text/javascript">alert("Your passwords did not match. ");</script>';
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Sorry, your passwords did not match! ");'; 
    echo 'document.location.href = "regdonor2.php";';
    echo '</script>';
    //die('Your passwords did not match. ');

 	}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo '<script type="text/javascript">'; 
     echo 'alert("Invalid E-mail Address! ");'; 
     echo 'document.location.href = "regdono2.php";';
     echo '</script>';
}

elseif($_POST['age'] <= 15 or $_POST['age'] >= 65) {

 	//echo '<script type="text/javascript">alert("Your passwords did not match. ");</script>';
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Sorry, you are underaged! ");'; 
    echo 'document.location.href = "regdonor2.php";';
    echo '</script>';
    //die('Your passwords did not match. ');
 	}

elseif($_POST['weight'] < 45) {

 	//echo '<script type="text/javascript">alert("Your passwords did not match. ");</script>';
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Sorry, you are underweight! ");'; 
    echo 'document.location.href = "regdonor2.php";';
    echo '</script>';
    //die('Your passwords did not match. ');
 	}

else{
$encpsw=md5($psw);
$sql="INSERT INTO donor (uname, gender, age, weight, bloodgroup, address, mob, email, psw, ldd)
VALUES
('$uname','$gender','$age','$weight','$bgrp','$adrs','$mob','$email','$encpsw','$ldd')";

 mysqli_query($conn, $sql);
    
 echo '<script type="text/javascript">';
 echo 'alert("Registered successfully. You can now login as a donor!");';
 echo 'document.location.href = "index.php";';
 echo '</script>';

 //echo "Registered successfully. Thank you!";
 //header( 'Location: regdonor2.php' ) ;
}
 mysqli_close($conn);
?>
