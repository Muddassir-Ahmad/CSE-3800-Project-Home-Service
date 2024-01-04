<?php
include 'config.php';
$id = $_REQUEST['id'];




$updateQuery ="UPDATE `request` SET `status`='Rejected' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Request Accept Failed!')</script>";
    echo "<script>location.href='request.php'</script>";
}
else{
    echo "<script>alert('Request Accepted!')</script>";
    echo "<script>location.href='request.php'</script>";
}