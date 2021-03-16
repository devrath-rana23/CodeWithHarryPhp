<?php
/*Script to connect to the database */
$server = "localhost";
$database = "idiscuss";
$username = "root";
$password = "root";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die(mysqli_connect_error("ERROR ".$conn));
}
?>