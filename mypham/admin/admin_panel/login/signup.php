<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['fname'];
        $lastname = $_POST['lname'];
        $gmail = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into form (fname, lname, email, password) values ('$user_name','$lastname','$gmail','$password')";
            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Document</title>
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method="POST">
            <label>Username</label>
            <input type="text" name="fname" required>
            <label>Full Name</label>
            <input type="text" name="lname" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our</p>
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="index.php">Login Here</a></p>
    </div>
</body>
</html>