<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$Updatename = $_POST['r_username'];
$Updateemail = $_POST['r_email'];
$Updateaddress = $_POST['r_address'];

$Updatepass = $_POST['r_pass'];
$Updateconpass = $_POST['r_pass'];
$Updatemobile = $_POST['r_mobile'];



$updateQuery ="UPDATE `register` SET `username`='$Updatename',`email`='$Updateemail',`address`='$Updateaddress',`pass`='$Updatepass',`mobile`='$Updatemobile' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Profile Not Updated!')</script>";
    echo "<script>location.href='profileUser.php'</script>";
}
else{
    echo "<script>alert('Profile Updated!')</script>";
    echo "<script>location.href='profileUser.php'</script>";
}