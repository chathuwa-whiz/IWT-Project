<?php
    include 'connect.php';

    if(isset($_POST['submit']))
    {
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $seat = $_POST['seat'];
        $bags = $_POST['bags'];
        $image = $_POST['image'];
        $extraRs =$_POST['extra'];
        $gear = $_POST['gear'];
        $type = $_POST['type'];
        $airCondition =  $_POST['airCondition'];

        $sql = "INSERT INTO vehicle_table (Brand, Model, Image, Bags, Seats, AirCondition, VehicleType, GearType, ExtraCharge)
                VALUES ('$brand' , '$model' , '$image' , '$bags' , '$seat' , '$airCondition' , '$type' , '$gear', '$extraRs')";
        
        try {
            mysqli_query($conn, $sql);
            // header('location:adminDashboard.php');

        } catch (mysqli_sql_exception $e) {
            echo "<script>alert('Operation Failed!');</script>";
        }
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminAddVehicle.css">
    <title>Administrator | Add New Vehicle</title>
</head>
<body>
    <form action="adminAddVehicle.php" method="POST">
        <!-- Brand -->
        <div class="brand">
            <label for="brand">Brand Name</label>
            <input type="text" placeholder="SUZUKI" name="brand">
        </div>
        <!-- Model -->
        <div class="model">
            <label for="model">Model Name</label>
            <input type="text" placeholder="Wagon R" name="model">
        </div>
        <!-- Seats -->
        <div class="seat">
            <label for="seat">Number of Seats</label>
            <input type="number" placeholder="4" name="seat">
        </div>
        <!-- Bags -->
        <div class="bags">
            <label for="bags">Number of Bags</label>
            <input type="number" placeholder="2" name="bags">
        </div>
        <!-- Image -->
        <div class="image">
            <label for="image">Image</label>
            <input type="text" placeholder="Input Image URL Here" name="image">
        </div>
        <!-- Extra KM -->
        <div class="extra">
            <label for="extra">Rupees per extra KM</label>
            <input type="number" placeholder="1000" name="extra">
        </div>
        <!-- gear -->
        <div class="gear">
            <label for="gear">Gear Type</label>
            <div class="inputs">
                <input type="radio" name="gear" value="Manual"> Manual<br>
                <input type="radio" name="gear" value="Auto"> Auto
            </div>
        </div>
        <!-- Air Conditioning -->
        <div class="airCondition">
            <label for="airCondition">Air Conditioning</label>
            <div class="inputs">
                <input type="radio" name="airCondition" value="No"> No<br>
                <input type="radio" name="airCondition" value="Yes"> Yes
            </div>
        </div>
        <!-- vehicle type -->
        <div class="type">
            <label for="type">Vehicle Type</label>
            <div class="inputs">
                <input type="radio" name="type" value="SUV and Cabs"> SUV and Cabs<br>
                <input type="radio" name="type" value="Van and Busses"> Van and Busses<br>
                <input type="radio" name="type" value="Motorbikes"> Motorbikes<br>
                <input type="radio" name="type" value="Cars"> Cars<br>
                <input type="radio" name="type" value="Utility Vehicles"> Utility Vehicles<br>
                <input type="radio" name="type" value="Tuk Tuk"> Tuk Tuk
            </div>
        </div>
        
        <!-- submit -->
        <button type="submit" name="submit">Add Vehicle</button>
    </form>

</body>
</html>