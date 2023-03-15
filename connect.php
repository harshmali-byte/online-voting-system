<?php

// include the database configuration file
//   include('connect.php');

// attempt to connect to the database
$con = mysqli_connect("localhost","root","","votingsystem");

// check if the connection was successful
if(!$con){
    // display a user-friendly error message
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


?>
