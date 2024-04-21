import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
  // Seleccionar los elementos necesarios por su ID
  const popup = document.getElementById("popup");
  const openPopup = document.getElementById("open-popup");
  const closePopup = document.getElementById("close-popup");
  const popupOk = document.getElementById("popup-ok");
  const openPopupOk = document.getElementById("open-popup-ok");

  // Evento para abrir el pop-up
  openPopup.addEventListener("click", () => {
    popup.classList.remove("hidden"); // Remover la clase 'hidden' para mostrar el pop-up
  });

  // Evento para cerrar el pop-up
  closePopup.addEventListener("click", () => {
    console.log("Cerrando pop-up")
    popup.classList.add("hidden"); // Agregar la clase 'hidden' para ocultar el pop-up
  });
});

document.addEventListener("click", (event) => {
  if (!popup.contains(event.target) && event.target !== openPopup) {
    popup.classList.add("hidden");
  }
});

openPopupOk.addEventListener("click", () => {
  popupOk.classList.remove("hidden");
});
