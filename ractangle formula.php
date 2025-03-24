<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ractabgle formula.php" method="post">
        <label>length:</label>
        <input type="text" name="length"><br>
        <label>width:</label>
        <input type="text" name="width"><br><hr>
        <input type="submit" value="calculate">


    </form><br>
    
</body>
</html>

<?php


$l=$_POST["length"];
$w=$_POST["width"];
$area=null;

$area= $w * $l ;
echo "area={$area}";

?>