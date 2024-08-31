<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        .container {
            text-align: center;
            margin-top: 100px;
        }
        h1 {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Confirmation</h1>
        <?php
        // Check if the control number and total cost are provided in the query parameters
        if (isset($_GET['control_number']) && isset($_GET['total_cost'])) {
            $controlNumber = $_GET['control_number'];
            $totalCost = $_GET['total_cost'];

            echo "<p>Your booking was successful.</p>";
            echo "<p>Your Control Number: <strong>$controlNumber</strong></p>";
            echo "<p>Total Amount to Pay: $totalCost USD</p>";
        } else {
            echo "<p>Missing required parameters.</p>";
        }
        ?>
        <p>Thank you for booking with us!</p>
    </div>
</body>
</html>
