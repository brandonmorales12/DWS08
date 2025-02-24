<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["error" => "No autenticado"]);
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM books WHERE user_id = ? ORDER BY due_date";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $title = $data['title'];
    $author = $data['author'];
    $due_date = $data['due_date'] ?? null;

    $sql = "INSERT INTO books (user_id, title, author, due_date) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $title, $author, $due_date]);
    echo json_encode(["message" => "Libro creado con éxito"]);
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $status = $data['status'];

    $sql = "UPDATE books SET status = ? WHERE id = ? AND user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$status, $id, $user_id]);
    echo json_encode(["message" => "Estado del libro actualizado"]);
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];

    $sql = "DELETE FROM books WHERE id = ? AND user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id, $user_id]);
    echo json_encode(["message" => "Libro eliminado"]);
}

//Done 21 Ene 2025
?>
