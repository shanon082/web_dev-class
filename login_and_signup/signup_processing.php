<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["conf_password"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "wrong email format";
    } else {
        if ($password !== $confirmPassword) {
            echo "password doesnot match";
        } else {

            $sql = "INSERT INTO userdetails (username, email, password) VALUES ('$username', '$email', '$password');";
            if ($conn->query($sql) == true) {
                echo "account created successfully";
            } else {
                echo "error " . $conn->error;
            }
        }
    }
}
