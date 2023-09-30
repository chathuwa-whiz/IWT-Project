<?php
    include 'connect.php';

    if(isset($_GET["deleteUserId"]))
    {
        $userId = $_GET["deleteUserId"];
        $delete = "DELETE FROM user_table WHERE UserID = $userId";

        //execute above query
        $result = mysqli_query($conn, $delete);
    }
    header('location:adminDashboard.php');
?>