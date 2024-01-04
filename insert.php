<?php
include 'config.php';
$r_username = $_POST['r_username'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];
$r_email = $_POST['r_email'];
$r_address = $_POST['r_address'];
$r_mobile = $_POST['r_mobile'];

// echo $r_username.$r_pass.$_con_pass.$r_email.$r_mobile;

    $emailPattern = "/[a-z]+[0-9]*@(gmail|yahoo)\.com/";
    $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
    $passPattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&])).{8,20}/ ";
//same name user
$duplicate_username = mysqli_query($conn,"SELECT * FROM `register` WHERE username='$r_username'");


if(strlen($r_username)<3 || strlen($r_username)>20){
    echo "<script>alert('3-20 char username is allowed!')</script>";
    echo "<script>location.href='registration.html'</script>";
}
else if(!preg_match($emailPattern,$r_email)){
    echo "<script>alert('Invalid email!')</script>";
    echo "<script>location.href='registration.html'</script>";
}
else if(!preg_match($passPattern,$r_pass)){
    echo "<script>alert('Invalid Password!')</script>";
    echo "<script>location.href='registration.html'</script>";
}
else if(strlen($r_address)<2 || strlen($r_address)>20){
    echo "<script>alert('Invalid Address!')</script>";
    echo "<script>location.href='registration.html'</script>";
}
else if($r_pass!==$r_con_pass){
    echo "<script>alert('Password not matched!')</script>";
    echo "<script>location.href='registration.html'</script>";
}

else if(!preg_match($mobilePattern,$r_mobile)){
    echo "<script>alert('Invalid mobile number!')</script>";
    echo "<script>location.href='registration.html'</script>";
}
//duplicate name check
else if(mysqli_num_rows($duplicate_username)>0){
    echo "<script>alert('Username already taken!')</script>";
    echo "<script>location.href='registration.html'</script>";
}
else{
    $insert_query = "INSERT INTO `register`(`username`, `email`,`address`,`pass`, `mobile`) VALUES ('$r_username','$r_email','$r_address','$r_pass','$r_mobile')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted to DB!");}
        else{
            // echo "<script>alert('Inserted to DB!')</script>";
            echo "<script>location.href='login.html'</script>";
        }
    
}