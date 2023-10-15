<?php
    include 'connect.php';

    if(isset($_GET["id"]))
    {
        $empId = $_GET["id"];
        $delete = "DELETE FROM employ WHERE id = $empId";

        //execute above query
        $result = mysqli_query($conn, $delete);
    }
    header('location:login.php');
?>