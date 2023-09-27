<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'autolanka');
    
    //check connection
    if(!$conn) {
        echo "<script>alert('Connection Fail!');</script>";
    }
?>