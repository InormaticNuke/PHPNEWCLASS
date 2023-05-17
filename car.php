<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>

<body>
    <?php

    include "classCar.php";
    $car = new car("Ferrari 488 Pista","Rosso Corsa", 890);
    echo $car -> showInfo();

    $car2 = new car("Lambo Sian","Verde mantis",1260);
    echo $car2-> showInfo();
    ?>
    
</body>

</html>