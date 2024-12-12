<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Appointment Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
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
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 20px;
        }

        .calendar-day {
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f4f4f4;
            padding: 15px;
            text-align: center;
            position: relative;
        }

        .calendar-day:hover {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        .appointment {
            margin-top: 10px;
            background: #e1f5fe;
            border-radius: 5px;
            padding: 5px;
            font-size: 12px;
            text-align: center;
        }

        .add-link {
            text-align: center;
            margin-top: 20px;
        }

        .add-link a {
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .add-link a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Appointment Calendar</h2>
        <div class="calendar">
            <?php
            // Fetch appointments from database (via handler)
            include 'calendar_handler.php';

            // Render days of the month
            $days_in_month = date('t');
            for ($i = 1; $i <= $days_in_month; $i++) {
                echo "<div class='calendar-day'>";
                echo "<strong>$i</strong>";

                // Display appointments for the day
                if (isset($appointments[$i])) {
                    foreach ($appointments[$i] as $appointment) {
                        echo "<div class='appointment'>{$appointment['time_slot']} - {$appointment['service']}</div>";
                    }
                }

                echo "</div>";
            }
            ?>
        </div>
        <div class="add-link">
            <a href="appointment.php">Add Appointment</a>
        </div>
    </div>
</body>