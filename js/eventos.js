console.log('1')

window.addEventListener('load', function() {
    console.log('2')
    const titulo = document.querySelector('#titulo')
    console.log(titulo)
});

window.onload = (function() {
    console.log('3')
});

window.addEventListener('DOMContentLoaded', function() {
    console.log('4')
});

console.log('5')