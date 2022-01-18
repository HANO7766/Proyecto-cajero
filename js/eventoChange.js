window.addEventListener('load', function() {
    const txtNombre = document.querySelector('#txtNombre')

    console.log(txtNombre)

    txtNombre.addEventListener('change', function(e) {
        let valor = e.target.value
        console.log(`Escribiendo...${valor}`)
    });

    txtNombre.addEventListener('input', function(e) {
        let valor = e.target.value
        console.log(`Escribiendo...${valor}`)
    });

});