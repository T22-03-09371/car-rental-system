<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];

    // Check if the user exists in the database
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    
    if (!$stmt) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();  
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Generate a unique token
        $token = bin2hex(random_bytes(32));

        // Store the token, email, and timestamp in the database
        $timestamp = time();
        $sql = "INSERT INTO password_reset (email, token, timestamp) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        
        if (!$stmt) {
            die("SQL error: " . $mysqli->error);
        }

        $stmt->bind_param("ssi", $email, $token, $timestamp);
        $stmt->execute();

        // Send a password reset email with a link including the token
        $reset_link = "reset password.php?token=$token";
        // Send the email here (use a library like PHPMailer or mail function)

        echo "Password reset link has been sent to your email.";
    } else {
        echo "User not found.";
    }
    
    $stmt->close();
    $mysqli->close();
}
?>
