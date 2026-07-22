let nota = Number(prompt("Ingresa una nota del 1 al 10:"));

if (nota >= 1 && nota <= 4) {
    document.write("Insuficiente");
} else if (nota >= 5 && nota <= 7) {
    document.write("Aceptable");
} else if (nota >= 8 && nota <= 10) {
    document.write("Muy bien");
} else {
    document.write("Nota inválida");
}