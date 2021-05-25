<?php
	//Start session
	session_start();
 
	//Include database connection details
$conn = mysqli_connect("localhost", "root", "", "logintest");
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		echo "str: ".$str;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['uname'];
	$password = $_POST['psw'];
 
	//Input Validations
	/*if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}*/
 
	//Create query
    //echo $username , $password ;
	$qry="SELECT * FROM donor WHERE uname='$username' AND psw='$password'";
	$result=mysqli_query($conn, $qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_USER_NAME'] = $member['uname'];
			$_SESSION['SESS_PASSWORD'] = $member['psw'];
            $_SESSION["username"] = $username;
            $_SESSION["logged"] = true;
			session_write_close();
			header("location: donor.php");
			exit();
		}else {
			//Login failed
			//$errmsg_arr[] = 'user name and password not found';
            $_SESSION["logged"] = false;
			$errflag = true;
			if($errflag) {
				//$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
                echo '<script type="text/javascript">'; 
                echo 'alert("Sorry, user name and password not found! ");'; 
                echo 'document.location.href = "index.php";';
                echo '</script>';
				//header("location: index.php");
				//exit();
			}
		}
	}else {
		die("Query failed");
	}
mysqli_close($conn);
?>