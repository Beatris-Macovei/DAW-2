<h2>Ejercicio 3</h2>
<?php 

    function filterByType($type, $array){
        $elementos = [];
        foreach($array as $num){
            switch ($type) {
                case 'even':
                    if($num % 2 == 0){
                        $array[] = $num;
                    }
                    break;
                case 'odd':
                    if($num % 2 != 0){
                        $array[] = $num;
                    }
                    break;
                case 'prime':
                    $primo = true;
                    if($primo < 2){
                        $primo = false;
                    }else{
                        for ($i = 2; $i < $num; $i++) {
                            if ($num % $i == 0) {
                                $primo = false;
                                break;
                            }
                        }
                    }
                    if($primo){
                        $array[] = $num;
                    }

                    break;
                case 'positive':
                    if($num > 0){
                        $array[] = $num;
                    }
                    break;
                case 'negative':
                    if($num < 0){
                        $array[] = $num;
                    }
                    break;
            }
        }
    }

    function calculateStatistics($array){
        $media = array_sum($array)/count($array);

        $mediana = 0;
        $numeros = [];
        sort($numeros);
        if(count($numeros) > 0){
            $numeroMedio = floor(count($numeros)/2);  // el floor sirve para redondear un número hacia abajo al entero más cercano
            if(count($numeros) % 2 == 0){
                $mediana = ($array[$numeroMedio - 1] + $array[$numeroMedio]) / 2; //lista ya ordenada
            }else {
                $mediana = $array[$numeroMedio]; //si hay numeros impares directamente es el del medio
            }
        }

        $cuenta = array_count_values($numeros); //contar cuantas veces aparece cada numero 
        $repeticiones = max($cuenta); //numero que mas se repite

        $moda = array_keys($cuenta, $repeticiones); //el numero que mas se repite

        return [
            "media" => $media,
            "mediana" => $mediana,
            "moda" => $moda
        ];

    }

    function naalyzeWords($texto){
        $array = [];
        if(empty($array)){
            return ["number_of_words" => 0, "longest_word" => " ", "shortest_word" => " "];
        }

        $largo = $array[0];
        $corto = $array[0];

        foreach($array as $palabra){
            if($array > $largo){
                $largo = $palabra;
            }
            if($array > $corto){
                $corto = $palabra;
            }
        }
        return [
            "number_of_words" => count($array),
            "longest_word" => $largo,
            "shortest_word" => $corto
        ];
    }

    function convertTemperature($temperatura, $origen, $destino){
        $unidad = ["celsius", "fahrenheit", "kelvin"];
        if(!in_array($origen,$unidad) || !in_array($destino,$unidad)){ //para saber si existen las unidades que se piden
            return false;
        }
        switch ($origen) {
            case 'celsius':
                $celsius = $temperatura;
                break;
            case 'fahrenheit':
                $celsius = ($temperatura - 32) * 5 / 9;
                break;
            case 'kelvin':
                $celsius = $temperatura - 273.15;
                break;
        }
        switch ($destino) {
            case 'celsius':
                return $celsius;
            case 'fahrenheit':
                return ($celsius * 9 / 5) + 32;
            case 'kelvin':
                return $celsius + 273.15;
        }
    }

?>
