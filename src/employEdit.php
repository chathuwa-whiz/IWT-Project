<?php
    session_start();
    include "connect.php";

    if(isset($_GET["id"])) {
        $getUserId = $_GET["id"];
        setcookie('emp_id', $getUserId, time()+(5000), '/');

        $read = "SELECT * FROM employ WHERE id = $getUserId";

        // execute above query
        $query = mysqli_query($conn, $read);

        // fetch data
        $data = mysqli_fetch_assoc($query);
    }

    if(isset($_POST["submit"])){
        $id = $_COOKIE['emp_id'];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm-password"];

        if($password == $confirm_password){
            $sql = "UPDATE employ 
                    SET firstname = '$firstname', lastname = '$lastname', email = '$email', username = '$username', password = '$password' 
                    WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>
                        if(confirm('Account updated successfully!')) {
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
        <h2>Employ Update Form</h2>
        <form action="employEdit.php" method="post">

            <label for="firstname"><b>Firstname</b></label>
            <input type="text" placeholder="Enter Firstname" name="firstname" value=<?php echo $data["firstname"]; ?> required>

            <label for="lastname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lastname" value=<?php echo $data["lastname"]; ?> required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value=<?php echo $data["email"]; ?> required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Create Username" name="username" value=<?php echo $data["username"]; ?> required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter New Username" name="password" value=<?php echo $data["password"]; ?> required>

            <label for="confirm-password"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="confirm-password" value=<?php echo $data["password"]; ?> required>

            <button type="submit" name="submit">Update</button>

        </form>
    </div>

</body>
</html>
