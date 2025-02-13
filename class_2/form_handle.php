<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $password = $_POST["password"];

    try{
        require_once ("dbConnect.php");
        
        $sql = "INSERT INTO users(username, email, telephone, password) VALUES(?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute([$username, $email, $telephone, $password]);

        $conn = null;
        $stmt = null;

        header("Location: welcome.php");

    }catch(PDOException $e){
        echo "Account failed to signup" . $e -> getMessage();
    }
}
else{
    header("Location: class_2.php");
}

?>