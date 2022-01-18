//Seleccionando por IDs
const titulo = document.querySelector('#titulo')

console.log(titulo)

titulo.textContent = 'Hola mundo'

//Seleccionando por Class
const titulo2 = document.querySelector('.barra-inferior h1')
console.log(titulo2)

//Seleccionando con queryselectorAll
const titulo3 = document.querySelectorAll('.barra-inferior h1')
console.log(titulo3)

titulo3[1].textContent = 'Esto se selecciono con queryselectorall'

//Antiguamente
const titulo4 = document.getElementById('titulo')
console.log(titulo4)