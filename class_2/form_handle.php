<?php
$dbconn = "mysql:host=localhost;dbname=classweb";
$dbusername = "root";
$dbpassword = "";

try{
    $conn = new PDO($dbconn,$dbusername,$dbpassword);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed" .$e -> getMessage();
}

?>