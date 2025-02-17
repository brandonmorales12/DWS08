<?php
session_start();
include '../../includes/dbconfig.php';

$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$password = $data['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    echo json_encode(["message" => "Login exitoso"]);
} else {
    echo json_encode(["error" => "Email o contraseña incorrectos"]);
}
?>