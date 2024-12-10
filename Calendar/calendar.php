<?php
// Database connection
$host = 'localhost';
$dbname = 'spa_scheduling';
$username = 'calendar'; // Update as needed
$password = ''; // Update as needed

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch appointments
function getAppointments($pdo, $year, $month) {
    $stmt = $pdo->prepare("SELECT appointment_date, time_slot, customer_name, service FROM appointments WHERE YEAR(appointment_date) = :year AND MONTH(appointment_date) = :month");
    $stmt->execute(['year' => $year, 'month' => $month]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Generate the calendar
function generateCalendar($year, $month, $appointments) {
    $daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    $firstDayOfMonth = date('w', strtotime("$year-$month-01"));
    $daysInMonth = date('t', strtotime("$year-$month-01"));

    echo "<table border='1' style='width: 100%; text-align: center;'>";
    echo "<tr>";
    foreach ($daysOfWeek as $day) {
        echo "<th>$day</th>";
    }
    echo "</tr><tr>";

    // Padding for the first week
    for ($i = 0; $i < $firstDayOfMonth; $i++) {
        echo "<td></td>";
    }

    for ($day = 1; $day <= $daysInMonth; $day++) {
        $date = "$year-$month-" . str_pad($day, 2, '0', STR_PAD_LEFT);

        echo "<td>";
        echo "<strong>$day</strong><br>";

        // Show appointments
        foreach ($appointments as $appointment) {
            if ($appointment['appointment_date'] == $date) {
                echo "<div style='font-size: small;'>";
                echo $appointment['time_slot'] . "<br>" . $appointment['customer_name'] . "<br>" . $appointment['service'];
                echo "</div>";
            }
        }

        echo "</td>";

        // Break row on Sunday
        if ((($day + $firstDayOfMonth) % 7) == 0 && $day != $daysInMonth) {
            echo "</tr><tr>";
        }
    }

    // Padding for the last week
    for ($i = ($daysInMonth + $firstDayOfMonth) % 7; $i < 7 && $i > 0; $i++) {
        echo "<td></td>";
    }

    echo "</tr></table>";
}

// Display the calendar
$year = date('Y');
$month = date('m');
$appointments = getAppointments($pdo, $year, $month);
generateCalendar($year, $month, $appointments);
?>
