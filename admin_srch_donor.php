
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<link href="Style.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php

$conn = mysqli_connect("localhost", "root", "", "logintest");
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM donor   ";
 $result=mysqli_query($conn, $sql);
 
?>

	<?php 
	  while($row=mysqli_fetch_array($result))
	  {
	 
  echo '<div class="nw">';
 
	echo '<table><tr ><td width="350"> User Name</td>';
	  echo '<td> '.$row['uname'].'</td>' ;
	echo '</tr>';
	echo '<tr><td>Age</td>';
	  echo '  <td>'.$row['age'].'</td>' ;
	  echo '</tr>';
	  echo '<tr><td>Gender</td>';
	   echo ' <td> '.$row['gender'] .'</td>';
	  echo '</tr><tr><td>Blood Group</td>';
	  echo ' <td> '.$row['bloodgroup'].'</td>' ;
	  echo '</tr>';
	  echo '<tr><td>Location</td>';
	  echo ' <td> '.$row['address'] .'</td>';
	  echo '</tr>';
      echo '<tr><td>Last Donated Date</td>';
	  echo ' <td> '.$row['ldd'] .'</td>';
	  echo '</tr>';
	  echo '<tr><td>Contact Number</td>';
	  echo '  <td>'.$row['mob'].'</td>' ;
	  echo '</tr><tr><td>E-Mail</td>';
	  echo '  <td>'.$row['email'].'</td>' ;
	  echo '</tr>'; 
	  echo '</table>';
    echo '</div>';
	echo '</br>';
	}
	
	mysqli_close($conn);
	
	  ?>
   
    
  