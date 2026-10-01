
<table border="1">
            <tr>
                <th>a</th>
                <th>b</th>
                <th>resultado</th>
            </tr>

            <?php

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            for($i = 0; $i < 11; $i++){
                $number = 7;
                $total = $number * $i;
                echo "<tr><td>" . $number . "</td>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $total . "</td></tr>";
            }
            
            ?>

</table>
<br>
<?php
$n = 20;
$cal = [0, 1];

for ($i = 2; $i < $n; $i++) {
    $cal[$i]= $cal[$i - 1] + $cal[$i - 2];
    echo $cal[$i] . "<br>";
}

?>
<br>
<?php 
    $rows = 3;
    $columns = 5;
    $matriz = [];
    
    for($i = 0; $i < $rows; $i++){
        for($j = 0; $j < $columns; $j++){
            $matriz[$i][$j] = "*";
        }
    }
    for($i = 0; $i < count($matriz); $i++){
        for($j = 0; $j < count($matriz[$i]); $j++){
            echo $matriz[$i][$j] . " ";
        }
        echo "<br>";
    }
?>

<br>
<?php 

    $number = 5;
    for($i = 0; $i <= $number; $i++){
        
        for($j = 0; $j <= $i; $j++){
            echo $j . " ";
        }
        echo "<br>";
    }

?>

<br>
<p>
<?php 

    $random = [];
    for($i = 0; $i < 20; $i++){
        $random[$i] = random_int(10, 50);
        echo $random[$i] . ", ";        
    }

    $suma = array_sum($random);
    $media = $suma / count($random);
    $maximo = max($random);
    $minimo = min($random);
    
?>
</p>

<ul>
    <li>Suma de todos los elementos: <?php echo $suma; ?></li>
    <li>Media aritmetica: <?php echo $media; ?></li>
    <li>Maximo: <?php echo $maximo; ?></li>
    <li>Minimo: <?php echo $minimo; ?></li>
</ul>

