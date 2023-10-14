<?php
    $amount = $_GET['amount'];
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
    <form onsubmit="onFormsubmit();" autocomplete="off" >

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>First name :</span>
                    <input type="text" placeholder="First  Name" id="firstname">
                </div>
                <div class="inputBox">
                    <span>Last name :</span>
                    <input type="text" placeholder="Last  Name"id="lastname">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com"id="email">
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
                        <input type="text" placeholder="Sri Lanka"id=""state>
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
                    <input type="text" placeholder="Card Type"id="cardtype">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111 2222 3333 4444"id="number">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="month" placeholder="january"id="month">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022"id="year">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123"id="cvv">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    



<td>
    <table class="list" id="payment" >
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Name of Card</th>
                <th>Credit Card Number</th>
                <th>Exp Month</th>
                <th>Exp year</th>
                <th>CVV</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</td>





























    <script src="script.js"></script>
</body>
</html>