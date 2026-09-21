<?php 

//Biblioteca de funciones

//compara palabras a y b. Si la longitud de a > b, devuelve 1, si a < b, devuelve -1, si son iguales devuelve 0

//comparaPalabras("hola", "adios"); //negativo
//comparaPalabras("adios", "hola"); //positivo
//comparaPalabras("adios", "holas"); //0

$a = "Troya";
$b = "Itaca";
function comparaPalabras(string $a, string $b): string{
    $longA = strlen($a);
    $longB = strlen($b);
    return 0;

}

//cuentaLetras: recibe la palabra a y la letra x. Cuenta cuantas letras ha en esa palabra.
//Si no se indica la letra, devuelve el numero de vocales
//Ej: cuentaLetras("Hola que tal , "l"); //2(hay 2 l)
//Ej: cuentaLetras("Hola que tal"); //2 (hay 2 a)









//Tampoco se pone el simbolo de cierre de PHP
