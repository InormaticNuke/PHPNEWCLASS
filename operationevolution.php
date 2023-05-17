<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operation</title>
</head>
<body>

    <form action="operationevolution.php" method="POST">

    <input type="text" name="Value1" id="001">
    <br>
    <input type="text" name="Value2" id="002">
    <br>
    <input type="submit" value="calc">

    </form>
    
</body>
</html>

<?php

$value1 = $_POST["Value1"];
$value2 = $_POST["Value2"];

class operation{

    function add($Value1,$Value2){

        $total = $Value1+$Value2;
        echo "the numbers added together equals to ".$total;
    }

}

if ($_POST){

    $a = new operation();
    $a->add($value1,$value2);

}



?>