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

        echo "Primera figura";
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
    </code>
</body>
</html>
