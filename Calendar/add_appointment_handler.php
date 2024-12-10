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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $appointment_date = $_POST['appointment_date'];
    $time_slot = $_POST['time_slot'];
    $customer_name = $_POST['customer_name'];
    $service = $_POST['service'];

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO appointments (appointment_date, time_slot, customer_name, service) VALUES (:appointment_date, :time_slot, :customer_name, :service)");
    $stmt->execute([
        'appointment_date' => $appointment_date,
        'time_slot' => $time_slot,
        'customer_name' => $customer_name,
        'service' => $service,
    ]);

    // Redirect to calendar
    header("Location: calendar.php");
    exit;
}
?>
