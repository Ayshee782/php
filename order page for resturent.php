<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="order page for resturent.php" method="post">
        <label>quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">

    </form>
    

</body>
</html>
<?php 
$item="pizza";
$price=207;
$total= null;
$quantity= $_POST["quantity"];
$total= $quantity * $price;

echo "you have ordered {$quantity}x{$item} <br>";
echo"your total is:\${$total}";


?>