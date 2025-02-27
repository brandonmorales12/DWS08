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
error_log("DATOS RECIBIDOS");
error_log($data['DNI']);
error_log($data['userType']);


if (!isset($data['DNI']) || !isset($data['password'])) {
    echo json_encode(["error" => "Faltan campos requeridos."]);
    exit;
   }

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

//error_log($user['password']);
error_log("INIT SESSION: " . date('d/m H:i'));
error_log($user['id'] . " " . $DNI);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    error_log('SESION INICIADA PARA: ' . $_SESSION['user_id']);
    setcookie("tipoUsuario", $userType, time() + 86400, "/"); //One day
    setcookie("user_id", $user['id'], time() + 86400, "/"); //One day
    echo json_encode(['userId' => $user['id'], 'message' => 'Inicio de sesión exitoso.']);
} else {
    echo json_encode(["error" => "Credenciales incorrectas"]);
}
?>
