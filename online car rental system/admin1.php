<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="">
    <style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    
    button {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>

</head>
<body>
    <center>
        <h1>ONLINE CAR RENTAL SYSTEM</h1>

        <!-- Left menu and booking management -->
        <div class="gari">
            <h2>Employee Dashboard</h2>
            <div class="booking-list">
                <h3>Booking Requests</h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Car Model</th>
                            <th>Fuel</th>
                            <th>Price</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("database.php");

                        // Query to fetch booking records with car details
                        $sql = "SELECT r.booking_id, c.model, c.fuel, c.price, r.start_date, r.end_date FROM renting r INNER JOIN cars c ON r.car_id = c.car_id";
                        $result = mysqli_query($mysqli, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['model']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['fuel']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['start_date']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['end_date']) . "</td>";
                                echo "<td>";
                                echo "<button onclick='acceptBooking(" . $row['booking_id'] . ")'>Accept</button>";
                                echo "<button onclick='declineBooking(" . $row['booking_id'] . ")'>Decline</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Error fetching booking records: " . mysqli_error($mysqli) . "</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </center>

    <script>
        // JavaScript code for handling admin booking management
        function acceptBooking(bookingId) {
            // Implement the logic to accept the booking (e.g., update the status in the database)
            alert("Booking accepted: " + bookingId);
        }

        function declineBooking(bookingId) {
            // Implement the logic to decline the booking (e.g., remove it from the database)
            alert("Booking declined: " + bookingId);
        }
    </script>
</body>
</html>
