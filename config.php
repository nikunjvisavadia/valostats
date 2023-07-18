<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "valostats";

//Try connection to the databse
$conn = mysqli_connect($server, $username, $password, $database);

//Check connection 
if($conn == false)
{
    die('Error: Cannot connect');
}

?>