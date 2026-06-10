const light = document.getElementById("light");
const body = document.body;

light.addEventListener("click", () => {
    body.classList.toggle("dark-mode");
});


let botonTraerImagen = document.querySelector("#load-cat");
let imagenGatito = document.querySelector("#gatitos");
let botonMeGusta = document.querySelector("#like");
let botonNoMeGusta = document.querySelector("#dislike");
let contadorMeGusta = document.querySelector(".cont-like");
let contadorNoMeGusta = document.querySelector(".cont-dislike");
let mensajeError = document.querySelector(".error");

botonTraerImagen.addEventListener("click", async() => { 
    let response = await fetch("https://api.thecatapi.com/v1/images/search");
    let data = await response.json();

    console.log(data);

    let imagen = data[0].url;

    imagenGatito.src = imagen;  
})

