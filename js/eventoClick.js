window.addEventListener('load', function() {
    const btnEnviar = document.querySelector('#btnEnter');
    console.log(btnEnviar);
    let contador = 0

    const parrafo = document.createElement('p')
    console.log(parrafo)

    btnEnviar.addEventListener('click', function(e) {
        e.preventDefault()
        contador++
        console.log(contador)
        const divContador = document.querySelector('#Contador')
        parrafo.textContent = contador
        divContador.appendChild(parrafo)

    });
});