<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch 1.php" method="post">

    <label>enter your grade </label>
    <input type="text" name="grade">
    <input type="submit" value="enter">



    </form>
    
</body>
</html>

<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

$grade = $_POST["grade"];

if ($grade < 0 || $grade> 100) {
    printf("Invalid inpu.\n");}
    else{
        $key= intdiv($grade,10);

switch($key){
    case 10:
    case 9:
        echo "A+";
        break;
    case 8:
        echo "A";
        break;
    case 7:
        echo "B";
        break;
    case 6:
        echo "C";
        break;
    case 5:
        echo "D";
        break;



    default:
    echo "try next time!! <br>😒";


}
}
//}

?>