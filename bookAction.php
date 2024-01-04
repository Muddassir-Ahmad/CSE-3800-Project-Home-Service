<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$uName = $_POST['u_name'];
$number = $_POST['u_number'];


$proname = $_POST['proname'];


$servicename = $_POST['s_name'];
$serviceDate = $_POST['s_date'];
$serviceTime = $_POST['s_time'];
$serviceDes = $_POST['s_des'];
$payment = $_POST['payment'];



$insert_query="INSERT INTO `request`(`name`, `phone`, `service`, `date`, `time`, `payment`, `des`, `providerName`) VALUES ('$uName','$number','$servicename','$serviceDate','$serviceTime','$payment','$serviceDes','$proname')";

if(!mysqli_query($conn,$insert_query)){
    die("Req not sent!");
}
    else{
        echo "<script>alert('Booking Request Sent!!')</script>";
        echo "<script>location.href='bookings.php'</script>";
    }
    