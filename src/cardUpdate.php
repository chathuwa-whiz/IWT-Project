<?php
    include 'connect.php';

    if(isset($_GET["updateCardId"]))
    {
        $id = $_GET["updateCardId"];
        setcookie('updateID', $_GET["updateCardId"], time() + (86400), '/');

        $read ="SELECT * FROM payment WHERE ID = $id";

        $sql = mysqli_query($conn, $read);

        $data = mysqli_fetch_assoc($sql);
    }

    if(isset($_POST["submit"]))
    {
        $id = $_COOKIE["updateID"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $nameofcard = $_POST["nameofcard"];
        $number = $_POST["number"];
        $monthyear = $_POST["monthyear"];
        $CVV = $_POST["CVV"];

        $update = "UPDATE payment 
                   SET First_Name='$firstname',Last_Name='$lastname',Email='$email',NAME_ON_CARD='$nameofcard',CREDIT_CARD_NUMBER='$number',EXP_MONTH_YEAR='$monthyear',CVV='$CVV' 
                   WHERE ID = $id";
        mysqli_query($conn,$update);

        try {
            mysqli_query($conn,$update);
            echo"<script>if(confirm('card detail updated')){location.href='cardDashboard.php';}</script>";
        } catch (mysqli_sql_execption) {
            echo"<script>if(confirm('card detail not updated')){location.href='cardDashboard.php';}</script>";
        }
    }
    mysqli_close($conn);

    // $amount = $_GET['amount'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="../script.js"></script>
    <link rel="stylesheet" href="../css/cardDetails.css">
</head>
<body>

<div class="container">
    <script src="script.js"></script>
    <form method="POST" action="cardUpdate.php">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>First name :</span>
                    <input type="text" placeholder="First  Name" id="firstname" name="firstname" value=<?php echo $data["First_Name"];?>>
                </div>
                <div class="inputBox">
                    <span>Last name :</span>
                    <input type="text" placeholder="Last  Name"id="lastname" name="lastname"value=<?php echo $data["Last_Name"];?>>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com"id="email" name="email"value=<?php echo $data["Email"];?>>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Address"id="address">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="City"id="city">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Sri Lanka"id="state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456"id="text">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../asset/payment/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Card Type"id="cardtype" name="nameofcard"value=<?php echo $data["NAME_ON_CARD"];?>>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111 2222 3333 4444"id="number"name="number"value=<?php echo $data["CREDIT_CARD_NUMBER"];?>>
                </div>
                <div class="inputBox">
                    <span>exp month/year :</span>
                    <input type="month" placeholder="january"id="month"name="monthyear"value=<?php echo $data["EXP_MONTH_YEAR"];?>>
                </div>

                
                 <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123"id="cvv" name="CVV"value=<?php echo $data["CVV"];?>>
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-btn" name="submit">Update</button>
    
        </div>

    </form>

</div>    
</body>
</html>