<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <code>
    <?php 
        //EJERCICIO 1
        $nombre = ord('B') - ord('A') + 1;
        $apellido = ord('M') - ord('A') + 1;

        $rows = $nombre % 8 + 4;
        $cols = $apellido % 6 + 5;

        var_dump($rows);
        var_dump($cols);

        echo "Primera figura<br>";
        for($i = 0; $i < $rows; $i++){
            for($j = 0; $j < $cols; $j++){
                echo "*&nbsp;";
            }
            echo "<br>";
        }    
        echo "<br> Segunda figura <br>";
        for($i = 0; $i < $rows; $i++){
            for($j = 0; $j < $cols; $j++){
                if($i == 0 || $i == $rows -1 || $j == 0 || $j == $cols -1){
                    echo "*&nbsp;";
                }else {
                    echo "&nbsp;&nbsp";
                }
            }
            echo "<br>";
        }

        echo "<br> Segunda figura <br>";
        for($i = 0; $i < $rows; $i++){
            for($j = 0; $j < $cols; $j++){
                if(($i + $j) % 2 == 0){
                    echo "*&nbsp;";
                }else {
                    echo "&nbsp;&nbsp";
                }
            }
            echo "<br>";
        }
    ?>
    <!--EJERCICIO 2-->
    <h1>Temperaturas de ciudades por día (ºC)</h1>
    <table border="1">
        <thead>
            <tr>
            <th>Ciudad/Dia</th>
            <?php 
            
                $dias = ["Dia 1", "Dia 2", "Dia 3", "Dia 4", "Dia 5", "Dia 6", "Dia 7"];
                foreach($dias as $dia){
                    echo "<th>$dia</th>";
                }
            ?>
            <th>Media</th>
            </tr>
        </thead>
    <?php

        $ciudades = ["Ciudad 1", "Ciudad 2", "Ciudad 3", "Ciudad 4", "Ciudad 5", "Ciudad 6"];
        $minimo = -10;
        $maximo = 45;


        $temperatura = [];

        foreach($ciudades as $i => $ciudad) {
            echo "<tr>";
            echo "<th>$ciudad</th>";     
            
            $suma = 0;
            for ($j = 0; $j < count($dias); $j++) { 
                $temperatura[$i][$j] = rand($minimo, $maximo);
                $suma += $temperatura[$i][$j];
                echo "<td>" . $temperatura[$i][$j] . "ºC</td>";
            }

            $media = $suma / count($dias);

            echo "<td>". number_format($media, 1) . "ºC</td>";
            echo "</tr>";
        }

    ?>
    </table>
    <h2>Estadísticas</h2>
    <?php 
    
        

    ?>
    </code>
</body>
</html>
