function jugar(elementoUsuario){ 
    var elementos = ['Piedra','Papel','Tijera'];
    var elegirElemento = Math.floor(Math.random()*elementos.length);
    var elementoPc = elementos[elegirElemento];
    console.log(elementoPc);
    switch(true){
        case (elementoUsuario == 'piedra' && elementoPc == 'Tijera' || elementoUsuario == 'papel' && elementoPc == 'Piedra' || elementoUsuario == 'tijera' && elementoPc == 'Papel' ||
            elementoUsuario == 'Piedra' && elementoPc == 'Tijera' || elementoUsuario == 'Papel' && elementoPc == 'Piedra' || elementoUsuario == 'Tijera' && elementoPc == 'Papel'):
            console.log("El usuario sacó: "+ elementoUsuario);
            console.log("El pc sacó: "+ elementoPc);
            console.log("Ganó el usuario!");
            break;
        case (elementoUsuario == 'tijera'  && elementoPc == 'Papel' || elementoUsuario == 'papel' && elementoPc == 'Tijera' || elementoUsuario == 'tijera' && elementoPc == 'Piedra' ||
            elementoUsuario == 'Tijera' && elementoPc == 'Papel' || elementoUsuario == 'Papel' && elementoPc == 'Tijera' || elementoUsuario == 'Tijera' && elementoPc == 'Piedra'):
            console.log("El usuario sacó: "+ elementoUsuario);
            console.log("El pc sacó: "+ elementoPc);
            console.log("Ganó el pc!");
            break;
        case (elementoUsuario == elementoPc):
            console.log("El usuario sacó: "+ elementoUsuario);
            console.log("El pc sacó: "+ elementoPc);
            console.log("Hay un empate!");
            break;
        default:
            console.log("El usuario sacó: "+ elementoUsuario);
            console.log("Ingrese un elemento correcto");
    }
}

jugar ('piedra');
