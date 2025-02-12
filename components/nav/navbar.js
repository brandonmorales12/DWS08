const navbar_profes = document.getElementById("navbar-profesor");
const navbar_alumno = document.getElementById("navbar-alumno");
const navbar_invitado = document.getElementById("navbar-invitado");

function goToNewPage(page_url) {
    try {
    window.location.replace(page_url);        
    } catch (error) {
    throw new Error("No se ha podido ir a la página");
    }
}

function navbarChanges(active) {

    console.log(navbar_profes);
    console.log(navbar_alumno);
    console.log(navbar_invitado);

    if(active == "alumno"){
        navbar_profes.hidden = true;
        navbar_alumno.hidden = false;
        navbar_invitado.hidden = true;
    }
    else if (active == "profesor"){
        navbar_profes.hidden = false;
        navbar_alumno.hidden = true;
        navbar_invitado.hidden = true;
    }
    else {
        navbar_profes.hidden = true;
        navbar_alumno.hidden = true;
        navbar_invitado.hidden = false;
    }
}