<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "", "logintest");
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

$fname = $lname = $uname = $psw = $mob = $email = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$uname = test_input($_POST['uname']);
$psw = test_input($_POST['psw']);
$mob = test_input($_POST['mob']);
$email = test_input($_POST['email']);
}

 $usercheck = $uname;
 $qry = "SELECT uname FROM user WHERE uname = '$usercheck'";
 $check = mysqli_query($conn, $qry) 

or die(mysqli_error());

 $check2 = mysqli_num_rows($check);


if ($uname==""  or $psw=="" or $fname=="" or $lname=="" or $mob=="" or $email=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
elseif ($check2 != 0) {

 	//echo '<script type="text/javascript">alert("Sorry, the username '.$_POST['uname'].' is already in use.")</script>';
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Sorry, the username '.$_POST['uname'].' is already in use!");'; 
    echo 'document.location.href = "index.php";';
    echo '</script>';
    //header( 'Location: index.php' ) ;

 				}
elseif($_POST['psw'] != $_POST['cpsw']) {

 	//echo '<script type="text/javascript">alert("Your passwords did not match. ");</script>';
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Sorry, your passwords did not match! ");'; 
    echo 'document.location.href = "index.php";';
    echo '</script>';
    //die('Your passwords did not match. ');

 	}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo '<script type="text/javascript">'; 
     echo 'alert("Invalid E-mail Address! ");'; 
     echo 'document.location.href = "index.php";';
     echo '</script>';
}

else{
$encpsw=md5($psw);
$sql="INSERT INTO user (fname, lname, uname, mob, email, psw)
VALUES
('$fname','$lname','$uname','$mob','$email','$encpsw')";

 mysqli_query($conn, $sql);
    
 echo '<script type="text/javascript">';
 echo 'alert("Signed up successfully. You can now login as a member!");';
 echo 'document.location.href = "index.php";';
 echo '</script>';

 //echo "Your message has been received";
 //header( 'Location: index.php' ) ;

 }
 mysqli_close($conn);
?>
