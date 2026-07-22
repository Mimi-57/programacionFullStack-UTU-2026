let cantidadPares = 0;
let numero;

do {
    numero = parseInt(prompt("Ingresa un número (0 para terminar):"));


    if (numero !== 0 && numero % 2 === 0) {
       cantidadPares++;
    }

} while (numero !== 0);

alert("Ingresaste " + cantidadPares + " números pares.");