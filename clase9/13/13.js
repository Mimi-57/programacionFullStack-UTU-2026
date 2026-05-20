let menu = prompt("Selecciona una opción:\n1. saludar\n2. Mostrar fecha\n3. número aleatorio");

if (menu === "1") { 
    alert("¡Hola! Bienvenido a la clase de JavaScript. Del  profesor chanchito feliz");
} else if (menu === "2") {
    let fecha = new Date();
    alert("La fecha actual es Chanchito Feliz: " + fecha.toLocaleDateString());
} else if (menu === "3") {
    let numeroAleatorio = Math.floor(Math.random() * 100) + 1;
    alert("Número aleatorio entre 1 y 100: " + numeroAleatorio);
} else {
    alert("Opción no válida");
}