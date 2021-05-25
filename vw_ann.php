<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php

$conn = mysqli_connect("localhost", "root", "", "logintest");
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM announcement";
 $result=mysqli_query($conn, $sql);
 
?>

	<?php 
	  while($row=mysqli_fetch_array($result))
	  {
	 
  echo '<div class="nw">';
 
	echo '<table cellspacing="10"><tr><td>Subject: </td>';
	  echo '     <td>  '.$row['annsubject'].'</td>' ;
	  echo '</tr><tr><td>Post: </td>';
	  echo '     <td>  '.$row['annpost'].'</td>' ;
	  echo '</tr>'; 
	  echo '</table>';
    echo '</div>';
	echo '</br>';
	}
	
	mysqli_close($conn);
	
	  ?>
   
    
  