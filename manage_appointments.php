<?php
include 'database.php';
include 'header.php';

// Ensure the user is an admin
session_start();
if ($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM appointments");
?>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #A98467;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #A98467;
            padding: 5px 10px;
            border: 1px solid #A98467;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #A98467;
            color: white;
        }
    </style>
</head>

<body>
    <main>
        <h2>Manage Appointments</h2>
        <table>
            <tr>
                <th>Appointment ID</th>
                <th>User ID</th>
                <th>Service ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['appointment_id']; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['service_id']; ?></td>
                    <td><?php echo $row['appointment_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <a href="edit_appointment.php?id=<?php echo $row['appointment_id']; ?>">Edit</a>
                        <a href="delete_appointment.php?id=<?php echo $row['appointment_id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </main>
</body>

<?php include 'footer.php'; ?>

