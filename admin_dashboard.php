<?php
include 'database.php';
include 'header.php';

// Ensure the user is an admin
session_start();
if ($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}
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
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        nav {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            background-color: #A98467;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #8c6b54;
        }
    </style>
</head>

<body>
    <main>
        <h2>Admin Dashboard</h2>
        <nav>
            <a href="manage_appointments.php">Manage Appointments</a>
            <a href="manage_reviews.php">Manage Reviews</a>
            <a href="manage_transactions.php">Manage Transactions</a>
        </nav>
    </main>
</body>

<?php include 'footer.php'; ?>

