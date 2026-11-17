//Con sintaxis class

class CentroEduca{
    #nombre;
    #tipo;
    constructor(tip, nom){
        this.#tipo = tip;
        this.#nombre = nom;
    }
    getNombre(){
        return this.#nombre;
    }
    getTipo(){
        return this.#tipo;
    }

    setNombre(nom){
        this.#nombre = nom;
    }
    setTipo(){
        this.#tipo = tip;
    }
}

const prueba = new CentroEduca("IES" , " Tierno Galvan");
console.log(prueba.getTipo() + prueba.getNombre());
console.log(prueba.nombre);

//PRACTICA

/* Crea una clase que convierta los datos en segundos
ConversorTiempo y tiene el metodo: aSegundos (<tiempo)
1 Parametro : significa que le estamos pasando el tiempo en segundos
y devolvera ese mismo valor.
2 Parametros : Estamos pasando minutos y segundos. Devolvera : 60 * minutos + segundos
3 Parametros : Estamos pasando horas, minutos y segundos. Devolvera : 3600 * horas + 60 * minutos + segundos.

Sino, lanzar error!*/

class ConversorTiempo{
    aSegundos(...tiempo){
        if (tiempo.length === 1) {
            return tiempo[0];
        }else if (tiempo.length === 2) {
            return tiempo[0] * 60 + tiempo[1];
        }else if (tiempo.length === 3){
            return tiempo[0] * 3600 + tiempo[1] * 60 + tiempo[2];
        }else{
            throw new Error("Argumento no valido!");
        }
    }
}

const hora = new ConversorTiempo();

console.log(hora.aSegundos(30));
console.log(hora.aSegundos(2, 30));
console.log(hora.aSegundos(1, 15, 30));
console.log(hora.aSegundos(2, 12, 4, 13));
