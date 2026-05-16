let numero1 = Number(prompt("Ingresa el primer número:"));
let numero2 = Number(prompt("Ingresa el segundo número:"));

let operacion = prompt(
    "Elige una operación:\n" +
    "1 = Suma\n" +
    "2 = Resta\n" +
    "3 = Multiplicación\n" +
    "4 = División"
);

let resultado;

if (operacion === "1") {
    resultado = numero1 + numero2;
    document.write("Resultado de la suma: " + resultado);

} else if (operacion === "2") {
    resultado = numero1 - numero2;
    document.write("Resultado de la resta: " + resultado);

} else if (operacion === "3") {
    resultado = numero1 * numero2;
    document.write("Resultado de la multiplicación: " + resultado);

} else if (operacion === "4") {
    resultado = numero1 / numero2;
    document.write("Resultado de la división: " + resultado);

} else {
    document.write("Operación inválida");
}