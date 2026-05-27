/* -Alteracion del titulo- */
const titulo = document.getElementById("Title");
const boton = document.getElementById("btnTitle");

boton.addEventListener("click", function () {
    titulo.textContent = "Ahora el chanchito feliz es azul! felicidades!!";
    titulo.style.color = "blue";
});


/* -Alteracion del párrafo- */
const parrafo = document.getElementById("parrafo");
const botonParrafo = document.getElementById("btnParrafo");

botonParrafo.addEventListener("click", function () {
    parrafo.textContent = "El chanchito feliz cree que tienes que darle de comer, que tal una nota de 9?.";
});


/* -Alteracion de la imagen- */
const img = document.getElementById("img");
const botonImg = document.getElementById("btnImg");
const botonImg2 = document.getElementById("btnImg2");

botonImg.addEventListener("click", function () {
    img.src = "img/c.png";
    img.alt = "Nueva imagen de una pagina web";
});

botonImg2.addEventListener("click", function () {
    img.src = "img/r2.png";
    img.alt = "Otra imagen de una pagina web";
});


/* -Mostrar mensaje- */
const inputMensaje = document.getElementById("inputMensaje");
const botonMensaje = document.getElementById("btnMensaje");

botonMensaje.addEventListener("click", function () {
    const mensaje = inputMensaje.value;
    alert(mensaje);
});


/* Agregar elemento */
const texto = document.getElementById("TextoClase");
const btnAgregar = document.getElementById("btnAgregarClase");
const btnQuitar = document.getElementById("btnQuitarClase");

btnAgregar.addEventListener("click", function () {
    texto.classList.add("estiloRojo");
});

btnQuitar.addEventListener("click", function () {
    texto.classList.remove("estiloRojo");
});

/* Modo Claro/Oscuro */
const btnModo = document.getElementById("btnModoOscuro");
const body = document.body;

btnModo.addEventListener("click", function () {
    body.classList.toggle("dark-mode");
});

/* Lista dinámica */
const Lista = document.getElementById("LListaDinamica");
const BtnAgregarElemento = document.getElementById("btnAgregarElemento");
const BtnEliminarElemento = document.getElementById("btnEliminarElemento");

BtnAgregarElemento.addEventListener("click", function () {
    const nuevoElemento = document.createElement("li");
    nuevoElemento.textContent = "Animalito feliz se ah agregado con exito!";
    nuevoElemento.classList.add("agregado");
    Lista.appendChild(nuevoElemento);
});

BtnEliminarElemento.addEventListener("click", function () {
    const QuitarElementos = document.querySelectorAll(".agregado");
    QuitarElementos.forEach(function (elemento) {
    elemento.remove();
    });
});


/* Formulario--Nivel 3 */

const Formulario = document.getElementById("Formulario");
const Nombre = document.getElementById("Nombre");
const ColorFavorito = document.getElementById("ColorFavorito");
const Mensaje = document.getElementById("Mensaje");
const Resultado = document.getElementById("Resultado");
const Errores = document.getElementById("Errores");

Formulario.addEventListener("submit", function (event) {
    event.preventDefault();

    Errores.textContent = "";

    const nameUser = Nombre.value;
    const ColorUser = ColorFavorito.value;
    const MensajeUser = Mensaje.value;

    if (nameUser === "" || MensajeUser === "") {
        Errores.textContent = "Por favor, completa todos los campos.";
        return;
    }

    const targeta = document.createElement("div");
    
    targeta.classList.add("card");
    targeta.style.backgroundColor = ColorUser;
    targeta.innerHTML = `
        <h3>${nameUser}</h3>
        <p>${MensajeUser}</p>
    `;

    Resultado.appendChild(targeta);
    Formulario.reset();
});