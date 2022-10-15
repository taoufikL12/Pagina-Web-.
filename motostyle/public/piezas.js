const imagenes = document.querySelectorAll('img');

imagenes.forEach(imagen=>{
    imagen.src = imagen.dataset.src;

});


