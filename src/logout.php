<?php
session_start();
session_destroy();

setcookie("tipoUsuario", "", time() - 3600, "/");

echo
"<script>
    localStorage.removeItem('userId');
    localStorage.removeItem('userType');
    alert('Sesión cerrada correctamente');
    window.location.replace(\"/src/landing.php\");  
</script>";


//Done 21 Ene 2025
?>
