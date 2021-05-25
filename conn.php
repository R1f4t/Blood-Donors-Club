<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logintest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

/* Create database
$sql = "CREATE DATABASE Blood_Donators_Network";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/


/* sql to create table
$sql = "CREATE TABLE Donors (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
username VARCHAR(20) NOT NULL,
password VARCHAR(10) NOT NULL,
gender VARCHAR(10) NOT NULL,
weight int(4) NOT NULL,
age int(3) NOT NULL,
blood_group VARCHAR(5) NOT NULL,
address VARCHAR(60) NOT NULL,
mobile_number VARCHAR(12) NOT NULL,
email VARCHAR(50),
last_date_of_donation DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Donors created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

$conn->close();


?>
