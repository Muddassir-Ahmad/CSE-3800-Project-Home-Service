<?php
session_start();
if(isset($_SESSION['username'])){
    $l_username=$_SESSION['username'];

}
else{
    echo "<script>alert('dont access from url')</script>";
    echo "<script>location.href='providerLogin.php'</script>";
}


?>

<!DOCTYPE html>

<html lang="en">

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requests</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

    <!--------------------- NAVBAR ------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="indexProvider.php">
                <img src="img/logo2.jpg" class="rounded-circle" alt="" width="60"
                    height="50" >
                    

                HomeService</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="indexProvider.php">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="#">Medication</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Plumber</a></li>
                            <li><a class="dropdown-item text-dark" href="profile.html">Electrician</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Tutor</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Laundry</a></li>


                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="providerr/profileProvider.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="request.php">Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="providerr/providerLogin.php">Login/Register</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="pAbout.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="pContact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="logoutProvider.php">Logout</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>


    
  <div class="container-fluid">
 
     <div class="container">
     <h1 class=" mt-5 mb-5 text-center bg-info ">User Request</h1>
     <table class="table table-white table-striped table-hover">
        <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Name</th>
               <th scope="col">Phone</th>
               <th scope="col">Service</th>
               <th scope="col">Date</th>
               <th scope="col">Time</th>
               <th scope="col">Payment</th>
               <th scope="col">Details</th>
              
               <th scope="col">Accept  </th>
               <th scope="col">Reject</th>
               
            </tr>
        </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `request`WHERE providerName='$l_username' AND status='' ");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        
                       
                        <td>$row[name]</td>
                        <td>$row[phone]</td>
                        
                        <td>$row[service]</td>
                        <td>$row[date]</td>
                        <td>$row[time]</td>
                        <td>$row[payment]</td>
                        <td>$row[des]</td>
                       
                       
                        <td><a class='btn btn-success' href='accept.php? id=$row[id]'>Reject</a></td>
                        <td><a class='btn btn-danger' href='reject.php? id=$row[id]'>Accept</a></td>
                        
                        
                    </tr>";

              }


             ?>

    
             </tbody>
   </table>


</div>


   <!-- footer -->
        <footer class="fixed-bottom">
            <div class="footer-content">
                <h3>Home-Service</h3>
                <p>We are dedicated to make lifestyle easier and comfortable.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <!-- <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-google"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li> -->
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2022 Home-Service. designed by <span>Home-Service Team</span></p>
            </div>
        </footer>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>