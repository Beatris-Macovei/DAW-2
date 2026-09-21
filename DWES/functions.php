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

        echo aprobadas([9.0, 4, 2, 9]);
        //echo aprobadas("hola);

        echo "<br>";
        //funcion que reciba dos strings y devuelva la concatenacion de dos

        $palabraUno = "hola";
        $palabraDos = "adios";
        function concatenar(string $palabraUno, string $palabraDos):string{

            $concatenado = $palabraUno . $palabraDos;

            return $concatenado;

        }

        echo concatenar($palabraUno, $palabraDos);

        //parametros con valores por defecto
        //saludar: si recibe un parametro (el nombre: XXXX), que devuelva "Hola, XXXXX";
        //         si recibe dos parametros (nombre: XXXX y saludo: YYYY), que devuelva "YYYY, XXXX"

        function saludar($nombre, $saludo = "Hola"): string{
            return "$saludo, $nombre";
        }

        echo "<br>";
        echo saludar("Juan");  //Hola, Juan
        echo "<br>";
        echo saludar("Juan", "Buenos dias"); //Buenos dias, Juan

        //funcion que reciba un array de numeros, y un segundo parametro de tipo bool
        //si es true, que lo devuelva ordenado de mayor a menor
        //si es false o no existe, que devuelva ordenado de menor a mayor

        $numeros = [1, 5, 7, 3];
        $bool = false;
        function ordenar($array, $bool){
            if($bool = true){
                
            }
        }

        //MANERA DEL PROFE

        //function ordenar($num, ord){
            //if($ord){
            //  rsort($nums);
            //}else{
            //  asort($nums);
            //}
            //return $nums;
            
        //}
        //var_dump(ordenar([2,5,1], true));
        //var_dump(ordenar([2,5,1], true));
        //var_dump(ordenar([2,5,1]));
        //echo ordenar([2,5,1], true);

        echo "<br>";

        //ademas de lo de antes, si hay un tercer parametro, que sea el separador
        function saludos($nombre, $saludo = "Hola", $separador = ", "): string{
            return "$saludo$separador$nombre";
        }
        echo saludos("Juana", "Adios", "-"); //Adios-Juana

        //funcion que recibe una cantidad indeterminada de numeros y devuelve la suma de todos ellos
        echo"<br>";
        suma(1, 2, 3);
        echo"<br>";
        suma(1,2,3,8,32);
        echo"<br>";
        echo suma(32);

        function suma(...$nums){
            //Aqui dentro $nums es un array que contiene todos los parametros 
            return array_sum($nums);
        }

        //echo suma([1,2,3]); //Error: son varios parametros, no un array

        
    
    ?>
</body>
</html>
