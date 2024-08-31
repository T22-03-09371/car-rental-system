<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $model = $_POST["model"];
    $fuel = $_POST["fuel"];
    $caption = $_POST["caption"];
    $price = $_POST["price"];

    if ($_FILES["image"]["error"] === 0) {
        $imageFileName = handleImageUpload(); 

        
        $sql = "INSERT INTO cars (model, fuel, caption, price, image_filename) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($mysqli, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $model, $fuel, $caption, $price, $imageFileName);
            if (mysqli_stmt_execute($stmt)) {
                // Data inserted successfully
                echo "Car details uploaded successfully.";
            } else {
                echo "Error inserting data: " . mysqli_error($mysqli);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($mysqli);
        }
    } else {
        echo "Error uploading the image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <center>
        <h1>ONLINE CAR RENTAL SYSTEM</h1>
        <div class="call">
            <h2>Employee Dashboard</h2>
            </div>
            <div class="box">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="model">Model:</label><br>
                <input type="text" name="model" required><br>

                <label for="fuel">Fuel:</label><br>
                <input type="text" name="fuel" required><br>

                <label for="caption">Caption:</label><br>
                <input type="text" name="caption" required><br>

                <label for="price">price:</label><br>
                <input type="text" name="price" required><br>

                <label for="image">Image:</label><br>
                <input type="file" name="image" accept="image/*" required><br><br>

                <button type="submit">Upload</button>
            </form>
            <footer> Online car rental system, All right reserved &copy2023</footer>
        </div>
    </center>
</body>
</html>

