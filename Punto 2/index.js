
fetch('https://fakestoreapi.com/products')
  .then(response => response.json())
  .then(data => {
    productos = data;
    console.log('Productos: ', productos);
    viewProduc(productos);
  })
  .catch(error => {
    console.error('Error al conectar con la API:', error);
  });

function viewProduc(productos) {
  const productosLista = document.getElementById('productos-lista');
  productosLista.innerHTML = '';
  productos.forEach(producto => {
    const divProducto = document.createElement('div');
    divProducto.classList.add('product');
    divProducto.innerHTML = `
      <h3>${producto.title}</h3>
      <p><strong>Precio:</strong> $${producto.price}</p>
      <p><strong>Categoría:</strong> ${producto.category}</p>
      <img src="${producto.image}" alt="${producto.title}">
    `;
    productosLista.appendChild(divProducto);
  });
}

function filtrarProductos() {
  const searchTerm = document.getElementById('search').value.toLowerCase();
  const productosFiltrados = productos.filter(producto => 
    producto.category.toLowerCase().includes(searchTerm)
  );
  viewProduc(productosFiltrados);
}
