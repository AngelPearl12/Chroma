<?php
include 'database.php';
include 'header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Appointment</title>
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
            background-color: #A98467;
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
        <h2>Add Appointment</h2>
        <form action="handler_appointment.php" method="POST">
            <label for="appointment_date">Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>

            <label for="time_slot">Time Slot:</label>
            <select id="time_slot" name="time_slot" required>
                <option value="" disabled selected>Select a time slot</option>
                <option value="9:00 AM">9:00 AM</option>
                <option value="10:00 AM">10:00 AM</option>
                <option value="11:00 AM">11:00 AM</option>
                <option value="1:00 PM">1:00 PM</option>
                <option value="2:00 PM">2:00 PM</option>
                <option value="3:00 PM">3:00 PM</option>
            </select>

            <label for="customer_name">Customer Name:</label>
            <input type="text" id="customer_name" name="customer_name" placeholder="Enter customer's full name" required>

            <label for="service">Service:</label>
            <select id="service" name="service_id" required>
                <option value="" disabled selected>Select a service</option>
                <option value="Swedish Massage">Swedish Massage</option>
                <option value="Facial Treatments">Facial Treatments</option>
                <option value="Manicure & Pedicure">Manicure & Pedicure</option>
                <option value="Body Scrub">Body Scrub</option>
                <option value="Sauna">Sauna</option>    
            </select>
            <div class="back-link">
                <button type="submit">Add Appointment</button>
                <a href="calendar.php">Back to Calendar</a>
            </div>
        </form>
    </div>
</body>

<?php include 'footer.php'; ?>
