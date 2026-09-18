<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Funciones</h1>
    <?php 

        //funcion que reciba un array de notas y devuelve la cantidad de personas aprobadas
        //public int aprobadas(notas[]){}
        function aprobadas($notas):int{
            $apr = 0;
            foreach($notas as $n){
                if($n >= 5){
                    $apr++;
                }
            }
            return $apr;
        }

        echo aprobadas([9.0, 4, 2, 9])
    
    ?>
</body>
</html>
