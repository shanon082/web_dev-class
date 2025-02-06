<?php
$host = "localhost";
$username = "root";
$dbName = "users";
$password ="";

$conn = new mysqli($host,$username,$password,$dbName);

if($conn -> connect_error){
    die("failed to connect: ".$conn -> connect_error);
}

?>