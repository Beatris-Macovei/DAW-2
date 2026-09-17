<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales y bucles</title>
</head>
<body>
    <h2>Condicionales</h2>
    <?php
        //Si la edad es menor a 18 que muestre "eres menor de edad" y si no "eres mayor de edad"
        $age = 17;
        if($age >= 18) {
            echo "Eres mayor de edad";
        } else {
            echo "Eres menor de edad";
        }

        echo "<br>";

        //Ternario: (comparacion) ? true : false

        /*switch: si $dia = 1 entonces lunes,
                    $dia = 2 entonces martes,
                    $dia = 3 entonces miercoles,
                    si no, que diga "otros"
                    */

        $dia = 1;

        switch($dia) {
            case 1 : echo ("lunes");
                break;
            case 2 : echo ("martes");
                break;
            case 3 : echo ("miercoles");
                break;
            default:
                echo ("otros");
        }

        echo "<hr>";
        $dia = 3;

        match ($dia) {
            1 => "lunes", 
            2 => "martes",
            3 => "miercoles",
            default => "otro"
        };
        echo "<hr>";

    ?>

    <h2>bucles</h2>

    <?php 
       //haz un bucle del 1 al 10 que imprima los numeros separtados por comas.
       //1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
       //for (declaracion e inicializacion; condicion; incremento)

        for($i = 1; $i <= 10; $i++){
            echo "$i, ";
        }

        //Cada bloque for puede tener varias operaciones:
            for ($i = 1, $x = 9; $i <= 10; $i++, $x-=3) {
                echo "$i / $x";
                if($i < 10) {
                    echo ", ";
                }
            }

        //recorre del 1 al 100 e imprime solamente los numeros multiplos de 5 y de 7
        for($i=1; $i <= 100; $i++){
            if($i % 5 == 0 or $i % 7 == 0){
                echo "$i, ";
            }
        }

        //traduce el for de arriba en un while
        //while (condicion){...}

        while($i <= 100) {
            if($i % 5 == 0 or $i % 7 == 0) {
                echo "$i, ";
            }
            $i++;
        }

    ?>

</body>
</html>
