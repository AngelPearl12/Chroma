<?php
// Database connection
$host = 'localhost';
$dbname = 'spa_scheduling';
$username = 'root'; // Update with your MySQL username
$password = ''; // Update with your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch appointments for the current month
$current_month = date('Y-m');
$stmt = $pdo->prepare("SELECT * FROM appointments WHERE appointment_date LIKE :month");
$stmt->execute(['month' => "$current_month%"]);
$appointments = [];

// Organize appointments by day
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $day = (int)date('j', strtotime($row['appointment_date']));
    $appointments[$day][] = $row;
}
?>
