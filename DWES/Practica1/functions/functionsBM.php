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
        $numeros = [];

        foreach($array as $num){
            $media = suma($num) / count($numeros);
            sort($numeros);
        }

    }

    

?>
