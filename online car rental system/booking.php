<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $carId = $_POST['car_id'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Insert the booking into the database (you need to create a 'bookings' table)
    $sql = "INSERT INTO bookings (car_id, start_date, end_date) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("iss", $carId, $startDate, $endDate);

    if ($stmt->execute()) {
        // Booking successful, you can redirect the user or show a confirmation message
        header("Location: silp.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
