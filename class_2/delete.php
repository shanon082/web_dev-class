<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try{

        require_once "dbConnect.php";
        $sql = "DELETE FROM users WHERE username = :username AND password = :password";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam("username", $username);
        $stmt->bindParam("password",$password);

        $stmt->execute();

        $stmt = null;
        $conn = null;

        header("Location: update_delete_form.php");
        die();

    }catch(PDOException $e){
        echo "Failed to Delete ".$e ->getMessage();
    }
}else{
    header("Location: class_2.php");
}

?>