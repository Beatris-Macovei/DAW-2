<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exTables</title>
    <link rel="stylesheet" href="./styles/exTablesStyle.css">
</head>
<body>
    <table border="1" align="center">
        <thead>
            <tr>
                <th class="cielo">X</th>
                <?php 
                for ($j = 0; $j <= 9; $j++) {
                    echo "<th class='green'>$j</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($i = 0; $i <= 9; $i++) {
                echo "<tr>";

                echo "<th class='greenyellow'>$i</th>";

                for ($j = 0; $j <= 9; $j++) {
                    $resultado = $i * $j;
                    echo "<td>$resultado</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
