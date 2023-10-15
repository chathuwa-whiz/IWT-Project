<?php
    session_start();
    include "connect.php";

    $readData = "SELECT * FROM employ WHERE ID = '$_SESSION[emp_id]' ";

    $result = mysqli_query($conn, $readData);
    $data = mysqli_fetch_assoc($result);
    
    if(isset($_POST['EDIT'])){
        header("Location: employEdit.php?id=$_SESSION[emp_id]");
    }
    if(isset($_POST['DELETE'])){
        echo "<script>
                if(confirm('Do you want to delete your account?')) {
                    location.href = 'employDelete.php?id=$_SESSION[emp_id]';
                } 
                else {
                    location.href = 'employDashboard.php';
                }
                </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/employDashboard.css">
    <title>Employ Dashboard</title>
</head>
<body>

    <!-- main headding row -->
    <div class="head">
        <!-- heading left -->
        <div class="headingLeft">
            <div class="headingLogoContainer">
                <img class="headingLogo" src="../asset/home/logo.png" alt="">
            </div>
        </div>

        <!-- heading center -->
        <div class="headingCenter">
            <a class="headingCenterItem" href="employDashboard.php">My Profile</a>
            <a class="headingCenterItem" href="login.php">Logout</a>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem">
                <?php echo $_SESSION ? 'Hellow '.$_SESSION["name"].'' : 'Hotline +94 717654324'; ?>
            </div>
        </div>
    </div>

    <!-- body -->
    <div class="mainBody">
        <!-- left -->
        <div class="bodyLeft">
            <!-- title -->
            <span class="bodyLeftTitle">Employ Dashboard</span>

            <!-- employ details panel -->
            <form action="employDashboard.php" method="POST">
                <div class="formDetails">
                    <label for="">Employ ID</label>
                    <input type="text" value='<?php echo $data["id"]; ?>' disabled>
                </div>
                <div class="formDetails">
                    <label for="">Name</label>
                    <input type="text" value=<?php echo ''.$data["firstname"].' '.$data["lastname"].''; ?> disabled>
                </div>
                <div class="formDetails">
                    <label for="">Email</label>
                    <input type="text" value=<?php echo $data["email"]; ?> disabled>
                </div>
                <div class="formDetails">
                    <label for="">Password</label>
                    <input type="text" value=<?php echo $data["password"]; ?> disabled>
                </div>
                <div class="formDetails">
                    <button type="submit" name="EDIT">Edit</button>
                    <button type="submit" name="DELETE">Delete</button>
                </div>
            </form>
        </div>

        <!-- right -->
        <div class="bodyRight">
            <input type="file" name="" id="">
            <button onclick="location.href='#';">Upload Document</button>
            <button onclick="location.href='employSignin.php';">Create Account For Employee</button>
        </div>
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by Autolanka
    </div>
    
</body>
</html>