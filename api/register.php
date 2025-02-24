<?php
if(!isset($pdo)){
include '../includes/dbconfig.php';
}

$data = json_decode(file_get_contents("php://input"), true);
$nombre = $data['nombre'];
$apellido = $data['apellido'];
$DNI = $data['DNI'];
$userType = $data['userType'];
$password = password_hash($data['password'], PASSWORD_DEFAULT);

if($userType == "Profesor"){
    $sql = "SELECT * FROM profesores WHERE DNI = ?";
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute([$DNI]);
        $validDNI = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo json_encode(["error" => "Error al registrar el usuario: " . $e->getMessage()]);
    }
    if(!empty($validDNI)){
        echo json_encode(["error" => "DNI ya registrado"]);
    }
    
    $sql = "INSERT INTO profesores (nombre, apellido, DNI, password) VALUES (?, ?, ?, ?)";
}
else if($userType == "Alumno"){
    $sql = "SELECT * FROM alumnos WHERE DNI = ?";
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute([$DNI]);
        $validDNI = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo json_encode(["error" => "Error al registrar el usuario: " . $e->getMessage()]);
    }
    if(!empty($validDNI)){
        echo json_encode(["error" => "DNI ya registrado"]);
    }
    $sql = "INSERT INTO alumnos (nombre, apellido, DNI, password) VALUES (?, ?, ?, ?)";
}
else {
    echo json_encode(["message" => "ERROR EN LA SQL"]);
}

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([$nombre, $apellido, $DNI, $password]);
    echo json_encode(["message" => "Registrado con éxito"]);
} catch (Exception $e) {
    echo json_encode(["error" => "Error al registrar el usuario: " . $e->getMessage()]);
}
?>
