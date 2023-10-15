<?php
    include 'connect.php';

    if(isset($_POST["submit"]))
    {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $nameofcard = $_POST["nameofcard"];
        $number = $_POST["number"];
        $monthyear = $_POST["monthyear"];
        $CVV = $_POST["CVV"];

        $create = "INSERT INTO payment (First_Name, Last_Name, Email, NAME_ON_CARD, CREDIT_CARD_NUMBER, EXP_MONTH_YEAR, CVV) VALUES ('$firstname','$lastname','$email','$nameofcard','$number','$monthyear','$CVV')";

        try {
            $sql = mysqli_query($conn, $create);
            echo "<script>
                if(confirm('Card Details Saved')) {
                    location.href = 'cardDashboard.php';
                } 
                else {
                    location.href = 'payment.php';
                }
                </script>";
        } catch (mysqli_sql_exception) {
            echo "<script>alert('data not saved');</script>";
        }
    }
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
    <form method="POST" action="cardDetails.php">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>First name :</span>
                    <input type="text" placeholder="First  Name" id="firstname" name="firstname">
                </div>
                <div class="inputBox">
                    <span>Last name :</span>
                    <input type="text" placeholder="Last  Name"id="lastname" name="lastname">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com"id="email" name="email">
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
                    <input type="text" placeholder="Name on Card"id="cardtype" name="nameofcard">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111 2222 3333 4444"id="number"name="number">
                </div>
                <div class="inputBox">
                    <span>exp month/year :</span>
                    <input type="month" placeholder="january"id="month"name="monthyear">
                </div>

                
                 <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123"id="cvv" name="CVV">
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-btn" name="submit">save & proceed</button>
    
        </div>

    </form>

</div>    
</body>
</html>