document.addEventListener("DOMContentLoaded", function () {
    fetch('obras.json')
        .then(response => response.json())
        .then(data => {
            const obrasLuhmann = data.luhmann;
            const tablaObrasLuhmann = document.getElementById('tabla-obras-luhmann').querySelector('tbody');

            obrasLuhmann.forEach(obra => {
                const fila = document.createElement('tr');

                fila.innerHTML = `
                    <td>${obra.titulo}</td>
                    <td>${obra.anio}</td>
                    <td>${obra.descripcion}</td>
                    <td><button onclick="mostrarDetalles('${obra.detalles}')">Descargar</button></td>
                `;

                tablaObrasLuhmann.appendChild(fila);
            });
        })
        .catch(error => console.error('Error al cargar las obras:', error));
});

function mostrarDetalles(detalles) {
    alert(detalles);
}
