<?php
include ('db.php');
session_start();
unset($_SESSION["error"]);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $error = "";
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM userdetails WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);

    if($row > 0){
        // echo "login successfully";
        // $_SESSION['username'] = $userdetails['username'];
        header("Location: Welcome.php");
    }else{
        // echo "failed:" .$conn ->error;
        $_SESSION["error"] = "incorrect email or password";
        header("Location: login.php");
    }
}

?>