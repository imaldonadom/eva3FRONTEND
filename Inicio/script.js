// Función para ampliar la imagen
function ampliarImagen(imagen) {
    // Si la imagen ya tiene zoom, quita el zoom
    if (imagen.classList.contains("zoom")) {
        imagen.classList.remove("zoom");
    } else {
        // Elimina el zoom de todas las imágenes
        document.querySelectorAll(".fotos img").forEach(img => img.classList.remove("zoom"));

        // Aplica zoom solo a la imagen clickeada
        imagen.classList.add("zoom");
    }
}

// Evento para cerrar el zoom al hacer clic fuera de las imágenes
document.addEventListener("click", function (event) {
    // Verifica si el clic no fue en una imagen
    if (!event.target.matches(".fotos img")) {
        // Elimina el zoom de todas las imágenes
        document.querySelectorAll(".fotos img").forEach(img => img.classList.remove("zoom"));
    }
});
