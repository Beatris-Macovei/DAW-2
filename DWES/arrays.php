<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Arrays</h1>

    <?php
        $cars = array("Seat", "Audi", "BMW");
        $food = ["tomatoes", "avocados", "carrots"];

        //quiero añadir otra comida: berenjena
        $food[3] = "eggplants"; 

        //quiero añadir calabacin

        $food[] = "zucchini";

    ?>

</body>
</html>
