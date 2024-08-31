<?php
require("database.php");

// Function to generate a unique control number
function generateControlNumber() {
    // Get the current timestamp (in seconds)
    $timestamp = time();
    
    // Generate a random 6-digit number
    $randomNumber = mt_rand(100000, 999999);
    
    // Combine the timestamp and random number to create a 12-digit control number
    $controlNumber = $timestamp . $randomNumber;
    
    return $controlNumber;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $carId = $_POST['car_id'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Retrieve the price of the selected car from the database
    $sql = "SELECT price FROM cars WHERE car_id = '$carId'";
    $result = mysqli_query($mysqli, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pricePerDay = $row['price']; // Get the price from the database

        // Calculate the number of days between the start and end dates
        $startDateObj = new DateTime($startDate);
        $endDateObj = new DateTime($endDate);
        $numberOfDays = $startDateObj->diff($endDateObj)->days;

        // Calculate the total cost
        $totalCost = $pricePerDay * $numberOfDays;

        // Generate a unique control number
        $controlNumber = generateControlNumber();
        
        $sql = "INSERT INTO renting (car_id, start_date, end_date, control_number) 
                VALUES ('$carId', '$startDate', '$endDate', '$controlNumber')";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            // Redirect to "message.php" with control number and total cost as query parameters
            header("Location: message.php?control_number=" . $controlNumber . "&total_cost=" . $totalCost);
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    } else {
        echo "Error retrieving car information from the database.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Car</title>
     <style>
       .box {
            border: 1px ;
            text-align: center;
            padding: 80px;
            margin-left:400px;
            margin-right:400px;
            background: rgb(235, 234, 227);
        }
        .call {
            background: rgb(94, 150, 150);
            padding: 8px;
            margin-left: 400px;
            margin-right: 400px;
            border-radius: 5px;
            text-align: center;
            color:aliceblue;
        }
        .book {
            background: rgb(94, 94, 248);
            font-size: 20px;
        }
        input {
            font-size: 22px;
        }
        label {
            font-size: 22px;
        }
    </style>
</head>
<body>
    <div class="call">
        <h1>Book a Car</h1>
    </div>
    <div class="box">
        <form method="post">
            <input type="hidden" name="car_id" value="<?php echo $_GET['car_id'] ?>">
            <label for="start_date">Start Date:</label><br>
            <input type="date" id="start_date" name="start_date" required><br>
            
            <label for="end_date">End Date:</label><br>
            <input type="date" id="end_date" name="end_date" required><br>
            
            <input type="submit" name="submit" value="book" class="book">
        </form>
    </div>
    
    <script>
        function validateForm() {
            var startDate = new Date(document.getElementById("start_date").value);
            var endDate = new Date(document.getElementById("end_date").value);
            var currentDate = new Date();
            
            if (startDate < currentDate) {
                alert("Start Date must be today or later.");
                return false;
            }
            
            if (endDate <= startDate) {
                alert("End Date must be beyond the Start Date.");
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>
