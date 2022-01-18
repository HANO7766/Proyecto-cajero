let nuevoEnlace = document.createElement('a')

console.log(nuevoEnlace)

nuevoEnlace.href = 'https://google.com'

console.log(nuevoEnlace)

nuevoEnlace.text = 'Nuevo enlace'

console.log(nuevoEnlace)

const menu = document.querySelector('.menu')

console.log(menu)

menu.appendChild(nuevoEnlace)