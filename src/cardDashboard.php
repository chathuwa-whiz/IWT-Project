<?php
    $conn = mysqli_connect('localhost','root','','autolanka');

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
    <link rel="stylesheet" href="../css/payment.css">
</head>
<body class="mainBody">
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
            ';
        }
    ?>
    
</body>
</html>