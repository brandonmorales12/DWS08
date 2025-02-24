<?php
session_start();
include '../includes/dbconfig.php';

$data = json_decode(file_get_contents("php://input"), true);
$usuario = $data['usuario'];
$password = $data['password'];
$rol = $data['rol'];

$sql = "SELECT * FROM users WHERE usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$usuario]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['rol'] = $rol;
    echo json_encode(["message" => "Login exitoso", "rol" => $rol]);
} else {
    echo json_encode(["error" => "Usuario o contraseña incorrectos"]);
}
?>