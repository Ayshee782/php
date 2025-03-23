<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="information save.php" method="post">
        <label>my profile</label><br><br>

        <label>First name</label><br>
        <input type="text" name="First name"><br>
        <label>Last name</label><br>
        <input type="text" name="Last name"><br>
        <label>Mobile number</label><br>
        <input type="text" name="Mobile number"><br>
        <input type="submit" value="save"><br><hr>
        <label>Email</label><br><br>
        <label>Email</label><br>
        <input type="text" name="Email"><br>
        <input type="submit" value="save"><br><hr>
        <label>Password</label><br>
        <input type="password"  name="Password"><br>
    </form>
    


</body>
</html>
<?php

echo"{$_POST["First name"]}";

?>