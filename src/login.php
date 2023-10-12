<?php
    include 'connect.php';
    session_start();

    if(isset($_POST["submit"]))
    {        
        // keyboard inputted data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // get all users from database
        $read = "SELECT * FROM user_table WHERE Username = '$username' && Password = '$password'";
        $query = mysqli_query($conn, $read);
        $data = mysqli_fetch_assoc($query);

        // admin login is hard coded
        if($username == 'admin' && $password == 'admin')
        {
            header('location:adminDashboard.php');
        }
        else if($data["Username"] == $username && $data["Password"] == $password)
        {
            $_SESSION["name"] = $data["Firstname"];
            header("Location:../index.php");
        } else {
            echo "<script>alert('Username or Password incorrect');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">

    <!--title-->
    <title>Autolanka</title>
</head>
<body>
    <!--create header-->
    <div class="box">
        <form action="login.php" method="post" class="container">
            <header>Login</header>
            <!--create input boxes-->
            <div class="input-field">
                <input type="text" class="input" id="username" placeholder="Username" name="username" required>
            </div>
            <div class="input-field">
                <input type="password" class="input" id="password" placeholder="Password" name="password" required>
            </div>

            <!--create login button-->
            <div class="input-field">
                <input type="submit" class="submit" value="Login" name="submit">
            </div>

            <!-- bottom options -->
            <div class="bottom">
                <div class="left">
                    <input type="checkbox"  id="check">
                    <label for="check"> Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </form>

        <!-- to create account -->
        <div class="createAcc">
            Don't have an account? 
            <a href="signin.php">Create Account</a>
        </div>
        
    </div>
</body>
</html>