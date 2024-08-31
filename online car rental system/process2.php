<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["first_name"]) && isset($_POST["second_name"]) && isset($_POST["last_name"]) && isset($_POST["national_id"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        // Add User
        $first_name = $_POST["first_name"];
        $second_name = $_POST["second_name"];
        $last_name = $_POST["last_name"];
        $national_id = $_POST["national_id"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (first_name, second_name, last_name, national_id, email, password) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);

        if (!$stmt) {
            die("SQL error: " . $mysqli->error);
        }

        $stmt->bind_param("ssssss", $first_name, $second_name, $last_name, $national_id, $email, $password);

        if ($stmt->execute()) {
            echo "User added successfully.";
        } else {
            echo "Error adding user: " . $mysqli->error;
        }

        $stmt->close();


    } elseif (isset($_POST["user_id"]) && isset($_POST["new_email"])) {
        // Update User
        $user_id = $_POST["user_id"];
        $new_email = $_POST["new_email"];

        $sql = "UPDATE user SET email = ? WHERE user_id = ?";
        $stmt = $mysqli->prepare($sql);

        if (!$stmt) {
            die("SQL error: " . $mysqli->error);
        }

        $stmt->bind_param("si", $new_email, $user_id);

        if ($stmt->execute()) {
            echo "User updated successfully.";
        } else {
            echo "Error updating user: " . $mysqli->error;
        }

        $stmt->close();
    } else {
        echo "Invalid request.";
    }
}
?>
