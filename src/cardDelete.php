<?php
    include 'connect.php';
    if(isset($_GET["deleteCardId"]))
    {
        $cardid=$_GET["deleteCardId"];
        $delete="DELETE FROM payment WHERE ID=$cardid";
        mysqli_query($conn,$delete);
    }

    header('location:index.php');
?>