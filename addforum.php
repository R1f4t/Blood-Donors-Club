<?php 

$conn = mysqli_connect("localhost", "root", "", "logintest");
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

$name = $_POST['name'];
$contact = $_POST['contact'];
$subject = $_POST['subject'];
$post = $_POST['post'];

 /*$usercheck = $uname;
 $qry = "SELECT uname FROM user WHERE uname = '$usercheck'";
 $check = mysqli_query($conn, $qry) 

or die(mysqli_error());

 $check2 = mysqli_num_rows($check);*/


if ($name=="" or $contact=="" or $subject=="" or $post=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
/*elseif ($check2 != 0) {

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

 	}*/

else{
$sql="INSERT INTO forums (name, contact, subject, post)
VALUES
('$name','$contact','$subject','$post')";

 mysqli_query($conn, $sql);

 header( 'Location: test.php' ) ;
}
 mysqli_close($conn);
?>
