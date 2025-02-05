<?php

$host = "localhost";
$username = "root";
$dbname = "reg_form";
$password = "";

$myconn = new mysqli($host, $username, $password, $dbname);

if($myconn -> connect_error){
    die( "connection failed: ". $myconn -> connect_error);
}

    //  echo "connected successfully";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $university = $_POST["university"];
    $skills = $_POST["skills"];

    $skill = "";
    foreach($skills as $skill_1){
        $skill .= $skill_1.",";
    }

    $query = "INSERT INTO users(first_name, last_name, email, gender, university, skills) 
    VALUES ('$firstName', '$lastName', '$email', '$gender', '$university', '$skill')";

    if($myconn -> query($query) === true){
        echo "data inserted in successfully";
    }
    else{
        echo "failed to insert data" .$myconn -> error;
    }
}

?>