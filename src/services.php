<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autolanka</title>
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
    <div class="section">
        <div class="title">
            <h1>About Us</h1>
        </div>

        <!-- first row -->
        <div class="services">

            <!-- service 1 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-calendar"></i>&nbsp;<br><br>
                </div>
                <h2>Mission</h2>
                <p>Auto Lanka Car Rental Service is your trusted partner in sustainable travel, providing innovative and customer-centric.</p>
                <a href="#" class="button">Read More</a>
            </div>

            <!-- service 2 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-key"></i>&nbsp;<br><br>
                </div>
                <h2>Vision</h2>
                <p>We envision a future where Auto Lanka Car Rental is the epitome of convenience and sustainability in travel..</p>
                <a href="#" class="button">Read More</a>
            </div>

            <!-- service 3 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-medal"></i>&nbsp;<br><br>
                </div>
                <h2>Archivment</h2>
                <p>Auto Lanka Car Rental Service has expanded globally, offering convenient access in major cities worldwide.."</p>
                <a href="#" class="button">Read More</a>
            </div>
            
        </div>
        <!-- second row -->
        <div class="services">

            <!-- service 1 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-calendar"></i>&nbsp;<br><br>
                </div>
                <h2>Airport Transfer</h2>
                <p>Auto Lanka Car rental service offer convenient 24 hour airport transfer Sri Lanka services that include any type of airport and city transfers from the Colombo International Airport to any location..</p>
                <a href="#" class="button">Read More</a>
            </div>

            <!-- service 2 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-key"></i>&nbsp;<br><br>
                </div>
                <h2>4*4 and SUV</h2>
                <p>Our high quality range of 4x4 off road vehicles at Auto Lanka are geared to suit any type of touring requirements and fit to survive any road conditions.</p>
                <a href="#" class="button">Read More</a>
            </div>

            <!-- service 3 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-medal"></i>&nbsp;<br><br>
                </div>
                <h2>Breakdown Services 24*7</h2>
                <p>With our highly efficient 24 hours customer support service with an extremely customer oriented friendly team, we ensure that you receive an alternate backup vehicle then and there, day or night, no matter wherever you are located when faced with a vehicle breakdown situation.</p>
                <a href="#" class="button">Read More</a>
            </div>
            
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        Designed by Autolanka
    </div>
</body>
</html>