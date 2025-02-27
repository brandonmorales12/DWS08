const asignaturasContainer = document.getElementById('asignaturasContainer');
const apiUrl = '../api/';
// APUNTARSE A UNA ASIGNATURA
// Aquí tiene que ir un addEventListener a un botón en cada
// una de las asignaturas. 

// SELECT ASIGNATURAS
// Cargar asignaturas desde BD, lanzando un GET a /api/asignaturas
async function loadAsignaturas() {
    const id_profesor = localStorage.getItem("userId");
    
    //GET ASIGNATURAS GENERAL
    const response = await fetch('../api/asignaturas.php');
    const asignaturas = await response.json();
    
    // Limpiar el contenedor de asignaturas
    asignaturasContainer.innerHTML = '';

    if (asignaturas.error) {
        asignaturasContainer.innerHTML = '<li>Error al cargar las asignaturas.</li>';
        return;
    }
    const asignaturas_apuntado = await getProfesor_Asignatura(id_profesor);
    // Renderizar asignaturas
    asignaturas.forEach(asignatura => {
        const li = document.createElement('li');
        let $apuntado = false;
        asignaturas_apuntado.forEach(asignatura_ap => {
            if(asignatura_ap.id == asignatura.id) 
                {$apuntado = true; return;}
            $apuntado = false;
        });
        li.innerHTML = `
            <strong>${asignatura.nombre}</strong> - ${asignatura.num_horas} 
            [${($apuntado ? 'Enseñando' : '')}]
            <button onclick="updateasignatura('${id_profesor}', '${asignatura.id}')">
                ${$apuntado ? 'Borrarme' : 'Apuntarme'}
            </button>
        `;
        asignaturasContainer.appendChild(li);
    });
}

async function getProfesor_Asignatura(id_profesor){
    const response = await fetch(apiUrl + 'asignaturas.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id_profesor }),
    });
    const asignaturas_apuntado = await response.json();
    return asignaturas_apuntado;
}

async function updateasignatura(id_profesor, id_asignatura){
    const response = await fetch(apiUrl + 'asignaturas.php', {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id_profesor, id_asignatura }),
    });
    const result = await response.json();
    if(result.message || result.error)
        alert(result.message || result.error);
    loadTasks(); // Recargar las tareas
}


// SHOW ASIGNATURAS