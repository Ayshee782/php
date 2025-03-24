<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circle formula.php" method="post">
        <label>radius:</label>
        <input type="text" name="radious"><br>
        <input type="submit" value="calculate">


    </form><br>
    
</body>
</html>

<?php
$radius = $_POST["radious"];
$circumference=null;
$circumference=2* pi() *$radius;
echo "circumference= {$circumference}cm<br>";
$circumference=round($circumference,2);
echo "circumference= {$circumference}cm<br>";

$area=null;
$area=pi() * pow($radius,2);
echo "area= {$area}cm^2<br>";
$area= round($area,2);
echo "area= {$area}cm^2<br>";

$volume=null;
$volume=4/3 * pi() * pow($radius,3);
echo "volume = {$volume} cm^3<br>";
$volume= round($volume,2);
echo "volume = {$volume} cm^3";

?>