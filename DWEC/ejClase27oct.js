/* Escribe una funcion autoejecutable que reciba dos parametros
: nombre persona y ciudad y devuelva la cadena 
<nombre> vive en <ciudad>.
Guardan la cadena en una constante
Mostrar cadena por consola */
const eje1 = (
    function texto(nombre, ciudad){
        return `${nombre} vive en ${ciudad}`;
    }
)("Bea", "Madrid");

console.log(eje1);


const moduloLampara = (function(){
    let encendida = false; //variable privada

    function encender(){
        encendida = true;
    }

    function apagar(){
        encendida = false
    }

    function consultarEstado(){
        return encendida;
    }

    return {
        encender,
        apagar,
        consultarEstado
    };
}) ();
moduloLampara.consultarEstado();
moduloLampara.encender();
moduloLampara.consultarEstado();
moduloLampara.apagar();

console.log(moduloLampara.encender());
