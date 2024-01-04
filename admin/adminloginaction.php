<?php


$admin_name = "admin";
$admin_pass = "1234";

session_start();
if(isset($_SESSION['l_username'])){
   
}

else{
    
    if($_POST['l_username']==$admin_name && $_POST['l_pass']==$admin_pass){
        $_SESSION['l_username']=$admin_name;
        echo "<script>location.href='adminpanel.php'</script>";
    }
    else{
        echo "<script>alert('Invalid user')</script>";
        echo "<script>location.href='adminLogin.php'</script>";

    }
 }
