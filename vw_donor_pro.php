<?php 
session_start();

// connects to the database
$mysqli = new mysqli("localhost", "root", "", "logintest");
$username = $_POST['username'];
$_SESSION["username"] = $username;
$query = "SELECT * FROM donor WHERE uname = '".$_SESSION['username']."'";
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        echo "<div align=\"center\">";
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
        echo "<b>First name:</b> ". $row['uname'];
        echo "<br /><b>Last name:</b> ".$row['age'];
        echo "<br /><b>Program:</b> ".$row['weight'];
        echo "<br /><b>Year:</b> ".$row['bgrp'];
        echo "<br /><b>Gender:</b> ".$row['gender'];
        echo "</div>";   
    }
    $result->free();
}
else
{
    echo "No results found";
}
?>