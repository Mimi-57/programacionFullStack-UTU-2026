  let notas = [8, 7, 10, 6, 9];

   
    let suma = 0;

   
    for (let i = 0; i < notas.length; i++) {
      suma = suma + notas[i];
    }

    let promedio = suma / notas.length;

   
    console.log("Las notas son: " + notas);
    console.log("El promedio es: " + promedio);