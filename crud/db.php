<?php
$servername = "db";
$username = "roy_capp1";
$password = "260400";
$dbname = "roy_capp1";

// Creating connection
$connection = new mysqli ($servername, $username, $password, $dbname);

// Checking the connection
if ($connection -> connect_error){
    die("connection failed:".$connection->connect_error);

}
?>