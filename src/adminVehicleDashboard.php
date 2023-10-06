<?php
    include 'connect.php';
    
    //read data from database
    $readVehicle = "SELECT * FROM vehicle_table";
    $vehicleArray = mysqli_query($conn, $readVehicle);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminVehicleDashboard.css">
    <title>Administrator | Vehicle Dashboard</title>
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

    <!-- search bar -->
    <div class="searchBar">
        <input type="text">
        <button type="submit">Search</button>
    </div>
    
    <!-- items body -->
    <div class="container">
        <?php
            while($vehicle = mysqli_fetch_assoc($vehicleArray)){
                echo '
                    <div class="element">
                        <!-- left side contents -->
                        <div class="elementLeft">
                            <span class="elementDetail">Vehicle ID : '.$vehicle["VehicleID"].'</span>
                            <span class="elementDetail">Brand : '.$vehicle["Brand"].'</span>
                            <span class="elementDetail">Model : '.$vehicle["Model"].'</span>
                        </div>

                        <!-- center contents -->
                        <div class="elementImage">
                            <img src="'.$vehicle["Image"].'">
                        </div>

                        <!-- right side contents -->
                        <div class="elementRight">
                            <button onclick="location.href=\'editVehicle.php?editVehicleId='.$vehicle["VehicleID"].'\'" class="elementEdit">Edit</button>
                            <button onclick="location.href=\'deleteVehicle.php?deleteVehicleId='.$vehicle["VehicleID"].'\'" class="elementDelete">Delete</button>
                        </div>
                    </div>
                ';
            }
        ?>   
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by Autolanka
    </div>

</body>
</html>