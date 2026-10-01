<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php 
    
        $students = [
            ["nombre" => "Ana García", "matematicas" => 8.5, "historia" => 7.0, "programacion" => 9.0],
            ["nombre" => "Luis Martínez", "matematicas" => 6.0, "historia" => 8.5, "programacion" => 7.5],
            ["nombre" => "Marta Rodríguez", "matematicas" => 9.0, "historia" => 6.5, "programacion" => 8.0],
            ["nombre" => "Carlos López", "matematicas" => 7.5, "historia" => 9.0, "programacion" => 6.5],
            ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "programacion" => 9.5]
        ]; 

        //Tabla con nombre y nota de matematicas
        //Si la nota es >= 8: que la celda salga en verde
        //y si nota>=9 que la letra este en negrita

    ?>

    <table border="1">
        <thead>
            <!-- tr>th*2-->
            <th>Nombre</th>
            <th>Matematicas</th>
            <th>Historia</th>
        </thead>
        <tbody>
            <?php 
            foreach($students as $student) :
            ?>

                <tr>
                    <td>
                        <?=  //el <?= es como poner <?php y el = es echo(...)
                             $student['nombre']
                        ?>
                    </td>
                    <td class="
                        <?php 
                            if($student['matematicas'] >= 8){
                                echo "green";
                            }else{
                                echo '" "'; 
                            }
                            if($student['matematicas'] >= 9){
                                echo " negrita";
                            }
                        ?>
                    ">
                        <?= $student['matematicas'] ?>
                    </td>
                    <!--Mismo codigo que el de matematicas pero mas reducido-->
                    <td class="<?= $student['historia'] >= 8 ? "greenHist" : "" ?>
                        <?= $student['historia'] >= 9 ? "negrita" : "" ?>
                    ">
                        <?= $student['historia'] ?>
                    </td>
                </tr>

            <?php
            endforeach;
            ?>
            <?php 
            
                foreach($students as $student){
                    $suma = $student['matematicas'] + $student['historia'] + $student['programacion'];
                    $student ['promedio'] = round($suma / 3,2);
                }

                $estudianteBueno = $students[0];

                $aprobados = ["matematicas" => 0, "historia" => 0, "programacion" => 0];
                foreach ($students as $s) {
                    if ($s['matematicas'] >= 7) $aprobados['matematicas']++;
                    if ($s['historia'] >= 7) $aprobados['historia']++;
                    if ($s['programacion'] >= 7) $aprobados['programacion']++;
                }

                $notaMaxima = [
                    "matematicas" => max(array_column($students, 'matematicas')),
                    "historia" => max(array_column($students, 'historia')),
                    "programacion" => max(array_column($students, 'programacion'))
                ];

                usort($students, function($a, $b){
                    return $b['promedio'] <=> $a['promedio'];
                });


            ?>
        </tbody>
    </table>

</body>
</html>
