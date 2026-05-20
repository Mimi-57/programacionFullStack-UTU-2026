alert("¡Hola! Bienvenido a la clase de JavaScript. Del  profesor chanchito feliz, vamos a jugar!");
let numero = Math.floor(Math.random() * 100) + 1;

let adivina = Number(prompt("Introduce tu numero!:"));
if (numero === adivina) {
    alert("¡Felicidades! Has adivinado el número, Chanchito feliz!");
} else if (adivina < numero) {
    alert("¡Oh no! El número es mayor, Chanchito feliz. Intenta de nuevo." + "El número correcto era: " + numero);}