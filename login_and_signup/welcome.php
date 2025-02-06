<?php
session_start();

if(!isset($_SESSION['user'])){
header("location: login.php");
die();
}
$user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome <?php echo $user; ?></h1>
</body>
</html>