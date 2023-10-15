<?php
    include 'connect.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM contact WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: contactus.php");
        }
    }
?>