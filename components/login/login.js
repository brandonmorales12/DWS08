const loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', async (event) => {
    event.preventDefault();
    const usuario = document.getElementById('USUARIO').value;
    const password = document.getElementById('CLAVE_P').value;
    const rol = document.getElementById('ROL').value;

    const response = await fetch('authenticate.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ usuario, password, rol }),
    });

    const result = await response.json();
    const mensajeDiv = document.getElementById('MENSAJE');
    if (result.message) {
        mensajeDiv.style.color = 'green';
        mensajeDiv.innerText = result.message;
        if (result.rol === 'alumno') {
            window.location.href = 'pagina_alumno.php';
        } else if (result.rol === 'profesor') {
            window.location.href = 'pagina_profesor.php';
        }
    } else if (result.error) {
        mensajeDiv.style.color = 'red';
        mensajeDiv.innerText = result.error;
    }
});