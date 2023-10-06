<?php

    include 'connect.php';

    // show old data in fields
    if(isset($_GET["editVehicleId"]))
    {
        $getVehicleId = $_GET["editVehicleId"];
        setcookie('vehicle_id',$getVehicleId, time()+(5000*30), '/');

        $read = "SELECT * FROM vehicle_table WHERE VehicleID = $getVehicleId";

        // execute above query
        $query = mysqli_query($conn, $read);

        // fetch data
        $data = mysqli_fetch_assoc($query);
    }

    // update new values to database
    if(isset($_POST["submit"]))
    {
        $vehicleId = $_COOKIE['vehicle_id'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $seat = $_POST['seat'];
        $bags = $_POST['bags'];
        $image = $_POST['image'];
        $extraRs =$_POST['extra'];
        $gear = $_POST['gear'];
        $type = $_POST['type'];
        $airCondition =  $_POST['airCondition'];

        $update = "UPDATE vehicle_table SET Brand = '$brand' , Model = '$model' , Image = '$image' , Bags = '$bags' , Seats = '$seat' , AirCondition = '$airCondition' , VehicleType = '$type' , GearType = '$gear' , ExtraCharge = '$extraRs'
                    WHERE VehicleID = $vehicleId";
        
        try {
            mysqli_query($conn, $update);
            echo "<script>
                    if(confirm('Operation Successful!')) {
                        location.href = 'adminDashboard.php';
                    }
                  </script>";
            // header('location:adminDashboard.php');
            
        } catch (mysqli_sql_exception $e) {
            echo "<script>
                  if(confirm('Operation Failed!')) {
                      location.href = 'adminDashboard.php';
                  }
                  </script>";
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
    <script src="../javascript/script.js"></script>
    <title>Edit Vehicle</title>
</head>
<body>
    <form action="editVehicle.php" method="POST">
        <!-- Brand -->
        <div class="brand">
            <label for="brand">Brand Name</label>
            <input type="text" placeholder="SUZUKI" name="brand" value = <?php echo $data["Brand"]; ?> >
        </div>
        <!-- Model -->
        <div class="model">
            <label for="model">Model Name</label>
            <input type="text" placeholder="Wagon R" name="model" value = <?php echo $data["Model"]; ?>>
        </div>
        <!-- Seats -->
        <div class="seat">
            <label for="seat">Number of Seats</label>
            <input type="number" placeholder="4" name="seat" value = <?php echo $data["Seats"]; ?>>
        </div>
        <!-- Bags -->
        <div class="bags">
            <label for="bags">Number of Bags</label>
            <input type="number" placeholder="2" name="bags" value = <?php echo $data["Bags"]; ?>>
        </div>
        <!-- Image -->
        <div class="image">
            <label for="image">Image</label>
            <input type="text" placeholder="Input Image URL Here" name="image" value = <?php echo $data["Image"]; ?>>
        </div>
        <!-- Extra KM -->
        <div class="extra">
            <label for="extra">Rupees per extra KM</label>
            <input type="number" placeholder="1000" name="extra" value = <?php echo $data["ExtraCharge"]; ?>>
        </div>
        <!-- gear -->
        <div class="gear">
            <label for="gear">Gear Type</label>
            <div class="inputs">
                <input type="radio" name="gear" value="Manual" <?php if($data["GearType"] == "Manual"){echo "checked";} ?> > Manual<br>
                <input type="radio" name="gear" value="Auto" <?php if($data["GearType"] == "Auto"){echo "checked";} ?> > Auto
            </div>
        </div>
        <!-- Air Conditioning -->
        <div class="airCondition">
            <label for="airCondition">Air Conditioning</label>
            <div class="inputs">
                <input type="radio" name="airCondition" value="No" <?php if($data["AirCondition"] == "No"){echo "checked";} ?> > No<br>
                <input type="radio" name="airCondition" value="Yes" <?php if($data["AirCondition"] == "Yes"){echo "checked";} ?> > Yes
            </div>
        </div>
        <!-- vehicle type -->
        <div class="type">
            <label for="type">Vehicle Type</label>
            <div class="inputs">
                <input type="radio" name="type" value="SUV and Cabs" <?php if($data["VehicleType"] == "SUV and Cabs"){echo "checked";} ?> > SUV and Cabs<br>
                <input type="radio" name="type" value="Van and Busses" <?php if($data["VehicleType"] == "Van and Busses"){echo "checked";} ?> > Van and Busses<br>
                <input type="radio" name="type" value="Motorbikes" <?php if($data["VehicleType"] == "Motorbikes"){echo "checked";} ?> > Motorbikes<br>
                <input type="radio" name="type" value="Cars" <?php if($data["VehicleType"] == "Cars"){echo "checked";} ?> > Cars<br>
                <input type="radio" name="type" value="Utility Vehicles" <?php if($data["VehicleType"] == "Utility Vehicles"){echo "checked";} ?> > Utility Vehicles<br>
                <input type="radio" name="type" value="Tuk Tuk" <?php if($data["VehicleType"] == "Tuk Tuk"){echo "checked";} ?> > Tuk Tuk
            </div>
        </div>
        
        <!-- submit -->
        <button type="submit" name="submit">Update</button>
    </form>

</body>
</html>