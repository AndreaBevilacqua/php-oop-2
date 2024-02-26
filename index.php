<?php

require_once __DIR__ '/Food.php';
require_once __DIR__ '/Game.php';
require_once __DIR__ '/Accessory.php';
require_once __DIR__ '/Product.php';

$type = array("Cane", "Gatto", "Uccello", "Pesce");

$product1 = new Food("Croccantini", 12.99, "Cane");
$product2 = new Game("Gomitolo", 9.99, "Gatto");
$product3 = new Accessory("Cibo per pesci", 8.99, "Pesce");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    
</body>
</html>

