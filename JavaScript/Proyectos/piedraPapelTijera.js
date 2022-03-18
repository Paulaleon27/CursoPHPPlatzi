/***************************************
** HACER JUEGO PIEDRA, PAPEL O TIJERA **
***************************************/
 function jugar (nombreJugador, elementoJugador){
    var elementos = ['piedra','papel','tijera'];
    var elegirElemento = Math.floor(Math.random()*elementos.length); 
    // random (genera un valor aleatorio, un valor flotante)
    // floor (convierte el valor flotante a uno entero)
    // length (debemos establecer el rango del valor aleatorio, así que multiplicamos la longitud del array y con el
    // length nos indica el numero de argumentos que la función requiere)
    var elementoPc = elementos[elegirElemento];
    //console.log(elementoPc);

    if(elementoJugador == 'Piedra' || elementoJugador == 'piedra'){
        if(elementoPc == 'tijera' ){
            console.log("1. El pc sacó: " + elementoPc);
            console.log("1. Ganó " + nombreJugador  + "!");
        }else if(elementoPc == 'papel'){
            console.log("2. El pc sacó: " + elementoPc);
            console.log("2. Ganó el pc!");
        }else if(elementoPc == 'piedra'){
            console.log("3. El pc sacó: " + elementoPc);
            console.log("3. Hay un empate!");
        }
    }else if(elementoJugador == 'Papel' || elementoJugador == 'papel'){
        if(elementoPc == 'piedra' ){
            console.log("4. El pc sacó: " + elementoPc);
            console.log("4. Ganó " + nombreJugador  + "!");
        }else if(elementoPc == 'tijera'){
            console.log("5. El pc sacó: " + elementoPc);
            console.log("5. Ganó el pc!");
        }else if(elementoPc == 'papel'){
            console.log("6. El pc sacó: " + elementoPc);
            console.log("6. Hay un empate!");
        }
    }else if(elementoJugador == 'Tijera' || elementoJugador == 'tijera'){
        if(elementoPc == 'papel' ){
            console.log("7. El pc sacó: " + elementoPc);
            console.log("7. Ganó " + nombreJugador  + "!");
        }else if(elementoPc == 'piedra'){
            console.log("8. El pc sacó: " + elementoPc);
            console.log("8. Ganó el pc!");
        }else if(elementoPc == 'tijera'){
            console.log("9. El pc sacó: " + elementoPc);
            console.log("9. Hay un empate!");
        }
    }else{
        console.log('Ingrese un elemento valido');
    }
}