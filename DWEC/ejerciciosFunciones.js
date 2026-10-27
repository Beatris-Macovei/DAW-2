
//Ejercicio 1. Calcular el precio de un producto 

function calcularPrecio(precio, porcentaje = 10){
    return precio = precio - (porcentaje/100);  
}

const precioFinal = calcularPrecio(230);
console.log(precioFinal);

//Ejercicio 2. Obtener el mayor de tres números

const obtenerMayor = function obtenerFuncion(num1, num2, num3){
    let mayor = num1;

    if (num2 > mayor) {
        mayor = num2;
    }
    
    if (num3 > mayor) {
        mayor = num3;
    }

    return mayor;
}

const numeroMayor = obtenerMayor(3, 6, 1);
console.log(numeroMayor);


//Ejercicio 3. Contar elementos de un array

function contarMayores(array, limitador){
    let contador = 0;
    for(let i = 1; i < array.length; i++){
        if(array[i] > limitador) {
            contador++;
        }
    }
    return contador;
}

let numeros = [5, 18, 3, 22, 10, 15, 7];
const resultado = contarMayores(numeros, 10);
console.log(resultado);


//Ejercicio 4. Crear un array a partir de parámetros variables

function filtrarPositivos(...numeros){
    let mayores = [];

    for(let i = 1; i < numeros.length; i++){
        if(numeros[i] > 0){
            mayores.push(numeros[i]);
        }
    }
    return mayores;
}

const mayoresRes = filtrarPositivos(-3, 5, 0, 8, -2, 12);
console.log(mayoresRes);


//Ejercicio 5. Aplicar una operación a un array

function transformarArray(array, operador){
    let operaciones = [];
    for(let i = 0; i < array.length; i++){
        operaciones.push(operador(array[i]));
    }
    return operaciones;
}

const arrayEjercicio = [2, 4, 6];

const resultadoMultiplicacion = transformarArray(arrayEjercicio, function(numero) {
    return numero * 2;
});
console.log(resultadoMultiplicacion);

const resultadoFlecha = transformarArray(arrayEjercicio, numero => numero + 5);
console.log(resultadoFlecha);


//Ejercicio 6. Calcular estadísticas de un array

function estadisticas(array, objeto){
    let suma = 0;
    let mayor = array[0];
    let menor = array[0];

    for(let i = 0; i < array.length; i++){
        let numero = array[i];
        suma += numero; 
        if(numero > mayor){
            mayor = numero;
        }
        if(numero < menor){
            menor = numero;
        }
    }
    let media = suma / array.length;

    return {
        suma: suma,
        media: media,
        mayor: mayor,
        menor: menor
    };
}

let notas = [6, 8, 5, 9, 7];
const calculo = estadisticas(notas);
console.log(`suma: ${calculo.suma}, media: ${calculo.media}, mayor: ${calculo.mayor}, menor: ${calculo.menor}`);
