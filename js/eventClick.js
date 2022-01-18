window.addEventListener('load', function() {
    /*const label = document.querySelector('#ejemplo')
    console.log(label)

    label.addEventListener('click', function() {
        console.log('Hice click en un label')
    });
    */
    let btnEnter = document.querySelector('#btnEnter')
    console.log(btnEnter)

    let parrafo = document.createElement('p')
    parrafo.textContent = 0
    let contador = 0
    let contenedor = document.querySelector('#Contador')
    contenedor.appendChild(parrafo)
    btnEnter.addEventListener('click', function(event) {
        //Previene de las acciones por defecto
        event.preventDefault()
            //0
        contador++
        parrafo.textContent = contador

    });

    let btnCancelar = document.querySelector('#btnCancelar')

    btnCancelar.addEventListener('click', function(event) {
        //Previene de las acciones por defecto
        event.preventDefault()
            //0
        contador = 0
        parrafo.textContent = 0

    });
});