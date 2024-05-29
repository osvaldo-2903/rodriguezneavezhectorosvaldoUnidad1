function buscarProductos() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    const productos = [
        {
            nombre: 'PC Gamer Xtreme',
            descripcion: 'Potente computadora diseñada para juegos de última generación. Equipada con procesador Intel Core i9, tarjeta gráfica NVIDIA GeForce RTX 3080 y 32GB de RAM.',
            imagen: 'https://www.vhv.rs/dpng/d/480-4803653_avant-garde-gaming-pc-transparent-gaming-pc-png.png'
        },
        {
            nombre: 'Laptop UltraSlim',
            descripcion: 'Portátil ultradelgada y ligera, perfecta para usuarios en movimiento. Con pantalla de 14 pulgadas, procesador Intel Core i7 y 512GB de almacenamiento SSD.',
            imagen: 'https://tienda.starware.com.ar/wp-content/uploads/2021/05/auriculares-gamer-headset-eksa-e1000-v-surround-71-rgb-pc-ps4-verde-2331-3792-1536x1536.jpg'
        },
        {
            nombre: 'PC Todo en Uno',
            descripcion: 'Computadora compacta con todo integrado en la pantalla. Ideal para espacios reducidos. Incluye procesador AMD Ryzen 5, pantalla táctil de 24 pulgadas y 1TB de almacenamiento.',
            imagen: 'https://th.bing.com/th/id/OIP.gLkoxXfO0qOq3h3fuF-ElQHaE8?pid=ImgDet&rs=1'
        },
        {
            nombre: 'Mini PC Multimedia',
            descripcion: 'Pequeña pero potente, esta mini PC es perfecta para entretenimiento en el hogar. Con procesador Intel Core i5, gráficos integrados Intel UHD Graphics y 8GB de RAM.',
            imagen: 'https://th.bing.com/th/id/OIP.JQwXHw9wSSWvVt6J0b-hmQHaE6?pid=ImgDet&rs=1'
        },
        {
            nombre: 'Estación de Trabajo Profesional',
            descripcion: 'Diseñada para trabajo intensivo y aplicaciones profesionales. Equipada con procesador AMD Ryzen Threadripper, tarjeta gráfica NVIDIA Quadro RTX 5000 y 64GB de RAM.',
            imagen: 'https://th.bing.com/th/id/R.51ee0c7b20643e6ee08e8196a6a7a2f6?rik=T3qEInnyqH0Wlg&pid=ImgRaw&r=0'
        },
        {
            nombre: 'Laptop Convertible 2 en 1',
            descripcion: 'Versátil computadora portátil con pantalla táctil que se puede convertir en una tablet. Cuenta con procesador Intel Core i7, pantalla de 15 pulgadas y lápiz óptico.',
            imagen: 'https://th.bing.com/th/id/OIP.61zRoVwJ81GdpJ6omtRUJgHaE6?pid=ImgDet&rs=1'
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

