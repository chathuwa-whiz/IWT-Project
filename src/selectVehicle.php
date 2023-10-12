<?php
    include 'connect.php';
    session_start();

    $vehicleType = $_GET['vehicle_type'];
    $location = $_GET['location'];
    $pickupDate = $_GET['pickup_date'];
    $returnDate = $_GET['return_date'];
    $pickupTime = $_GET['pickup_time'];
    $returnTime = $_GET['return_time'];
    $numOfDays = $_GET['numofdays'];

    $read = "SELECT * FROM vehicle_table WHERE VehicleType = '$vehicleType'";
    $result = mysqli_query($conn, $read);
    $allData = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/item.css">
    <title>Autolanka</title>
</head>
<body style="margin: 0px;">

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
            <a class="headingCenterItem" href="../index.php">Home</a>
            <a class="headingCenterItem" href="../src/aboutus.html">About</a>
            <a class="headingCenterItem" href="../src/services.html">Services</a>
            <a class="headingCenterItem" href="../src/contactus.html">Contact</a>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem"><?php echo $_SESSION ? 'Hellow '.$_SESSION["name"].'' : 'Hotline +94 717654324'; ?></div>
        </div>
    </div>
    
    <!-- main body -->
    <div class="mainBody">
        <!-- left side -->
        <div class="mainBodyLeft">

            <!-- vehicle type selection -->
            <div class="vehicleType">
                <div class="vehicleTypeTitle">Vehicle Type</div>
                <div class="vehicleTypeItemsContainer">

                    <!-- check boxes -->
                    <div class="vehicleTypeItem">
                        <input type="checkbox" <?php if($vehicleType == 'SUV and Cabs'){echo "checked";} ?>>
                        SUV & Cabs
                    </div>
                    <div class="vehicleTypeItem">
                        <input type="checkbox" <?php if($vehicleType == 'Cars'){echo "checked";} ?>>
                        Cars
                    </div>
                    <div class="vehicleTypeItem">
                        <input type="checkbox" <?php if($vehicleType == 'Van and Busses'){echo "checked";} ?>>
                        Vans & Busses
                    </div>
                    <div class="vehicleTypeItem">
                        <input type="checkbox" <?php if($vehicleType == 'Motorbikes'){echo "checked";} ?>>
                        MotorBikes
                    </div>
                    <div class="vehicleTypeItem">
                        <input type="checkbox" <?php if($vehicleType == 'Tuk Tuk'){echo "checked";} ?>>
                        Tuk Tuks
                    </div>
                    <div class="vehicleTypeItem">
                        <input type="checkbox" <?php if($vehicleType == 'Utility Vehicles'){echo "checked";} ?>>
                        Utility Vehicles
                    </div>
                </div>
            </div>

            <!-- price selection -->
            <div class="vehiclePrice">
                <div class="vehiclePriceTitle">Price</div>
                <div class="vehiclePriceContainer">
                    <input type="number" class="vehiclePriceItem" id="vehiclePriceFrom" placeholder="From">
                    <input type="number" class="vehiclePriceItem" id="vehiclePriceTo" placeholder="To">
                </div>
            </div>

            <!-- passengers -->
            <div class="passengersContainer">
                <div class="passengersTitle">Passengers</div>
                <input type="number" class="passengersInput">
            </div>
            
            <!-- Seats -->
            <div class="seatsContainer">
                <div class="seatsTitle">Seats</div>
                <input type="number" class="seatsInput">
            </div>
            
            <!-- Bags -->
            <div class="bagsContainer">
                <div class="bagsTitle">Bags</div>
                <input type="number" class="bagsInput">
            </div>

            <!-- air condition -->
            <div class="airConditionContainer">
                <input type="radio" class="airButton" id="">
                <div class="airTitle">Air Conditioning</div>
            </div>

            <!-- apply filters button -->
            <button class="filterButton">Apply Filters</button>
            <br>
            
        </div>

        <!-- right side -->
        <div class="mainBodyRight">
            
            <?php
                // while($data = mysqli_fetch_assoc($result))
                foreach($allData as $data)
                {
                    echo '
                    <div class="itemContainer">
                    <div class="itemCategory">MotorBikes</div>
                    <div class="itemImageContainer"></div>
                    <img class="itemImage" src="'.$data["Image"].'">
                    <div class="itemName">'.$data["Brand"].' '.$data["Model"].'</div>
                    <div class="itemPriceContainer">
                        <span>Rs. </span>
                        <span id="itemPrice">'.$data["DayCharge"].'</span>
                        <span> per day</span>
                    </div>
                    <div class="itemDetails">
                        <div class="itemDetailsItem">
                            <img class="itemDetailsItemIcon" src="../asset/item/person.png">
                            <div class="itemDetailsItemNumber">'.$data["Passengers"].'</div>
                            <div class="itemDetailsItemText">Passengers</div>
                        </div>
                        <div class="itemDetailsItem">
                            <img class="itemDetailsItemIcon" src="../asset/item/seat.png">
                            <div class="itemDetailsItemNumber">'.$data["Seats"].'</div>
                            <div class="itemDetailsItemText">Seats</div>
                        </div>
                        <div class="itemDetailsItem">
                            <img class="itemDetailsItemIcon" src="../asset/item/bag.png">
                            <div class="itemDetailsItemNumber">'.$data["Bags"].'</div>
                            <div class="itemDetailsItemText">Bags</div>
                        </div>
                        <div class="itemDetailsItem">
                            <img class="itemDetailsItemIcon" src="../asset/item/door.png">
                            <div class="itemDetailsItemNumber">'.$data["Doors"].'</div>
                            <div class="itemDetailsItemText">Doors</div>
                        </div>
                        <div class="itemDetailsItem">
                            <img class="itemDetailsItemIcon" src="../asset/item/gear.png">
                            <div class="itemDetailsItemText">'.$data["GearType"].'</div>
                        </div>
                        <div class="itemDetailsItem">
                            <img class="itemDetailsItemIcon" src="../asset/item/money.png">
                            <div class="itemDetailsItemText">Rs. </div>
                            <div class="itemDetailsItemNumber">'.$data["ExtraCharge"].'</div>
                            <div class="itemDetailsItemText">per extra Km</div>
                        </div>
                    </div>
                    <div class="itemButtonContainer">
                        <button class="itemButton">Book Now</button>
                    </div>
                </div>
                    ';
                }
            ?>
            
        </div>
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by Autolanka
    </div>
</body>
</html>