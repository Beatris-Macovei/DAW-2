<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1</title>
    <link rel="stylesheet" href="stylesprac/prac1BM.css">
</head>
<body>
    <code>
    <?php 
        echo "<h2>Ejercicio 1</h2>";
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
    <h2>Ejercicio 2</h2>
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
        <tbody>
            <?php

                $ciudades = ["Ciudad 1", "Ciudad 2", "Ciudad 3", "Ciudad 4", "Ciudad 5", "Ciudad 6"];
                $minimo = 1000;
                $maximo = -45;
                $ciudadMin;
                $diaMin;
                $ciudadMax;
                $diaMax;


                $temperatura = [];
                $media = [];

                foreach($ciudades as $i => $ciudad) {
                    $suma = 0;
                    for ($j = 0; $j < count($dias); $j++) { 
                        $temperatura[$i][$j] = rand(-10, 45);

                        if($temperatura[$i][$j] <= $minimo){
                            $minimo = $temperatura[$i][$j];
                            $ciudadMin = $ciudad;
                            $diaMin = $dias[$j];
                        }
                        if($temperatura[$i][$j] >= $maximo){
                            $maximo = $temperatura[$i][$j];
                            $ciudadMax = $ciudad;       
                            $diaMax = $dias[$j];
                        }

                        $suma += $temperatura[$i][$j];
                    }

                    $media[$i] = $suma / count($dias);

                }

                foreach($ciudades as $i => $ciudad){
                    echo '<tr class="' . (($media[$i] == max($media)) ? 'media-maxima' : '') . '">';
                    echo "<th>$ciudad</th>";     
                    
                    for ($j = 0; $j < count($dias); $j++) { 
                        $colores = "";

                        if($temperatura[$i][$j] < 0) $colores = "azulito";
                        if($temperatura[$i][$j] > 35) $colores = "rojito";
                        if($temperatura[$i][$j] == $minimo) $colores = "min";
                        if($temperatura[$i][$j] == $maximo) $colores = "max";
                        if($j >= 5) $colores ="finde";

                        echo '<td class="' . $colores . '">' . $temperatura[$i][$j] . 'ºC</td>';
                        
                    }
                    
                    echo '<td class="media">' . number_format($media[$i], 1) . 'ºC</td>';
                    echo "</tr>";
                }
                        
                
                $variacion = 0;
                $diaVar;

                for($j = 0; $j < count($dias); $j++){
                    $temperaturasDias = [];
                    for($i = 0; $i < count($ciudades); $i++){
                        $temperaturasDias[] = $temperatura[$i][$j];
                    }

                    $var = max($temperaturasDias) - min($temperaturasDias);
                    if($var > $variacion){
                        $variacion = $var;
                        $diaVar = $dias[$j];
                    }
                }



            ?>
        </tbody>
    </table>
    <h2 class="h2-est">Estadísticas</h2>
    <?php 
    
        echo "Temperatura minima: " . $minimo . "ºC (" . $ciudadMin . " ," . $diaMin . ")<br>";
        echo "Temperatura maxima: " . $maximo . "ºC (" . $ciudadMax . " ," . $diaMax . ")<br>";
        echo "Dia con mayor variacion: " . $diaVar . "(" . $variacion . "ºC de diferencia)"
    ?>

    <h2>Ejercicio 3</h2>
    </code>
</body>
</html>
