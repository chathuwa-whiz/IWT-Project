<?php
    session_start();

    $chargeAmount = $_GET["day_charge"];
    $image = $_GET["image"];
    $brand = $_GET["brand"];
    $model = $_GET["model"];
    $passengers = $_GET["passengers"];
    $seats = $_GET["seats"];
    $bags = $_GET["bags"];
    $doors = $_GET["doors"];
    $gearType = $_GET["gear_type"];
    $extraCharge = $_GET["extra_charge"];
    $numOfDays = $_COOKIE["no_of_days"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Purchase Details</title>
        <link rel="stylesheet" href="../css/payment.css">
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
                <a class="headingCenterItem" href="../index.php">Home</a>
                <a class="headingCenterItem" href="aboutus.php">About</a>
                <a class="headingCenterItem" href="services.php">Services</a>
                <a class="headingCenterItem" href="contactus.php">Contact</a>
                <?php if($_SESSION){echo '<a class="headingCenterItem" href="userProfile.php">My Profile</a>';} ?>
            </div>

            <!-- heading right -->
            <div class="headingRight">
                <div class="headRightItem">
                    <?php echo $_SESSION ? 'Hellow '.$_SESSION["name"].'' : 'Hotline +94 717654324'; ?>
                </div>
            </div>
        </div>

        <!-- body -->
        <div class="container">
            <div class="image-container">
                <img src=<?php echo $image;?> alt="Product Image">
            </div>
            <div class="details-container">
                <h1 class="product-name"><?php echo ''.$brand.' '.$model.'';?></h1>
                <div class="product-description">
                    <table>
                        <tr>
                            <td>Seats</td>
                            <td>    :   </td>
                            <td><?php echo $seats;?></td>
                        </tr>
                        <tr>
                            <td>Bags</td>
                            <td>    :   </td>
                            <td><?php echo $bags;?></td>
                        </tr>
                        <tr>
                            <td>Passengers</td>
                            <td>    :   </td>
                            <td><?php echo $passengers;?></td>
                        </tr>
                        <tr>
                            <td>Doors</td>
                            <td>    :   </td>
                            <td><?php echo $doors;?></td>
                        </tr>
                        <tr>
                            <td>Gear Type</td>
                            <td>    :   </td>
                            <td><?php echo $gearType;?></td>
                        </tr>
                        <tr>
                            <td>Extra Charge</td>
                            <td>    :   </td>
                            <td>RS: <?php echo $extraCharge;?> per Kilometer</td>
                        </tr>
                    </table>
                </div>
                <div class="payment">
                    <p>RS: <?php echo $chargeAmount*$numOfDays;?></p>
                    <button onclick="location.href='cardDetails.php';">Pay now</button>
                </div>
            </div>
        </div>

        <!-- main footer -->
        <div class="footer">
            Designed by Autolanka
        </div>
    </body>
</html>