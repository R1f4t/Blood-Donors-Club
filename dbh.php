<?php


$conn = mysql_connect("localhost", "root", "", "logintest");

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}
?>