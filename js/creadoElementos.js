let enlace = document.createElement('a')
    //Agregando href a nuestro enlace
enlace.href = 'https://google.com'
    //Agregando un texto
enlace.text = 'Enlace a google'
console.log(enlace)
    //Agregar enlace a contenido
    //Seleccionar contenido padre donde ira enlace
const menu = document.querySelector('#menu_principal')
console.log(menu)
menu.appendChild(enlace)