 let nombres = [];


    let nombre;


    while (nombre !== "salir") {

      nombre = prompt("Ingresa un nombre o escribe 'salir'");

      if (nombre !== "salir") {
        nombres.push(nombre);
      }
    }


    console.log("Nombres guardados:");
    console.log(nombres);