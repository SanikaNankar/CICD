<?php

//main connection file for both admin & front end
$servername = "foodpicky.c9uu00ug8h5o.us-east-1.rds.amazonaws.com"; //server
$username = "admin"; //username
$password = "admin123"; //password
$dbname = "foodpicky_db";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB   
    die("Connection failed: " . mysqli_connect_error());
}

?>