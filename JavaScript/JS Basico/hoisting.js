////////////////////  1  //////////////////////////
console.log(miNombre);

var miNombre = "Luna";

// undefined
//Porque primero llamamos la variables y después la inicializamos

////////////////////  2  //////////////////////////
var miNombre = undefined;

console.log(miNombre + " Soy ese hoisting");

miNombre = "Paula";

// undefined Soy ese hoisting
//Porque en la inicialización el valor es undefined

////////////////////  3  //////////////////////////
hey();

function hey(){
    console.log("Hola " + miNombre);
}

var miNombre = "Diego";

//miNombre is not defined

////////////////////  4  //////////////////////////
function hey(){
    console.log("Hola " + miNombre);
}

var miNombre = "Diego";

hey();

//Hola Diego
