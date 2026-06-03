// ===== VARIABLES =====

const nameInput = document.getElementById("f-name");
const descInput = document.getElementById("f-desc");
const typeInput = document.getElementById("f-type");
const statusInput = document.getElementById("f-status");
const imgInput = document.getElementById("f-img");
const ratingInput = document.getElementById("f-rating");

const addBtn = document.getElementById("add-btn");
const collectionGrid = document.getElementById("collection-grid");
const counter = document.getElementById("counter");

const emptyState = document.getElementById("empty-state");

let collection = JSON.parse(localStorage.getItem("collection")) || [];


// ===== ESTRELLAS =====

const stars = document.querySelectorAll(".star");

stars.forEach(star => {
    star.addEventListener("click", () => {

        const value = star.dataset.val;

        ratingInput.value = value;

        stars.forEach(s => {
            s.classList.remove("active");
        });

        for(let i = 0; i < value; i++){
            stars[i].classList.add("active");
        }
    });
});


// ===== GUARDAR =====

function saveCollection() {
    localStorage.setItem(
        "collection",
        JSON.stringify(collection)
    );
}


// ===== CONTADOR =====

function updateCounter() {
    counter.textContent = collection.length;
}


// ===== CREAR TARJETAS =====

function renderCollection(filter = "all") {

    collectionGrid.innerHTML = "";

    const filtered = filter === "all"
        ? collection
        : collection.filter(item => item.type === filter);

    if(filtered.length === 0){

        collectionGrid.innerHTML = `
            <div id="empty-state">
                <h3>No hay elementos</h3>
            </div>
        `;

        return;
    }

    filtered.forEach((item, index) => {

        const card = document.createElement("div");

        card.classList.add("card");

        card.innerHTML = `
            ${item.image ? `<img src="${item.image}" alt="${item.name}">` : ""}

            <h3>${item.name}</h3>

            <p>${item.description}</p>

            <p><strong>Tipo:</strong> ${item.type}</p>

            <p><strong>Estado:</strong> ${item.status}</p>

            <p><strong>★</strong> ${item.rating}/5</p>

            <button onclick="deleteItem(${index})">
                Eliminar
            </button>
        `;

        collectionGrid.appendChild(card);
    });
}


// ===== AGREGAR =====

addBtn.addEventListener("click", () => {

    if(
        !nameInput.value ||
        !typeInput.value ||
        !statusInput.value
    ){
        alert("Completa los campos obligatorios");
        return;
    }

    const item = {

        name: nameInput.value,
        description: descInput.value,
        type: typeInput.value,
        status: statusInput.value,
        rating: ratingInput.value,
        image: imgInput.value
    };

    collection.push(item);

    saveCollection();
    updateCounter();
    renderCollection();

    nameInput.value = "";
    descInput.value = "";
    typeInput.value = "";
    statusInput.value = "";
    imgInput.value = "";
    ratingInput.value = "0";

    stars.forEach(star => {
        star.classList.remove("active");
    });
});


// ===== ELIMINAR =====

function deleteItem(index){

    collection.splice(index, 1);

    saveCollection();
    updateCounter();
    renderCollection();
}


// ===== FILTROS =====

const filterButtons = document.querySelectorAll("[data-filter-type]");

filterButtons.forEach(button => {

    button.addEventListener("click", () => {

        filterButtons.forEach(btn => {
            btn.classList.remove("active");
        });

        button.classList.add("active");

        renderCollection(
            button.dataset.filterType
        );
    });
});


// ===== INICIO =====

updateCounter();
renderCollection();