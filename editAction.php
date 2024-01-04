<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$Updatename = $_POST['r_name'];
$Updateemail = $_POST['r_email'];
$Updateage = $_POST['r_age'];
$Updateservice = $_POST['r_service'];
$Updateaddress = $_POST['r_address'];
$Updatemobile = $_POST['r_mobile'];
$Updatepass = $_POST['r_pass'];
$Updateconpass = $_POST['r_con_pass'];
$Updateimage = $_FILES['image'];
$Updateabout = $_POST['r_about'];


$imageLocation = $Updateimage['tmp_name'];
$imageName = $Updateimage['name'];

$image_des = "image/".$imageName;


move_uploaded_file($imageLocation,$image_des);


$updateQuery ="UPDATE `providerregister` SET `username`='$Updatename',`email`='$Updateemail',`age`='$Updateage',`service`='$Updateservice',`address`='$Updateaddress',`mobile`='$Updatemobile',`pass`='$Updatepass',`image`='$image_des',`about`='$Updateabout' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Provider not updated!')</script>";
    echo "<script>location.href='profileProvider.php'</script>";
}
else{
    // echo "<script>alert('Provider is updated!')</script>";
    echo "<script>location.href='profileProvider.php'</script>";
}