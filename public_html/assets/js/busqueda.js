function buscarProductos() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    const productos = [
        { nombre: 'AMX', descripcion: 'Descripción de LA AMX'},
        { nombre: 'AMX', descripcion: 'Descripción de LA ABC' },
        { nombre: 'BMX', descripcion: 'Descripción de LA BMX' },
        { nombre: 'GTM', descripcion: 'Descripción de LA GTM' },
        { nombre: 'RTX', descripcion: 'Descripción de LA RTX' },
        { nombre: 'RTW', descripcion: 'Descripción del LA RTW' },
        // Agrega más productos aquí...
    ];

    const resultados = productos.filter(producto => {
        const nombreEnMinusculas = producto.nombre.toLowerCase();
        const descripcionEnMinusculas = producto.descripcion.toLowerCase();
        return nombreEnMinusculas.includes(searchTerm) || descripcionEnMinusculas.includes(searchTerm);
    });

    const resultadoBusqueda = document.getElementById('resultado-busqueda');
    resultadoBusqueda.innerHTML = '';

    const template = document.getElementById('producto-template');

    resultados.forEach(producto => {
        const productoCard = template.content.cloneNode(true);
        productoCard.querySelector('.card-title').textContent = producto.nombre;
        productoCard.querySelector('.card-text').textContent = producto.descripcion;

        const botonProducto = productoCard.querySelector('.btn');
        botonProducto.addEventListener('click', () => {
            console.log(`Producto seleccionado: ${producto.nombre}`);
        });

        resultadoBusqueda.appendChild(productoCard);
    });
}
