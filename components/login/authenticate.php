<?php
session_start();
include("includes/config.php");

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para verificar las credenciales del usuario
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Usuario autenticado correctamente
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    // Credenciales incorrectas
    echo "Username or password is incorrect.";
}
?>