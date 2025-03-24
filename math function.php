<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math function.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br> <hr>
        <input type="submit" value="total">  
    </form>
    
</body>
</html>

<?php
$x=$_POST["x"];
$y=$_POST["y"];
$z=$_POST["z"];
$total=null;

$total=abs($x);
$total_1=round($y);
$total_2=floor($y);
$total_3=ceil($y);
$total_4=sqrt($z);
$total_5=pow($x,$z);
$total_6=max($x,$y,$z);
$total_7=min($x,$y,$z);
$total_8=rand();
$total_9=rand(1,100);
$pi= pi();


echo "the absulat number for x = {$total}<br>";
echo "the round number for y = {$total_1}<br>";
echo "the floor number for y = {$total_2}<br>";
echo "the ceiling number for y = {$total_3}<br>";
echo "the squer root number for z = {$total_4}<br>";
echo "the power of x is = {$total_5}<br>";
echo "the  max number is = {$total_6}<br>";
echo "the min number is = {$total_7}<br>";
echo "the random number is = {$total_8}<br>";
echo "the random number between 1-100 = {$total_9}<br>";
echo "the pi number is = {$pi}<br>";
?>