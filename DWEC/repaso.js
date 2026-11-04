//Ej 1

const colores = ["rojo", "verde", "azul"];

colores.push("amarillo"); //añade el elemento amarillo

colores.unshift("negro"); //añade el elemento negro al principio

console.log(colores);
console.log(colores.length);

//Ej 2

const numeros = [10, 20, 30];

numeros[numeros.length] = 40; //añade 40 al final del array
console.log(numeros);

numeros[4] = 60;
console.log(numeros);

console.log(numeros[3]);


//Ej 3

const animales = ["perro", "gato", "conejo", "loro", "pez"];

animales.pop(); //elimina el ultimo elemento

animales.shift(); //elimina el primer elemento

console.log(animales);

//Ej 4

const numeros1 = [5, 10, 15, 20, 25, 30];

numeros1.splice(2,1); //elimina el numero x y, x=posicion y=cuantos numeros eliminas
console.log(numeros1);

numeros1.splice(1,2); 
console.log(numeros1);

//Ej 5

const valores = [1, 2, 3, 4, 5, 6, 7];

valores.length = 4;
console.log(valores);

//Ej 6

const original = [10, 20, 30, 40, 50];
console.log(original);

let copia = original.slice(0,5); //crea una copia
console.log(copia);

copia[0] = 0;
console.log(original);
console.log(copia);

//Ej 7

const datos = [2, 4, 6, 8, 10, 12, 14];

let nuevoArray = datos.slice(2,5);
console.log(nuevoArray);

let otroArray = datos.slice(4, 7);
console.log(otroArray);

//Ej 8

const array1 = [1, 2, 3];

const array2 = array1;

array2[0] = 99;

console.log(array1);

//con el array2 = array1 he cambiado el nombre del array, asi que si le hago una modificacion a array2 se lo estoy haciendo a array1 porque es el mismo array, no una copia

//Ej 9

const frutas = ["pera", "manzana", "uva", "manzana", "kiwi"];

console.log(frutas.indexOf("manzana", 0));

console.log(frutas.indexOf("kiwi"));

console.log(frutas.indexOf("naranja", 2));

//Ej 10

console.log(frutas.lastIndexOf("manzana",4));

console.log(frutas.lastIndexOf("pera",4));

console.log(frutas.lastIndexOf("pera"));

//Ej 11

const valores1 = [10, "10", 20, "20"];

console.log(valores1.indexOf(10));

console.log(valores1.indexOf("10"));

console.log(valores1.indexOf(20));

console.log(valores1.indexOf("20"));

//Ej 12

const letras = ["d", "a", "c", "b"];

console.log(letras.sort());

//Ej 13

const numeros2 = [3, 20, 100, 5, 12];

console.log(numeros2.sort());

//el sort() lo ordena alfabeticamente

//Ej 14

const valores2 = [1, 2, 3, 4, 5];

console.log(valores2.reverse()); //ordena al reves

//Ej 15

const palabras = ["pera", "Manzana", "uva", "melón"];

console.log(palabras.sort());



//OPERACIONES ARRAYS

//Ej 1 

const temperaturas = [3, -2, 7, -5, 0, 9, -1];

let bajoCero = temperaturas.filter(temp => temp < 0); //filtra

console.log(bajoCero);

console.log(temperaturas);

//Ej 2

const precios = [12, 45, 8, 75, 30, 120, 19];

let superiores = precios.filter(pre => pre > 30);
console.log(superiores);

let menoresIguales = precios.filter(pre => pre <= 30);
console.log(menoresIguales);

//Ej 3 

const precios1 = [20, 40, 60, 80];

let descuento = precios1.map(prec => prec * (1 - 25 / 100)); //crea otro array para operar
console.log(descuento);

console.log(precios1);

//Ej 4

const metros = [1.5, 3, 0.75, 10];

const centimetros = metros.map(me => me * 100);
console.log(centimetros);

//Ej 5

const factores = [2, 3, 4, 5];

const producto = factores.reduce((acumulador, numero) => acumulador * numero, 1);
console.log(producto);

//Ej 6

const puntuaciones = [18, 42, 27, 65, 39];

const puntuacionMasAlta = puntuaciones.reduce((acumulador, actual) => {
    return actual > acumulador ? actual : acumulador;
}, 0);

console.log(puntuacionMasAlta);



//conjuntos y mapas

//Ej 1

const inscripciones = ["Lucía", "Mario", "Ana", "Lucía", "Diego", "Ana", "Sara"];

const participantes = new Set(inscripciones); // Crea un conjunto participantes a partir del array, evitando inscripciones duplicadas

const numeroParticipantes = participantes.size; //Muestra el número de participantes diferentes.

console.log(numeroParticipantes);

console.log(participantes.has("Diego"));

participantes.add("Pablo");
participantes.add("Mario");

for (const participante of participantes) {
    console.log(participante);
}

console.log(participantes.size);

//Ej 2

const autorizados = new Set(["A102", "B205", "C310", "D415"]);

for (const autorizado of autorizados) {
    if (autorizado === "B205") {
        console.log("Está autorizado");
    } else if (autorizado === "X999") {
        console.log("No autorizado");
    }
}

