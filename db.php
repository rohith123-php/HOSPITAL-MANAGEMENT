<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // default XAMPP password is empty
$dbname = 'hospital_management';
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database connection failed: " . $conn->connect_error]));
}
?>
