document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        const origen = document.getElementById('origen').value;
        const destino = document.getElementById('destino').value;

        if (!origen || !destino) {
            alert('Por favor, completa todos los campos.');
            event.preventDefault();  // Evita que se envíe el formulario
        }
    });
});
