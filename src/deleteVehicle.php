<?php
    include 'connect.php';

    if(isset($_GET["deleteVehicleId"]))
    {
        $vehicleId = $_GET["deleteVehicleId"];
        $delete = "DELETE FROM vehicle_table WHERE VehicleID = $vehicleId";

        //execute above query
        $result = mysqli_query($conn, $delete);
    }
    header('location:adminDashboard.php');
?>