// Declarativas
function miFuncion() {
    return 3;
}

mFuncion();

//Expresión
var miFuncion = function (a,b){
    return a + b;
}

mFuncion(1,2);

//////////////////  1  //////////////////////
function saludarEstudiantes(estudiante){
    console.log(`Hola ${estudiante}`);
}
  
saludarEstudiantes("Luna");

//////////////////  2  //////////////////////
function sumar(a,b){
    var resultado = a + b;
    return resultado;
}

sumar (1,2);

//////////////////  3  //////////////////////
function sumar(a,b){
    return a + b;
}

sumar (1,2);
