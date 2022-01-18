window.addEventListener('load', function() {
    let txtNombre = document.querySelector('#txtNombre')

    txtNombre.addEventListener('change', function() {
        console.log('Usuario esta escribiendo')
    });

    txtNombre.addEventListener('input', function(event) {
        console.log(event.target.value)
    });
});