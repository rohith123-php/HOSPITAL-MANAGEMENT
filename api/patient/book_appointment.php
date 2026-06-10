<?php
session_start();
require_once '../../config/db.php';
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'patient') {
        echo json_encode(["status" => "error", "message" => "Unauthorized"]);
        exit;
    }
    $patient_id = $_SESSION['user_id'];
    $doctor_id = $_POST['doctor_id'] ?? '';
    $date = $_POST['date'] ?? '';
    $stmt = $conn->prepare("INSERT INTO appointments (patient_id, doctor_id, date) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $patient_id, $doctor_id, $date);
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Appointment booked successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Booking failed: " . $stmt->error]);
    }
    $stmt->close();
}
?>
