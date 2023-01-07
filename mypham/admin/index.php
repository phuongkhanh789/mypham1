<?php
include ('db.php');
?>
<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['email'];
        $password = $_POST['password'];
        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where email = '$gmail' limit 1";
            $result = mysqli_query($con, $query);
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] == $password)
                    {
                        header("location: admin_panel/index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1772923481.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Login</h1>
        </div>
        <div class="main">
            <form method="POST">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="email">
                </span><br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="text" placeholder="password" name="password">
                </span><br>
                    <button>Login</button>
            </form>
            <p>Forgot Password? <a href="signup.php">Signup</a></p>
        </div>
    </div>
</body>
</html>