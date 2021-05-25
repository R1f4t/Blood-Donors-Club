<link href="Style.css" rel="stylesheet" type="text/css" />

<?php

$result = 0;
$conn = mysqli_connect("localhost", "root", "", "logintest");
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

?>

<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="586" height="110" class="tbl_form" align="center">
    <tr>      </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
    <tr>
      
      <td class="field">      Blood Group</td>
      <td class="field"></td>
      <td class="field"><select name="bgrp" size="1" id="select">
        <option>- - Select - -</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>
      </select></td>
      <td><input type="submit" name="button" id="button" value="Search" /></td>
    </tr>
    
    <tr>    </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
  </table>
  </form>
	<?php 


if(isset($_POST['button']))
{
$bgrp=$_POST["bgrp"];
//$city=$_POST["city"];

$sql="SELECT * FROM donor WHERE bloodgroup like '$bgrp' ORDER BY age";

$result=mysqli_query($conn, $sql);

	  while($row=mysqli_fetch_array($result)){
      echo '<div class="nw">';
      echo '<table><tr ><td width="350">Name</td>';
      echo '<td> '.$row['uname'].'</td>' ;
      echo '</tr>';
      echo '<tr><td>Gender</td>';
      echo '  <td>'.$row['gender'].'</td>' ;
      echo '</tr>';
      echo '<tr><td>Age</td>';
      echo ' <td> '.$row['age'] .'</td>';
      echo '</tr><tr><td>Weight</td>';
      echo ' <td> '.$row['weight'].'</td>' ;
      echo '</tr><tr><td>Blood Group</td>';
      echo '  <td>'.$row['bloodgroup'].'</td>' ;
      echo '</tr><tr><td>Address</td>';
      echo ' <td> '.$row['address'].'</td>' ;
      echo '</tr><tr><td>Last Donated Date</td>';
      echo ' <td> '.$row['ldd'].'</td>' ;
      echo '</tr><tr><td>Contact Number</td>';
      echo ' <td> '.$row['mob'] .'</td>';
      echo '</tr><tr><td>E-mail</td>';
      echo '  <td>'.$row['email'] .'</td>';
      echo '</tr>';
      echo '</table>';
      echo '</div>';
      echo '</br>';
    }
  


	mysqli_close($conn);
}
	  ?>
   
    
  </table>

</div>