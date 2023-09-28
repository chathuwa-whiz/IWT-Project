<?php
    include 'connect.php';

    //read data from database
    $readVehicle = "SELECT * FROM vehicle_table";
    $readUser = "SELECT * FROM user_table";

    $vehicleArray = mysqli_query($conn, $readVehicle);
    $userArray = mysqli_query($conn, $readUser);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminDashboard.css">
    <title>Dashboard</title>
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
            <a class="headingCenterItem" href="#">Dashboard</a>
            <a class="headingCenterItem" href="adminVehicleDashboard.php">Vehicles</a>
            <a class="headingCenterItem" href="adminUserDashboard.php">Users</a>
            <a class="headingCenterItem" href="adminAddVehicle.php">New Vehicle</a>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem">Hotline +94 717654324</div>
        </div>
    </div>

    <!-- main body -->
    <div class="body">
        
        <!-- vehicle container -->
        <div class="vehicleContainer">
            <?php
                for($i = 0; $i < 5; $i++){
                    $rowVehicle = mysqli_fetch_assoc($vehicleArray);
                    echo '
                        <div class="vehicleItem">
                            <!-- left side contents -->
                            <div class="vehicleItemLeft">
                                <span class="vehicleItemId">'.$rowVehicle["VehicleID"].'</span>
                                <span class="vehicleItemBrand">'.$rowVehicle["Brand"].'</span>
                                <span class="vehicleItemModel">'.$rowVehicle["Model"].'</span>
                            </div>
                            <!-- right side contents -->
                            <div class="vehicleItemRight">
                                <button onclick="location.href=\'aboutus.html\'" class="vehicleItemEdit">Edit</button>
                                <button onclick="location.href=\'deleteVehicle.php?deleteVehicleId='.$rowVehicle["VehicleID"].'\'" class="vehicleItemDelete">Delete</button>
                            </div>
                        </div>
                    ';
                }
            ?>
            
        </div>

        <!-- users container -->
        <div class="userContainer"></div>
        
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by Autolanka
    </div>

</body>
</html>