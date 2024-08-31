<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User Accounts</title>
    <link rel="stylesheet" href="manage.css">
</head>
<body>
    <div class="call">
    <h1><b><center><i>MANAGE USER ACCOUNTS</i></center></b></h1>
    </div>
    <div class="box">
        <form action="process2.php" method="post">
            <h2>Add User</h2>
            <div>
                <label for="first_name">First Name</label><br>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div>
                <label for="second_name">Second Name</label><br>
                <input type="text" id="second_name" name="second_name" required>
            </div>

            <div>
                <label for="last_name">Last Name</label><br>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div>
                <label for="national_id">National ID</label><br>
                <input type="text" id="national_id" name="national_id" required>
            </div>

            <div>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Add User</button>
        </form>

        <form action="process2.php" method="post">
            <h2>Update User</h2>
            <div>
                <label for="user_id">User ID</label><br>
                <input type="text" id="user_id" name="user_id" required>
            </div>

            <div>
                <label for="new_email">New Email</label><br>
                <input type="email" id="new_email" name="new_email" required>
            </div>

            <button type="submit">Update User</button>
        </form>
    </div>
</body>
</html>
