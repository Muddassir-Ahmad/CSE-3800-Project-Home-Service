<?php
    

    include 'config.php';

   
session_start();
if(isset($_SESSION['username'])){

$l_username=$_SESSION['username'];

$ddataFetchQuery = "SELECT * FROM `register` WHERE username='$l_username'";
$rrecord = mysqli_query($conn,$ddataFetchQuery);
$ddata = mysqli_fetch_array($rrecord);

}
?>

<?php

include 'config.php';
$id = $_REQUEST['id'];
$dataFetchQuery = "SELECT * FROM `providerregister` WHERE id='$id'";
$record = mysqli_query($conn,$dataFetchQuery);
$data = mysqli_fetch_array($record);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form{
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>
<body>









  <div class="container-fluid">
    <div class= "row justify-content-center mt-3">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="bookAction.php" method="post">
                <div class="mb-3">
                    <h3 class='text-center'>Booking Form</h3>
                </div>
                <div class='p-2 bg-warning'>
                <div class="mb-1">
                    <h4>User Detail</h4>
                    Your Name :
                    <input type="text" class="form-control" name="u_name"value="<?php echo $ddata['username'] ?>"  >
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
                <div class="mb-1">
                    Contact Number :
                    <input type="text" class="form-control" name="u_number"value="<?php echo $ddata['mobile'] ?>" >
                    
                </div>
                </div>
                <div class='p-2'>
                <div class="mb-1">
                <h4>Service Detail</h4>
                    Service Name :
                    <input type="text" class="form-control" name="s_name"value="<?php echo $data['service'] ?>" >
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="hidden" name="proname" value="<?php echo $data['username'] ?>">
                    
                </div>
                <div class="mb-1">
                   Service Date :
                    <input type="date" class="form-control" name="s_date" required>
                </div>
                <div class="mb-1">
                   Service Time :
                    <input type="time" class="form-control" name="s_time" required >
                </div>
                <div class="mb-1">
                    Service Description :
                    <textarea name="s_des" id="about" cols="58" rows="2" required></textarea>
                </div>
                <div class="mb-2">
                    Payment Method :
                    <input type="radio" id="payment" name="payment" value="Cash On Service" required>
                    Cash On Service

                </div>
                </div>
                
                <button type="submit" class="btn btn-danger col-12" name="submit">Sent Request</button>
               
            </form>

        </div>
    </div>
  </div>  







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>