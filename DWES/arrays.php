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

    <h2>Arrays asociativos</h2>

    <?php
        $capitals = [
            "Ecuador" => "Quito",
            "España" => "Madrid",
            "Noruega" => "Oslo",
        ];

        echo("La capital de noruega es " . $capitals['Noruega']);
        echo("<br>");
        //echo("La capital de noruega es " . $capitals[2]); error
        echo count($capitals);
        // Elemento nuevo
        $capitals['Colombia'] = "Bogota";


        // Georgia - Tbilisi

        $capitals['Georgia'] = "Tbilisi";

        //Recorrer el array con foreach

        foreach($capitals as $capi){
            echo($capi);
        }

        //recorrer claves y valores 
        foreach($capitals as $country => $capi){
            echo "La capital de $country es $capi<br>";
        }

        //elimina un elemento de un array asociativo
        unset($capitals['Ecuador']);
        var_dump($capitals);

        if(isset($capitals['Ecuador'])){
            echo "La capital de Ecuador es " . $capitals['Ecuador'] . "<br>";

        }else {
            echo "No tengo la capital de Ecuador <br>";
        }

    ?>

    <h2>Funciones con arrays</h2>

    <?php 
    
        $notas = [9.0, 6.9, 7.5, 8.2];

        //suma de valores 
        $suma = array_sum($notas);
        //longitud
        $numerosDeNotas = count($notas);
        $media = $suma / $numerosDeNotas;
        //equivalente: $media = array_sum($notas) / count($notas);

        var_dump($media);

        //ordenar de menor a mayor
        sort($notas);
        var_dump($notas);
        //de mayor a menor
        rsort($notas);
        var_dump($notas);

        //resolver
        shuffle($notas);
        var_dump($notas);

        //nota mas alta:
        sort($notas);
        echo "La nota mas alta es: " . $notas[count($notas) - 1] . "<br>";

        //buscar
        var_dump(in_array(9.0, $notas));
        var_dump(in_array(9.01, $notas));

        //implode: separa cada elemento del array por un delimitador
        echo implode(", ", $notas);

        $nombres = "Juan#Alberto#Maria";
        $arrayNombres = explode("#", $nombres);
        var_dump($arrayNombres);

        //array asociativo
        //politicos y cargos
        $p = [
            "Pedro" => "Presidente",
            "Pilar" => "Educacion",
            "Oscar" => "Transporte",
            "Marlaska" => "Interior"
        ];
        var_dump($p);

        //sort($p); si hago esto en un asociativo, elimno las claves y lo convierto en indexado
        var_dump($p);

        //por valor ascendente
        asort($p);
        var_dump($p);
        //por valor descendientes (reverse):
        arsort($p);
        var_dump($p);

        //por clave ascendente:
        ksort($p);
        var_dump($p);
        //por clave descendente
        krsort($p);
        var_dump($p);

        //var_dump(implode("-", $p)); Imprime los valores, no las claves

        foreach($p as $k => $v){
            echo "$k<br>";
        }

        //funcion que me devuelve las claves de un array:
        $claves = array_keys($p);
        var_dump($claves);
        echo implode(", ", array_keys($p));

        //en que posicion esta un elemento:
        $resultado = array_search("Presidente", $p);
        var_dump($resultado);
    
    ?>

</body>
</html>
