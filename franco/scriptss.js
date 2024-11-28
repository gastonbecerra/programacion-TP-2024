
// Mostrar preguntas adicionales si la respuesta es "no" a "¿Sos usuario de Instagram?"
document.addEventListener("DOMContentLoaded", function() {
    var noIGRadio = document.querySelector('input[name="usuario_instagram"][value="no"]');
    var siIGRadio = document.querySelector('input[name="usuario_instagram"][value="si"]');
    var noIGQuestions = document.getElementById('no-ig-questions');

    noIGRadio.addEventListener('change', function() {
        if (this.checked) {
            noIGQuestions.style.display = 'block';
        }
    });

    siIGRadio.addEventListener('change', function() {
        if (this.checked) {
            noIGQuestions.style.display = 'none';
        }
    });
});

// Función para volver al inicio de la página
function volverArriba() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Mostrar el botón de volver al inicio solo si se ha hecho scroll
window.onscroll = function() {
    var btn = document.getElementById('btn-volver-arriba');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        btn.style.display = 'block';
    } else {
        btn.style.display = 'none';
    }
};


document.addEventListener("DOMContentLoaded", () => {
    const usuarioInstagramInputs = document.querySelectorAll("input[name='usuario_instagram']");
    const noIGQuestions = document.getElementById("no-ig-questions");

    usuarioInstagramInputs.forEach(input => {
        input.addEventListener("change", () => {
            if (input.value === "no") {
                noIGQuestions.style.display = "block";
            } else {
                noIGQuestions.style.display = "none";
            }
        });
    });
});
