document.addEventListener("DOMContentLoaded", function () {
    fetch('obras.json')
        .then(response => response.json())
        .then(data => {
            const obrasMarx = data.marx;
            const tablaObras = document.getElementById('tabla-obras-marx').querySelector('tbody');

            obrasMarx.forEach(obra => {
                const fila = document.createElement('tr');

                fila.innerHTML = `
                    <td>${obra.titulo}</td>
                    <td>${obra.anio}</td>
                    <td>${obra.descripcion}</td>
                    <td><button onclick="mostrarDetalles('${obra.detalles}')">Descargar</button></td>
                `;

                tablaObras.appendChild(fila);
            });
        })
        .catch(error => console.error('Error al cargar las obras:', error));
});

function mostrarDetalles(detalles) {
    alert(detalles);
}
