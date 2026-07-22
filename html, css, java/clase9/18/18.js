  let numeros = [];

        for (let i = 1; i <= 100; i++) {
            numeros.push(i);
        }

        let mayor = numeros[0];
        let menor = numeros[0];

        for (let i = 0; i < numeros.length; i++) {

            if (numeros[i] > mayor) {
                mayor = numeros[i];
            }

            if (numeros[i] < menor) {
                menor = numeros[i];
            }
        }

        console.log("Número mayor:", mayor);
        console.log("Número menor:", menor);