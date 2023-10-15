<?php
    session_start();
    include "connect.php";

    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $username = $_POST["username"];
        $confirm_password = $_POST["confirm-password"];

        if($password == $confirm_password){
            $sql = "INSERT INTO employ (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>
                        if(confirm('Account created successfully!')) {
                            location.href = 'login.php';
                        } 
                        else {
                            location.href = 'login.php';
                        }
                       </script>";
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }else{
            echo "<script>alert('Password does not match')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/employSignin.css">
</head>
<body>

    <div class="container">
        <h2>Employ Signin Form</h2>
        <form action="employSignin.php" method="post">

            <label for="firstname"><b>Firstname</b></label>
            <input type="text" placeholder="Enter Firstname" name="firstname" required>

            <label for="lastname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lastname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Create New Password" name="password" required>

            <label for="confirm-password"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="confirm-password" required>

            <button type="submit" name="submit">Create Account</button>

        </form>
    </div>

</body>
</html>
