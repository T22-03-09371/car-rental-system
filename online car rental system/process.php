<?php
require("database.php"); 

if (empty($_POST["first_name"])) {
    die("Name is required");
}

if (strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])){
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["new_password"]){
    die("Passwords do not match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $sql = "INSERT INTO user (first_name, second_name, last_name, national_id, phone_number, gender, birthdate, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $mysqli->prepare($sql);
    if (!$stmt) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param(
        "sssssssss",
        $_POST["first_name"],
        $_POST["second_name"],
        $_POST["last_name"],
        $_POST["national_id"],
        $_POST["phone_number"],
        $_POST["gender"], 
        $_POST["birthdate"],
        $_POST["email"],
        $password_hash 
    );
    }

    if ($stmt->execute()) {
        $stmt->close();
        $mysqli->close();
        
        header("location:  slip.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
?>
