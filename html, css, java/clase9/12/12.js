let numero1=Number(prompt("Ingresa el primer número:"));
let numero2=Number(prompt("Ingresa el segundo número:"));
let operador = prompt("Ingresa el operador (+, -, *, /):");

if (operador === "+") {
    alert("El resultado de la suma es: " + (numero1 + numero2));
} else if (operador === "-") {
    alert("El resultado de la resta es: " + (numero1 - numero2));
} else if (operador === "*") {
    alert("El resultado de la multiplicación es: " + (numero1 * numero2));
} else if (operador === "/") {
    alert("El resultado de la división es: " + (numero1 / numero2));
} else {
    alert("Operador no válido");
} 