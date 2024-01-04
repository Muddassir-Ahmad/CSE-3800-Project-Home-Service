<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
    <div class= "row justify-content-center mt-5">
    <h1 class="mb-5 text-center bg-info ">Provider Data</h1>
      
    </div>
  </div>  

   <!-- Provider table display -->
<div class="container">
     <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Image</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Age</th>
               <th scope="col">Service</th>
               <th scope="col">Address</th>
               <th scope="col">Mobile</th>
               <th scope="col">Pass</th>
               <!-- <th scope="col">About</th> -->
               <th scope="col">Update  </th>
               <th scope="col">Delete</th>
               <th scope="col">Approve</th>
            </tr>
        </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `providerregister`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        <td><img src='$row[image]' width='100px'></td> 
                       
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>$row[age]</td>
                        <td>$row[service]</td>
                        <td>$row[address]</td>
                        <td>$row[mobile]</td>
                        <td>$row[pass]</td>
                       
                       
                        <td><a class='btn btn-warning' href='update.php? id=$row[id]'>Update</a></td>
                        <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>
                        <td><a class='btn btn-info' href='approve.php? id=$row[id]'>Approve</a></td>
                        
                    </tr>";

              }


             ?>

    
             </tbody>
   </table>
</div>

    <!-- User table display -->
 <h1 class="mb-5 mt-5 text-center bg-info">User Data</h1>
 <div class="container">
     <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
               <th scope="col">ID</th>
               
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Address</th>
               <th scope="col">Pass</th>
               
               <th scope="col">Mobile</th>
               <th scope="col">Update  </th>
               <th scope="col">Delete</th>
            </tr>
        </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `register`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>$row[address]</td>
                        <td>$row[pass]</td>
                        <td>$row[mobile]</td>
                        
                       
                     
                        <td><a class='btn btn-warning' href='userUpdate.php? id=$row[id]'>Update</a></td>
                        <td><a class='btn btn-danger' href='userDelete.php? id=$row[id]'>Delete</a></td>
                        
                    </tr>";

              }


             ?>

    
             </tbody>
   </table>
</div>


<!-- User Feedback -->


<h1 class="mb-5 mt-5 text-center bg-info">User Feedback</h1>
 <div class="container">
     <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
               <th scope="col">ID</th>
               
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Phone</th>
               <th scope="col">Subject</th>
               
               <th scope="col">Details</th>
               <th scope="col">Reply  </th>
               <th scope="col">Delete</th>
            </tr>
        </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `feedback`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[subject]</td>
                        <td>$row[details]</td>
                        
                       
                     
                        <td><a class='btn btn-success' href='userUpdate.php? id=$row[id]'>Reply</a></td>
                        <td><a class='btn btn-danger' href='feedbackDelete.php? id=$row[id]'>Delete</a></td>
                        
                    </tr>";

              }


             ?>

    
             </tbody>
   </table>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>