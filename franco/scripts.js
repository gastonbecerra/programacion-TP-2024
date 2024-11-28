function cargarDefiniciones() {
  fetch('definiciones.json') // Cambia el path si es necesario
    .then(response => response.json())
    .then(data => {
      const tabla = document.getElementById('tabla-definiciones');
      tabla.innerHTML = ''; // Limpia la tabla antes de rellenarla
      data.tabla.forEach(item => {
        const fila = document.createElement('tr');
        fila.innerHTML = `
          <td>${item.Autor || '-'}</td>
          <td>${item.Definicion}</td>
          <td><a href="${item.link}">Ver más</a></td>
        `;
        tabla.appendChild(fila);
      });
    })
    fetch('your-json-url')
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json(); // Parse JSON response
    })
    .then(data => {
      // Work with JSON data
      console.log(data);
    })
    
}

// Evento para mostrar la viñeta de definiciones
document.getElementById('definiciones-link').addEventListener('click', function(event) {
  event.preventDefault(); // Evita que la página recargue
  cargarDefiniciones();
  const viñeta = document.getElementById('definiciones-lista');
  viñeta.style.display = 'block'; // Muestra la viñeta

  // Detecta clics fuera de la viñeta para cerrarla
  document.addEventListener('click', function cerrarVinyeta(event) {
    if (!viñeta.contains(event.target) && event.target.id !== 'definiciones-link') {
      viñeta.style.display = 'none'; // Oculta la viñeta
      document.removeEventListener('click', cerrarVinyeta); // Remueve el evento una vez que se cierra
    }
  });
});



