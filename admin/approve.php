<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$updateQuery ="UPDATE `providerregister` SET `status`='yes' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Provider not updated!')</script>";
    echo "<script>location.href='adminpanel.php'</script>";
}
else{
    // echo "<script>alert('Provider is updated!')</script>";
    echo "<script>location.href='adminpanel.php'</script>";
}