<?php
if(!isset($pdo)){
    include '../includes/dbconfig.php';
}
session_start();

//Configuración de errores
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/errors.log');


$data = json_decode(file_get_contents("php://input"), true);
$DNI = $data['DNI'];
$password = $data['password'];
$userType = $data['userType'];

if($userType == "alumno") {
$sql = "SELECT * FROM alumnos WHERE DNI = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$DNI]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if($userType == "profesor") {
    $sql = "SELECT * FROM profesores WHERE DNI = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$DNI]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

error_log($user['password']);
error_log($user['id']);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['tipo_usuario'] = $userType;
    echo json_encode(['userId' => $user['id'], 'message' => 'Inicio de sesión exitoso.']);
} else {
    echo json_encode(["error" => "Credenciales incorrectas"]);
}
?>
