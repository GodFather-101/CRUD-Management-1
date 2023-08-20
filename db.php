<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// Create connection
$con = new mysqli($servername, $username, $password,$database);

// Check connection
if (!$con) {
  die(mysqli_error($con));
};

?>