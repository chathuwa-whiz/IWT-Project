<?php
    session_start();
    include 'connect.php';

    $read = "SELECT * FROM payment";
    $sql = mysqli_query($conn, $read);
    $data =mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cardDetails.css">
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

    <!-- main body -->
    <div class="container">
        <script src="../script.js"></script>
        <?php
            foreach($data as $item)
            {
                echo '
                <div class="save">
                <div class="pay">
                    <input type="text" class="box" value='.$item["First_Name"].' disabled> <br>
                    <input type="text" class="box" value='.$item["Last_Name"].' disabled> <br>
                    <input type="text" class="box" value='.$item["CREDIT_CARD_NUMBER"].' disabled> <br>
                    <input type="text" class="box" value='.$item["CVV"].' disabled> <br>
                </div>
                <div class="btn">
                    <div class="btn1">
                        <button onclick = "location.href=\'cardUpdate.php?updateCardId='.$item["ID"].'\'" type="submit" class="submit-btn" name="submit">Update</button>
                        <button onclick = "location.href=\'cardDelete.php?deleteCardId='.$item["ID"].'\'" type="submit" class="submit-btn" name="submit">Delete</button>
                        <button onclick="payButton();" class="submit-btn">pay</button>
                    </div>
                </div>
                </div>
                <hr>
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