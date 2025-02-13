<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $password = $_POST["password"];

    try{
        require_once ("dbConnect.php");
        
        $sql = "UPDATE users SET username = :username, email = :email, telephone = :telephone, password = :password WHERE id = 3";
        $stmt = $conn -> prepare($sql);

        $stmt -> bindParam("username", $username);
        $stmt-> bindParam("email",$email);
        $stmt->bindParam("telephone",$telephone);
        $stmt->bindParam("password",$password);

        $stmt -> execute();

        $conn = null;
        $stmt = null;

        header("Location: class_2.php");

    }catch(PDOException $e){
        echo "Account failed to update" . $e -> getMessage();
    }
}
else{
    header("Location: class_2.php");
}

?>