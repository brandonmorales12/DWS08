const navbar_profes = document.getElementById("navbar-profesor");
const navbar_alumno = document.getElementById("navbar-alumno");
const navbar_invitado = document.getElementById("navbar-invitado");

function goToNewPage(page_url) {
    console.log(page_url);
    try {
        window.location.replace(page_url);        
    } catch (error) {
        window.location.replace('../../src/404.php');
    throw new Error("No se ha podido ir a la página");
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

function navbarChanges(active) {
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