let suma = 0;
let numero;

do {
    numero = Number(prompt("Ingresa un número (0 para terminar):"));
    suma = suma + numero;
} while (numero !== 0);

document.write("La suma total es: " + suma);