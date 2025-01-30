<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    
    <?php
    //this is a comment in php
    #also a comment
    echo " this is php class";
    ?>

<h1>hello <?php echo "world"; ?></h1>
<p>this is all about php <?php echo "Let's do this"; ?></p>

<?php

$name = "shanon";
echo $name;

$fullName = "shanon cymon";
$fullName_01 = "Kato angola";
$fullName_02 = "Manager winnie";
$x = "2000";


echo $fullName ."<br>";
echo $fullName_01 ."<br>";
echo $fullName_02 ."<br>";
echo $x ."<br><br>";

$int = 12232;
$float = 3.6473;
$string = "cymon";
$bool = true;

echo $string ."<br>";
echo $bool ."<br>";
echo $int ."<br>";
echo $float ."<br><br>";

#============arrays==============
$names = ["soroti","kyabongo","ndejje"];

$fruits = array('apple','mango','oranges');
echo implode(',',$fruits);
echo "<br>".$fruits[2];


$x = 5;
$y = 6.4;
$z = "peter";

echo "<br>". $x + $y ."<br>";

var_dump($x);
var_dump($y);
var_dump($z);
var_dump(true);
var_dump([2,3,4]);
var_dump(null);
echo "<br>";
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
?>

<a href="form.php">Press for form handling</a>

</body>

</html>