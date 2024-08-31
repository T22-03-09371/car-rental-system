<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Car Rental System</title>
    <link rel="stylesheet" href="lulu.css">
</head>
<body>
    <div class="call">
    <h1><b><center>ONLINE CAR RENTAL SYSTEM(OCRS)</center></b></h1>
    </div>
    <div class="box">
     <form action="process.php" method="post">
         <marquee class="punch" >REGISTRATION FORM</marquee>
        <div>
            <label for="first_name">First Name</label><br>
            <input type="text" class="small" id="first_name" name="first_name"><br>
        </div>

        <div>
            <label for="second_name">Second Name</label><br>
            <input type="text" id="second_name" class="small" name="second_name"><br>
        </div>

        <div>
            <label for="last_name">Last Name</label><br>
            <input type="text" id="last_name" class="small" name="last_name"><br>
        </div>

        <div>
            <label for="national_id">National ID Number</label><br>
            <input type="text" id="national_id" class="small" name="national_id"><br>
        </div>

        <div>
            <label for="phone_number">Phone Number</label><br>
            <input type="text" id="phone_number" class="small" name="phone_number"><br>
        </div>
        
        <div>
            <label>Gender</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
        </div>

        <div>
            <label for="birthdate">Birthdate</label><br>
            <input type="date" id="birthdate" class="small" name="birthdate"><br>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" class="small" name="email"><br>
        </div>

        <div>
            <label for="password">Password</label><br>
            <input type="password" id="password" class="small" name="password"><br>
        </div>

        <div>
            <label for="new_password">Confirm Password</label><br>
            <input type="password" id="new_password" class="small" name="new_password"><br><br>
        </div>

        <button type="submit" id="submit">Signup</button>
        <p>Already registered? <a href="login.php">Login</a></p>
     </form>
    </div>
</body>
</html>
