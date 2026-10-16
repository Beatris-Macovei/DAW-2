//Ejercicio 9.1

const inscripciones = ["Lucía", "Mario", "Ana", "Lucía", "Diego", "Ana", "Sara"];

//Crea un conjunto participantes a partir del array, evitando inscripciones duplicadas.
const participantes = new Set(inscripciones);

//Muestra el número de participantes diferentes.
console.log(participantes.size);

//Comprueba si "Diego" está inscrito y muestra el resultado.
console.log(participantes.has("Diego"));

//Añade a "Pablo" y vuelve a intentar añadir a "Mario" .
participantes.add("Pablo");
participantes.add("Mario");

//Recorre el conjunto con for...of y muestra cada participante.
for (const participante of participantes) {
  console.log(participante);
}

//Muestra el número final de participantes y explica por qué el segundo intento de inscripción no aumenta ese número.
console.log(participantes.size);


//Ejercicio 9.2

