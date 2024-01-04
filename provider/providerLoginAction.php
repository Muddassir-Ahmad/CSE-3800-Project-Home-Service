<?php
include 'config.php';

if(isset($_POST['login'])){
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    // echo $l_username.$l_pass;

    $result = mysqli_query($conn,"SELECT * FROM `providerregister` WHERE username='$l_username' AND pass='$l_pass'");

    if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['username']=$l_username;
    echo "<script>location.href='../indexProvider.php'</script>";
    }

else{
    echo "<script>alert('Incorrect Username & Password!')</script>";
    echo "<script>location.href='providerLogin.php'</script>";
}
}