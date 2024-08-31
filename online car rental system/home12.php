<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="car1.css">
</head>
<body>
    <div class="mac">
    <div class="punch">
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="form.php" class="car1">CAR LIST</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="term.html">SERVICES</a></li>
                <li><a href="login.php">BOOK</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                
            </ul>
        </div>
    </div>

    
    <div class="car-list">
        <?php
        // Query to fetch car records
        $sql = "SELECT * FROM cars";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='car'>";
                echo "<p>";
                echo "Model: " . htmlspecialchars($row['model']) . "<br>";
                echo "Fuel: " . htmlspecialchars($row['fuel']) . "<br>";
                echo "Caption: " . htmlspecialchars($row['caption']) . "<br>";
                echo "Price per day: " . htmlspecialchars($row['price']) . "<br>";
                echo "<img src='uploads/" . htmlspecialchars($row['image_filename']) . "'><br>";

                
                echo "<button onclick='bookCar(" . $row['car_id'] . ")'>Book Now</button>";

                echo "</p>";
                echo "</div>";
            }
        } else {
            echo "Error fetching car records: " . mysqli_error($mysqli);
        }
        ?>
    </div>
        <?php
        require("database.php");

        // Query to fetch car records
        $sql = "SELECT * FROM cars";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='car'>";
                echo "<p>";
                echo "Model: " . htmlspecialchars($row['model']) . "<br>";
                echo "Fuel: " . htmlspecialchars($row['fuel']) . "<br>";
                echo "Caption: " . htmlspecialchars($row['caption']) . "<br>";
                echo "Price per day: $" . htmlspecialchars($row['price']) . "<br>";
                echo "<img src='uploads/" . htmlspecialchars($row['image_filename']) . "'><br>";
                
                // Booking form for users
                echo "<form method='post' action='process_booking.php'>";
                echo "<input type='hidden' name='car_id' value='" . $row['car_id'] . "'>";
                echo "<label for='start_date'>Start Date:</label>";
                echo "<input type='date' name='start_date' required><br>";
                echo "<label for='end_date'>End Date:</label>";
                echo "<input type='date' name='end_date' required><br>";
                echo "<input type='submit' name='submit' value='Book Now' class='book'>";
                echo "</form>";

                echo "</p>";
                echo "</div>";
            }
        } else {
            echo "Error fetching car records: " . mysqli_error($mysqli);
        }
        ?>
    </div>

    <script>
        // JavaScript code for handling car selection and booking
        function bookCar(carId) {
        
        window.location.href = 'inner.php?car_id=' + carId;
    }
    </script>
</body>
</html>
