<?php
include 'config.php';
$r_name = $_POST['r_name'];
$r_email = $_POST['r_email'];
$r_age = $_POST['r_age'];
$r_service = $_POST['r_service'];
$r_address = $_POST['r_address'];
$r_mobile = $_POST['r_mobile'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];
$image = $_FILES['image'];
$r_about = $_POST['r_about'];

// echo $r_name.$r_email.$r_age.$r_service.$r_address.$r_mobile.$r_pass.$r_con_pass.$r_about;

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

//dynamically image name change howar jonno
$image_des = "../image/".$imageName;

//method
move_uploaded_file($imageLocation,$image_des);

// echo $r_username.$r_pass.$_con_pass.$r_email.$r_mobile;

    $emailPattern = "/[a-z]+[0-9]*@(gmail|yahoo)\.com/";
    $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
    $agePattern = "/[0-9]+/";
    $passPattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&])).{8,20}/ ";
//same name user
 $duplicate_username = mysqli_query($conn,"SELECT * FROM `providerregister` WHERE username='$r_name'");


if(strlen($r_name)<3 || strlen($r_name)>20){
    echo "<script>alert('3-20 char username is allowed!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else if(!preg_match($emailPattern,$r_email)){
    echo "<script>alert('Invalid email!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else if(!preg_match($agePattern,$r_age)){
    echo "<script>alert('Invalid age!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else if(strlen($r_address)<2 || strlen($r_address)>20){
    echo "<script>alert('Invalid Address!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else if(!preg_match($mobilePattern,$r_mobile)){
    echo "<script>alert('Invalid mobile number!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else if(!preg_match($passPattern,$r_pass)){
    echo "<script>alert('Invalid Password!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else if($r_pass!==$r_con_pass){
    echo "<script>alert('Password not matched!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else if(strlen($r_about)<5 || strlen($r_about)>200){
    echo "<script>alert('About is too short!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}

//duplicate name check
else if(mysqli_num_rows($duplicate_username)>0){
    echo "<script>alert('Username already taken!')</script>";
    echo "<script>location.href='providerReg.php'</script>";
}
else{
    $insert_query = "INSERT INTO `providerregister`(`username`, `email`, `age`, `service`, `address`, `mobile`, `pass`, `image`, `about`) VALUES ('$r_name','$r_email','$r_age','$r_service','$r_address','$r_mobile','$r_pass','$image_des','$r_about')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted to DB!");}
        else{
            // echo "<script>alert('Inserted to DB!')</script>";
            echo "<script>location.href='providerLogin.php'</script>";
        }
    
}