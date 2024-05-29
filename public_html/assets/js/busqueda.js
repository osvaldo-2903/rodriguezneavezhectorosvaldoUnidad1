function buscarProductos() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    const productos = [
        {
            "nombre": "PC Gamer UltraForce",
            "descripcion": "Una PC Gamer con procesador Intel Core i7, tarjeta gráfica NVIDIA GeForce RTX 3060 Ti y 32GB de RAM.",
            "imagen": "https://cdn.pixabay.com/photo/2020/10/01/18/58/computer-5614128_1280.jpg"
        },
        {
            "nombre": "Laptop Gamer PowerEdge",
            "descripcion": "Una laptop gamer con pantalla de 15 pulgadas, procesador AMD Ryzen 7 y 512GB de almacenamiento SSD.",
            "imagen": "https://cdn.pixabay.com/photo/2016/11/29/03/53/computer-1869236_1280.jpg"
        },
        {
            "nombre": "PC Gamer MegaPower",
            "descripcion": "Una PC Gamer con procesador AMD Ryzen 9, tarjeta gráfica NVIDIA GeForce RTX 3090 y 64GB de RAM.",
            "imagen": "https://cdn.pixabay.com/photo/2018/01/17/18/42/pc-3080755_1280.jpg"
        },
        {
            "nombre": "Laptop Gamer UltraBlade",
            "descripcion": "Una laptop gamer con pantalla de 17 pulgadas, procesador Intel Core i9 y 1TB de almacenamiento SSD.",
            "imagen": "https://cdn.pixabay.com/photo/2016/11/29/05/26/apple-1868496_1280.jpg"
        },
        {
            "nombre": "PC Gamer HyperX",
            "descripcion": "Una PC Gamer con procesador Intel Core i9, tarjeta gráfica NVIDIA GeForce RTX 3080 y 32GB de RAM.",
            "imagen": "https://cdn.pixabay.com/photo/2015/12/05/22/21/stock-1071728_1280.jpg"
        },
        {
            "nombre": "Laptop Gamer SwiftX",
            "descripcion": "Una laptop gamer con pantalla de 14 pulgadas, procesador AMD Ryzen 5 y 256GB de almacenamiento SSD.",
            "imagen": "https://cdn.pixabay.com/photo/2016/02/19/10/00/laptop-1209008_1280.jpg"
        },
        {
            "nombre": "PC Gamer QuantumX",
            "descripcion": "Una PC Gamer con procesador AMD Ryzen 7, tarjeta gráfica NVIDIA GeForce RTX 3070 y 16GB de RAM.",
            "imagen": "https://cdn.pixabay.com/photo/2017/05/15/13/16/pc-2312990_1280.jpg"
        },
        {
            "nombre": "Laptop Gamer LightX",
            "descripcion": "Una laptop gamer con pantalla de 13 pulgadas, procesador Intel Core i5 y 128GB de almacenamiento SSD.",
            "imagen": "https://cdn.pixabay.com/photo/2016/02/19/11/19/laptop-1209641_1280.jpg"
        },
        {
            "nombre": "PC Gamer Xtreme X",
            "descripcion": "Una actualización de nuestro modelo Xtreme, con procesador Intel Core i9 de última generación, tarjeta gráfica NVIDIA GeForce RTX 3090 y 64GB de RAM.",
            "imagen": "https://cdn.pixabay.com/photo/2016/03/10/18/15/workspace-1245776_1280.jpg"
        },
        {
            "nombre": "Laptop Gamer UltraFast X",
            "descripcion": "Una laptop diseñada para los gamers en movimiento. Equipada con pantalla de 15 pulgadas, procesador Intel Core i9 y 1TB de almacenamiento SSD.",
            "imagen": "https://cdn.pixabay.com/photo/2018/03/12/21/16/laptop-3228987_1280.jpg"
        }
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

        const imagenProducto = productoCard.querySelector('.card-img-top');
        imagenProducto.setAttribute('src', producto.imagen); // Modificamos así el atributo src

        const botonProducto = productoCard.querySelector('.btn');
        botonProducto.addEventListener('click', () => {
            console.log(`Producto seleccionado: ${producto.nombre}`);
        });

        resultadoBusqueda.appendChild(productoCard);
    });
}

