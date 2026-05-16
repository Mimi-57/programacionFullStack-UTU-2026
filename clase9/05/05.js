let numero1 = Number(prompt("Ingresa el primer número:"));
let numero2 = Number(prompt("Ingresa el segundo número:"));
let numero3 = Number(prompt("Ingresa el tercer número:"));

if (numero1 >= numero2 && numero1 >= numero3) {
    document.write("El mayor es: " + numero1);
} else if (numero2 >= numero1 && numero2 >= numero3) {
    document.write("El mayor es: " + numero2);
} else {
    document.write("El mayor es: " + numero3);
}