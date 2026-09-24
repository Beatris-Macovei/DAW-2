<?php 
    include "./infoArrays/restaurants.php";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 2</title>
</head>
<body>
    <h1>Array de restaurantes</h1>
    <p>La direccion de Carpaccio es:
    <?php 
        echo $pinoccio[0]["address"];
    ?>
    </p>
    <p>El numero de camareros de Luigi es: 
        <?php
            echo $pinoccio[1]['employees'][1];
        ?>
    </p>
    <p>El numero de bebeidas de Carpaccio es: 
        <?php
            echo $pinoccio[0]['quantity']['drinks'];
        ?>
    </p>
    <p>El numero de los tres restaurantes obtenidos con un bucle es: 
        <?php 
            foreach($pinoccio as $pino){
            echo($pino['name']) . "<br>";
        }
        ?>
    </p>
    <p>El numero EN LISTA de los tres restaurantes obtenidos con un bucle es: 
        <ul>
            <?php 
                foreach($pinoccio as $pino){
                echo "<li>" . ($pino['name']) . "</li><br>";
            }
            ?>
        </ul>
    </p>
    <p>Los empleados de ambos restaurantes: 
        <br>
        <?php 
        /*Quiero que salga algo como esto (BUCLE)
        Carpaccio: 4, 7, 2
        Luigi: 2, 6, 1
        */
        
        foreach($pinoccio as $pin){
            //imprimo el nombre de restaurante
            
            echo ($pin['name'] . ": ");
            //imprimo el array de numeros employees
            if(isset($pin['employees'])){
                /*foreach($pin['employees'] as $e){
                    echo "$e, ";
                }*/
                echo implode(", ", $pin['employees']);
            } else{
                echo "No hay empleados";
            }
            echo "<br>";
        }

        ?>
    </p>
    <p>luego una table de HTML
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Cocina</th>
                <th>Camarero</th>
                <th>Otros</th>
            </tr>
            <?php 
                foreach($pinoccio as $p){
                    echo "<tr><td>" . $p['name'] . "</td>";
                    if(isset($p['employees'])){
                        foreach($p['employees'] as $em){
                            echo "<td>" . $em . "</td>";
                        }
                    } else{
                        echo "<td>" . "-" . "</td>";
                        echo "<td>" . "-" . "</td>";
                        echo "<td>" . "-" . "</td>";
                    }
                    
                    echo "</tr>";
                }

                    

            ?>
        </table>
        <?php

        //funcion que reciba un array asociativo, e imprima en una tabla las claves y
                //  el tipo del valor que tiene.
                //por ejemplo:
                /*
                    clave     | tipo
                    name      | string
                    address   | string
                    employees | array
                    quanty    | array
                */

        function clavesYtipos($array) : string {
            $ret = '<table border="1">'; //$ret = "<table border=\"1\">";
            $ret .= "<tr>
            <th>Nombre</th>
            <th>Tipo</th></tr>";
            foreach($array as $restaurant){
                foreach($restaurant as $key => $value){
                    $ret .= "<tr>
                    <td>$key</td>
                    <td>" . gettype($value) . "</td>
                    </tr>";
                }
            }
            $ret .= "</table>"; //$ret = $ret . "</table>";
            return $ret;
        }
        echo clavesYtipos($p);

        ?>
    </p>

</body>
</html>
