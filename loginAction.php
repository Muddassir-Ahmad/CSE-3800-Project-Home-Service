<?php
include 'config.php';

if(isset($_POST['login'])){
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn,"SELECT * FROM `register` WHERE username='$l_username' And pass='$l_pass'");

    if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['username']=$l_username;
    echo "<script>location.href='index.php'</script>";
    }

else{
    echo "<script>alert('Incorrect Username & Password!')</script>";
    echo "<script>location.href='login.html'</script>";
}
}