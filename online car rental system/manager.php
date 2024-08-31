<?php
require("database.php");

// Function to add an account
function addAccount($name, $gender, $phone_No, $email, $position) {
    global $mysqli;
    
    $sql = "INSERT INTO employee (name, gender, phone_No, email, position) 
            VALUES ('$name', '$gender', '$phone_No', '$email', '$position')";
    
    if ($mysqli->query($sql) === TRUE) {
        return "Account added successfully";
    } else {
        return "Error: " . $mysqli->error;
    }
}

// Function to delete an account
function deleteAccount($id) {
    global $mysqli;
    
    $sql = "DELETE FROM employee WHERE employee_ID=$id";
    
    if ($mysqli->query($sql) === TRUE) {
        return "Account deleted successfully";
    } else {
        return "Error: " . $mysqli->error;
    }
}

// Function to update an account
function updateAccount($id, $name, $gender, $phone_No, $email, $position) {
    global $mysqli;
    
    $sql = "UPDATE employee SET name='$name', gender='$gender', phone_No='$phone_No', email='$email', position='$position' WHERE employee_ID=$id";
    
    if ($mysqli->query($sql) === TRUE) {
        return "Account updated successfully";
    } else {
        return "Error: " . $mysqli->error;
    }
}

// Example usage for adding an account
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone_No = $_POST['phone_No'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $result = addAccount($name, $gender, $phone_No, $email, $position);
}

// Example usage for deleting an account
if (isset($_POST['delete'])) {
    $id = $_POST['employee_ID'];
    $result = deleteAccount($id);
}

// Example usage for updating an account
if (isset($_POST['update'])) {
    $id = $_POST['employee_ID'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone_No = $_POST['phone_No'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $result = updateAccount($id, $name, $gender, $phone_No, $email, $position);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Account Management</title>
    <link rel="stylesheet" href="manager.css">
</head>
<body>
<div>
    <h1>MANAGER DASHBOARD</h1>
</div>
<div class="box">
<h2>Add Account</h2>
<form method="post" action="manager.php">
    Name: <input type="text" name="name"><br>
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br>
    Phone Number: <input type="text" name="phone_No"><br>
    Email: <input type="text" name="email"><br>
    Position: <input type="text" name="position"><br>
    <input class="batani" type="submit" name="add" value="Add">
</form>

    <h2>Delete Account</h2>
    <form method="post" action="manager.php">
        Employee ID: <input type="text" name="employee_ID"><br>
        <input class="batani" type="submit" name="delete" value="Delete">
    </form>

    <h2>Update Account</h2>
<form method="post" action="manager.php">
    Employee ID: <input type="text" name="employee_ID"><br>
    Name: <input type="text" name="name"><br>
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br>
    Phone Number: <input type="text" name="phone_No"><br>
    Email: <input type="text" name="email"><br>
    Position: <input type="text" name="position"><br>
    <input class="batani" type="submit" name="update" value="Update">
</form>
</div>
<footer>online car rental system &copy2023 all right are reserved</footer>

    <?php
    if (isset($result)) {
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
