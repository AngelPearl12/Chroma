<?php
include 'database.php';
include 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Payment</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Embedded CSS for demonstration */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input, select, button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus, select:focus {
            border-color: #A98467;
            outline: none;
        }

        button {
            background-color: #A98467;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #8c6b54;
        }

        .back-link {
            text-align: center;
            margin-top: 15px;
        }

        .back-link a {
            text-decoration: none;
            color: #A98467;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Make a Payment</h2>
        <form method="POST" action="payment_handler.php">
            <label for="appointment">Select Appointment</label>
            <select id="appointment" name="appointment_id" required>
                <option value="" disabled selected>Select an appointment</option>
                <?php
                $result = mysqli_query($conn, "SELECT appointment_id, appointment_date FROM appointments WHERE user_id = {$_SESSION['user_id']}");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['appointment_id']}'>Appointment on {$row['appointment_date']}</option>";
                }
                ?>
            </select>

            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter amount" required>

            <button type="submit">Pay Now</button>
            <div class="back-link">
                <a href="index.php">Back to Home</a>
            </div>
        </form>
    </div>
</body>

<?php include 'footer.php'; ?>
