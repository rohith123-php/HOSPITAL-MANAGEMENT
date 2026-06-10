<?php
require_once '../../config/db.php';
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
    if (empty($name) || empty($email) || empty($_POST['password'])) {
        echo json_encode(["status" => "error", "message" => "Name, email, and password are required."]);
        exit;
    }
    $stmt = $conn->prepare("INSERT INTO patients (name, age, gender, phone, email, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissss", $name, $age, $gender, $phone, $email, $password);
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Patient registered successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Registration failed: " . $stmt->error]);
    }
    $stmt->close();
}
?>
