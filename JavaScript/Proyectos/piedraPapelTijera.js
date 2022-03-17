
function jugar (nombreJugador, elementoJugador){
    var elementos = ['piedra','papel','tijera'];
    var elegirElemento = Math.floor(Math.random()*elementos.length);
    var elementoPc = elementos[elegirElemento];
    console.log(elementoPc);

    if(elementoJugador === 'Piedra'){
        if(elementoPc = 'tijera' ){
            console.log("El pc sacó: " + elementoPc);
            console.log("Ganó " + nombreJugador  + "!");
        }else if(elementoPc = 'papel'){
            console.log("El pc sacó: " + elementoPc);
            console.log("Ganó el pc!");
        }else if(elementoPc = 'piedra'){
            console.log("El pc sacó: " + elementoPc);
            console.log("Hay un empate!");
        }
    }else if(elementoJugador === 'Papel'){
        if(elementoPc = 'piedra' ){
            console.log("El pc sacó: " + elementoPc);
            console.log("Ganó " + nombreJugador  + "!");
        }else if(elementoPc = 'tijera'){
            console.log("El pc sacó: " + elementoPc);
            console.log("Ganó el pc!");
        }else if(elementoPc = 'papel'){
            console.log("El pc sacó: " + elementoPc);
            console.log("Hay un empate!");
        }
    }else if(elementoJugador === 'Tijera'){
        if(elementoPc = 'papel' ){
            console.log("El pc sacó: " + elementoPc);
            console.log("Ganó " + nombreJugador  + "!");
        }else if(elementoPc = 'piedra'){
            console.log("El pc sacó: " + elementoPc);
            console.log("Ganó el pc!");
        }else if(elementoPc = 'tijera'){
            console.log("El pc sacó: " + elementoPc);
            console.log("Hay un empate!");
        }
    }else{
        console.log('Ingrese un elemento valido');
    }
}