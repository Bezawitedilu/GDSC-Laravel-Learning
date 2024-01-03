<?php

$servername = "localhost:3307";
$username="root";
$password="";
$dbname  = "gdscphp";

//to create a connection 

$conn = mysqli_connect("localhost:3307","root","","gdscphp");

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
echo "Connected Succesfully";