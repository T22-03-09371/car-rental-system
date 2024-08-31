<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query the database to check if the user exists
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        // Check if the user's email matches the specific email
        if ($email === "kwekamoses47@gmail.com") {
            // Redirect this user to home1.php
            header("Location: pp.php");
            exit;
        }elseif($email === "kwekamoses10@gmail.com") {
                // Redirect this user to home1.php
                header("Location: manager.php");
                exit;
            } else {
            // Redirect other users to home.php
            header("Location: home1.php");
            exit;
        }
    } else {
        echo "Login failed. Please check your email and password.";
    }

    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Car Rental System</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="call">
        <center>
    <h2>online car rental System</h2>
        </center>
    </div>
    <div class="box">
        <form method="POST">
            <div>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" class="small" >
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" class="small" >
            </div>
            <button type="submit">Login</button>
            <p>Don't you have account? <a href="form.php">Sign up</a></p>
        </form>
    </div>
    <marquee>Welcome to the Online Car Rental Company for the best services</marquee>
</body>
</html>
