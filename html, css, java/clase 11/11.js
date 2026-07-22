// ── REFERENCIAS AL DOM ──
const galeria = document.getElementById('galeria');
const btnAgregar = document.getElementById('btnAgregar');
const btnSoloFav = document.getElementById('btnSoloFav');
const errorMsg = document.getElementById('errorMsg');
const counter = document.getElementById('counter');
const toast = document.getElementById('toast');

// ── ESTADO DE LA APLICACIÓN ──
let imagenes = JSON.parse(localStorage.getItem('chanchito_imgs') || '[]');
let soloFav = false;

// ── PERSISTENCIA ──
function guardar() {
  localStorage.setItem('chanchito_imgs', JSON.stringify(imagenes));
}

// ── TOAST DE NOTIFICACIÓN ──
function mostrarToast(msg) {
  toast.textContent = msg;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 2500);
}

// ── CONTADOR DE IMÁGENES ──
function actualizarCounter() {
  const total = imagenes.length;
  const favs = imagenes.filter(i => i.fav).length;
  counter.textContent = `${total} imagen${total !== 1 ? 'es' : ''} · ${favs} favorita${favs !== 1 ? 's' : ''}`;
}

// ── CREAR TARJETA ──
function crearCard(img, index) {
  const card = document.createElement('div');
  card.className = 'card' + (img.fav ? ' is-fav' : '');
  card.dataset.index = index;

  card.innerHTML = `
    <div class="card-img-wrap">
      <img
        src="${img.url}"
        alt="${img.titulo}"
        onerror="this.parentElement.innerHTML='<div class=\\'img-error-placeholder\\'><span>🖼️</span>URL inválida</div>'"
      >
      <div class="fav-badge ${img.fav ? 'active' : ''}" title="Favorita" data-action="fav">
        ${img.fav ? '★' : '☆'}
      </div>
    </div>
    <div class="card-body">
      <div class="card-title">${img.titulo}</div>
      ${img.descripcion ? `<div class="card-desc">${img.descripcion}</div>` : ''}
      <div class="card-actions">
        <button class="btn-fav ${img.fav ? 'active' : ''}" data-action="fav">
          ${img.fav ? '★ Favorita' : '☆ Favorita'}
        </button>
        <button class="btn-del" data-action="del">Eliminar</button>
      </div>
    </div>
  `;

  card.addEventListener('click', (e) => {
    const action = e.target.closest('[data-action]')?.dataset.action;
    if (action === 'fav') toggleFav(index);
    if (action === 'del') eliminarImagen(index, card);
  });

  return card;
}

// ── RENDERIZAR GALERÍA ──
function renderizar() {
  galeria.innerHTML = '';
  const lista = soloFav ? imagenes.filter(i => i.fav) : imagenes;

  if (lista.length === 0) {
    galeria.innerHTML = `
      <div class="empty-state">
        <div class="empty-icon">${soloFav ? '★' : ''}</div>
        <p>${soloFav ? 'No tenés imágenes favoritas todavía.' : 'La galería está vacía. ¡Agregá tu primera imagen!'}</p>
      </div>`;
  } else {
    lista.forEach((img, i) => {
      const realIndex = soloFav ? imagenes.indexOf(img) : i;
      galeria.appendChild(crearCard(img, realIndex));
    });
  }

  actualizarCounter();
}

// ── MARCAR / DESMARCAR FAVORITA ──
function toggleFav(index) {
  imagenes[index].fav = !imagenes[index].fav;
  guardar();
  mostrarToast(imagenes[index].fav ? '★ Marcada como favorita' : '☆ Quitada de favoritas');
  renderizar();
}

// ── ELIMINAR IMAGEN ──
function eliminarImagen(index, card) {
  card.style.transition = 'opacity 0.25s, transform 0.25s';
  card.style.opacity = '0';
  card.style.transform = 'scale(0.95)';
  setTimeout(() => {
    imagenes.splice(index, 1);
    guardar();
    mostrarToast('Imagen eliminada');
    renderizar();
  }, 250);
}

// ── EVENTOS ──
btnAgregar.addEventListener('click', () => {
  const titulo = document.getElementById('Titulo').value.trim();
  const url = document.getElementById('URL').value.trim();
  const descripcion = document.getElementById('Descripcion').value.trim();

  if (!titulo || !url) {
    errorMsg.style.display = 'inline';
    setTimeout(() => errorMsg.style.display = 'none', 3000);
    return;
  }

  imagenes.unshift({ titulo, url, descripcion, fav: false });
  guardar();
  renderizar();
  mostrarToast('✦ Imagen agregada');

  document.getElementById('Titulo').value = '';
  document.getElementById('URL').value = '';
  document.getElementById('Descripcion').value = '';
});

btnSoloFav.addEventListener('click', () => {
  soloFav = !soloFav;
  btnSoloFav.classList.toggle('active', soloFav);
  renderizar();
});

// ── INICIO ──
renderizar();