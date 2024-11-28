
function procesarFormulario() {
    const nombre = document.getElementById("nombre").value;
    const email = document.getElementById("email").value;
    const comentario = document.getElementById("comentario").value;

    if (nombre && email && comentario) {
        alert("Gracias, " + nombre + "! Camilo se merece una buena nota.");
        document.getElementById("form-contacto").reset();
        return true; 
    } else {
        alert("Por favor, completa todos los campos del formulario antes de enviarlo.");
    }

    return false;
}
