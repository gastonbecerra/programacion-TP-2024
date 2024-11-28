async function cargarComponentes() {
    try {
        document.getElementById('header-container').innerHTML = await fetch('header.html').then(response => response.text());
        document.getElementById('nav-container').innerHTML = await fetch('nav.html').then(response => response.text());
        document.getElementById('footer-container').innerHTML = await fetch('footer.html').then(response => response.text());
    } catch (error) {
        console.error("Error al cargar los componentes:", error);
    }
}

cargarComponentes();

const datos = {
    caracteristicas: [
        "Representación social de la ciencia: Moscovici exploró cómo las personas interpretan la ciencia no solo como conocimiento, sino también como símbolo de progreso y verdad.",
        "Representación social de la salud y la enfermedad: Las sociedades entienden la salud y la enfermedad según valores y conocimientos compartidos, que varían según el contexto cultural y social.",
        "Representación social del individuo y la identidad: Las personas construyen su identidad en relación con sus grupos y la sociedad, lo que influye en su sentido de pertenencia social.",
        "Representación social de la tecnología: La tecnología es vista como un motor de cambio que puede facilitar o complicar la vida. Las representaciones de la tecnología oscilan entre visiones de progreso y amenazas, dependiendo del contexto y la época."
    ],
    ejemplos: [
        { descripcion: "La creencia generalizada en la eficacia de las vacunas. La ciencia médica ha construido una representación que presenta las vacunas como necesarias para prevenir enfermedades y proteger a la sociedad." },
        { descripcion: "La visión de la salud como algo que debe ser cuidado y mantenido mediante prácticas de ejercicio y buena alimentación, lo que refleja un enfoque preventivo y de autocuidado en la sociedad moderna." },
        { descripcion: "En algunas culturas, el individualismo es valorado, y las personas tienden a ver el éxito como un logro personal. En cambio, en sociedades colectivistas, la identidad está más ligada a los logros del grupo o la familia." },
        { descripcion: "La percepción actual de la inteligencia artificial como una herramienta que puede aumentar la eficiencia y el bienestar, pero también como una amenaza para los empleos y la privacidad." }
    ]
};

const tabla = document.getElementById('tabla-datos');
datos.caracteristicas.forEach((caracteristica, index) => {
    const fila = document.createElement('tr');
    const celdaCaracteristica = document.createElement('td');
    const celdaEjemplo = document.createElement('td');

    celdaCaracteristica.textContent = caracteristica;
    celdaEjemplo.textContent = datos.ejemplos[index].descripcion;

    fila.appendChild(celdaCaracteristica);
    fila.appendChild(celdaEjemplo);
    tabla.appendChild(fila);
});

document.getElementById('buscar').addEventListener('click', function () {
    const termino = document.getElementById('busqueda').value.toLowerCase();
    const filas = document.querySelectorAll('#tabla-datos tr');

    filas.forEach(fila => {
        fila.querySelectorAll('td').forEach(celda => {
            celda.style.backgroundColor = '';
        });
    });

    filas.forEach(fila => {
        fila.querySelectorAll('td').forEach(celda => {
            if (celda.textContent.toLowerCase().includes(termino)) {
                celda.style.backgroundColor = 'red';
            }
        });
    });
});

document.getElementById('resetear').addEventListener('click', function () {
    const filas = document.querySelectorAll('#tabla-datos tr');
    filas.forEach(fila => {
        fila.querySelectorAll('td').forEach(celda => {
            celda.style.backgroundColor = '';
        });
    });
    document.getElementById('busqueda').value = '';
});

document.getElementById('cambiar-estilo').addEventListener('click', function() {
    document.body.classList.toggle('estilo-cambiado');
});