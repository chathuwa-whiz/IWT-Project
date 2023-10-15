<?php
    include 'connect.php';

    $id = $_GET['id'];
    setcookie("msg_id", $id, time() + (86400), "/");

    $sql = "SELECT * FROM contact WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        $sql = "UPDATE contact SET name='$name', email='$email', subject='$subject', msg='$msg' WHERE id=$_COOKIE[msg_id]";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: contactus.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contactus.css">
    <title>Update Contact us</title>
</head>
<body>

    <!-- left side -->
    <div class="bodyLeft">
        <div class="bodyLeftTitle">Send us a message</div>
        <form class="contactForm" method="POST" action="contactus_update.php">
            <label class="contactFormLabel">Name</label><br>
            <input type="text" class="contactFormInput" name="name" value=<?php echo $row["name"]; ?>><br>
            <label class="contactFormLabel">Email</label><br>
            <input type="text" class="contactFormInput" name="email" value=<?php echo $row["email"]; ?>><br>
            <label class="contactFormLabel">Subject</label><br>
            <input type="text" class="contactFormInput" name="subject" value=<?php echo $row["subject"]; ?>><br>
            <label class="contactFormLabel">Message</label><br>
            <textarea class="contactFormInput" id="" cols="30" rows="10" name="msg" value=<?php echo $row["msg"]; ?>></textarea>
            <button class="contactFormSubmitButton" onclick="" name="submit" type="submit">Update Message</button>
        </form>
    </div>

</body>
</html>