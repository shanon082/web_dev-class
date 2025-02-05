<?php

$host = "localhost";
$username = "root";
$dbname = "reg_form";
$password = "";

$myconn = new mysqli($host, $username, $password, $dbname);

if($myconn -> connect_error){
    die( "connection failed: ". $myconn -> connect_error);
}

     echo "connected successfully";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $POST["fname"];
    $lastName = $POST["lname"];
    $email = $POST["email"];
    $gender = $POST["gender"];
    $university = $POST["university"];
    $skills = $POST["skills"];

    $query = "INSERT INTO users(first_name, last_name, email, gender, university, skills) VALUES ($firstName, $lastName, $email, $gender, $university,$skills)";

    if($myconn -> query($query) === true){
        echo "data inserted in successfully";
    }
    else{
        echo "failed to insert data" .$myconn -> error;
    }
}

?>