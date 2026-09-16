<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <p>La siguiente linea está hecha con PHP:</p>
    <?php
        
        echo "<p>hello world</p>";

    ?>
    <p>Esta linea tambien:</p>
    <p>
        <?php
            echo "hola mundo";
            echo "<br>";
            print "otra cosa";
            echo ("otra cosa");
            
            // VARIABLES:
            /* Comentario de varias lineas */
            //String:
            //String name = "aasfds";
            // $ para variable

            $name = "asdf";
            $surname = 'ruiz';

            echo "<br>";
            echo $name;
            //concatenar strings: (para concatenar utilizamos . )
            echo "<br>";
            echo $name . " " . $surname;

            echo "<br>";
            echo "$name --- $surname"; //Si interpreta las variables
            echo "<br>";
            echo '$name --- $surname'; //Asi no interpreta las variables
            echo "<br>";

            //numerica
            $age = 21;
            echo "<p>Tengo $age años</p>";
            var_dump($age);
            $age = 2.3;
            var_dump($age);
            $age = "23";
            var_dump($age);
            $age = null;
            var_dump($age);

            //CONSTANTE
            define("IVA_GENERAL", 0.21);
            const IVA_REDUCIDO = 0.08;
            $precio = 20.3;
            echo "<p>El IVA es: " . $precio * IVA_GENERAL . "</p>";
            echo "<p> EL precio con IVA es: " . $precio + $precio * IVA_GENERAL ."</p>";
            echo "<p> EL precio con IVA reducido es: " . $precio + $precio * IVA_REDUCIDO ."</p>";

            var_dump(PHP_VERSION);

            var_dump(__FILE__);

            $price = 29.3;

            //OPERADORES (nuevos)
            $a = 5;
            $b = $a **3;            //5 elevado a 10. (EXPONENTE)
            var_dump($b);

            $a = 7;
            $mod = $a % 2;  //1 (resto de la division entera)
            $a = 11;
            $mod = $a % 4; //3

            //Operadores de incremento
            $a = 1;
            $a++; //$a = $a + 1;
            $a +=4; //$a = $a + 4;

            

        ?>  
    </p>
</body>
</html>
