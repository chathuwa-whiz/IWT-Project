<?php

    include 'connect.php';

    // get old values to fields
    if(isset($_GET["editUserId"]))
    {
        $getUserId = $_GET["editUserId"];
        setcookie('user_id', $getUserId, time()+(5000*30), '/');

        $read = "SELECT * FROM user_table WHERE UserID = $getUserId";

        // execute above query
        $query = mysqli_query($conn, $read);

        // fetch data
        $data = mysqli_fetch_assoc($query);
    }

    // update new values to database
    if(isset($_POST["submit"]))
    {
        $userId = $_COOKIE['user_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $number = $_POST['number'];
        $street = $_POST['street'];
        $town = $_POST['town'];
        $city = $_POST['city'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_pass = $_POST['confirm-password'];
        $avatar = $_POST['image'];

        $update = "UPDATE user_table SET Firstname = '$firstname', Lastname = '$lastname', Image = '$avatar', Birthday = '$birthday', Number = '$number', Street = '$street', Town = '$town', City = '$city', Username = '$username', Password = '$password'
                   WHERE UserId = $userId";

        if($password != $confirm_pass) {
            echo "<script>alert('Password does not match. Please check again');</script>";
        }
        elseif($number < 10) {
            echo "<script>alert('Invalid Mobile Number. Please check again');</script>";
        }
        else {
            try {
                mysqli_query($conn, $update);
                echo "<script>
                       if(confirm('User Details Updated!')) {
                           location.href = 'adminDashboard.php';
                       }
                       </script>";
                // header('location:adminDashboard.php');
                
            } catch (mysqli_sql_exception $e) {
                echo "<script>
                      if(confirm('Operation Failed!')) {
                          location.href = 'adminDashboard.php';
                      }
                      </script>";
            }
        }
        
    }
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signin.css">
    <title>Edit User</title>
</head>
<body>

    <div class="main">
        <!-- title -->
        <h4>Edit User</h4>

        <form action="editUser.php" method="POST">
            <div class="details">
                <!-- first name -->
                <div class="input-box">
                    <span class="user">First Name</span>
                    <input type="text" placeholder="your first name" name="firstname" value = <?php echo $data["Firstname"]; ?> required>
                </div>

                <!-- last name -->
                <div class="input-box">
                    <span class="user">Last Name</span>
                    <input type="text" placeholder="your last name" name="lastname" value = <?php echo $data["Lastname"]; ?> required>
                </div>

                <!-- DOB -->
                <div class="input-box">
                    <span class="user">Date of Birth</span>
                    <input type="date" placeholder="dd/mm/yyyy" name="birthday" value = <?php echo $data["Birthday"]; ?> required>
                </div>

                <!-- mobile number -->
                <div class="input-box">
                    <span class="user">Mobile Phone Number</span>
                    <input type="number" placeholder="Phone Number" name="number" value = <?php echo $data["Number"]; ?> required>
                </div>

                <!-- address -->
                <div class="input-box1">
                    <span class="user1">Home Address</span>
                    <input type="text" placeholder="Street No" name="street" value = <?php echo $data["Street"]; ?> required>
                    <input type="text" placeholder="Town" name="town" value = <?php echo $data["Town"]; ?> required>
                    <input type="text" placeholder="City" name="city" value = <?php echo $data["City"]; ?> required>
                </div>

                <!-- username -->
                <div class="input-box1">
                    <span class="user1">Username</span>
                    <input type="text" placeholder="Type username" name="username" value = <?php echo $data["Username"]; ?> required>
                </div>

                <!-- new password -->
                <div class="input-box1">
                    <span class="user1">Password</span>
                    <input type="password" placeholder="password" name="password" value = <?php echo $data["Password"]; ?> required>
                </div>

                <!-- confirm password -->
                <div class="input-box1">
                    <span class="user1">Confirm Password</span>
                    <input type="password" placeholder="Confirm password" name="confirm-password" value = <?php echo $data["Password"]; ?> required>
                </div>

                <div class="input-box1">
                    <span class="user1">Avatar</span>
                    <input type="text" placeholder="Input Avatar Link" name="image" value = <?php echo $data["Image"]; ?>>
                </div>
                
                <!-- create account button -->
                <input type="submit" name="submit" class="create" value="Update">
                
            </div>

        </form>

    </div>

</body>
</html>