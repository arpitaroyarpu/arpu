<?php
include 'config.php';



$r_username = $_POST['r_username'];
$r_id = $_POST['r_id'];
$r_phone = $_POST['r_phone'];

$username_pattern = "/^[A-Za-z .]{3,20}$/"; 
$id_pattern = "/^\d{10}$/";
$phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";


$insertQuery = "INSERT INTO `register`(`name`, `id`, `phone`) VALUES ('$r_username','$r_id','$r_phone')";

if(!preg_match($username_pattern,$r_username))
{
    echo "<script> alert('Username already taken!!') </script>";
    echo "<script> location.href = 'register.php' </script>";
}

else if(!preg_match($id_pattern,$r_id)){
    echo "<script> alert'10 digit need' </script>";
    echo "<script> location.href = 'register.php' </script>";
}


else if(!preg_match($phone_pattern,$r_phone)){
    echo "<script> alert('wrong phone number!!') </script>";
    echo "<script> location.href = 'register.php' </script>";
}


?>