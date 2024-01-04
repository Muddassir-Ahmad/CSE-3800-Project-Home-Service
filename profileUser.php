<?php
    

    include 'config.php';

   
session_start();
if(isset($_SESSION['username'])){

$l_username=$_SESSION['username'];
}
else{
echo "<script>alert('dont access from url')</script>";
echo "<script>location.href='login.html'</script>";
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Home</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>


<body>


      <!--------------------- NAVBAR ------------------------->

      <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">
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
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
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
                        <a class="nav-link text-dark" href="bookings.php">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="profileUser.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="login.html">Login/Register</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="logout.php">Logout</a>
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

<!-- session -->

<!-- session end -->



    <!-- database theke fetching data -->
    <?php
    

              include 'config.php';




            //   $name = $_REQUEST['username'];
                // $name = $_POST['l_username'];
              $allData = mysqli_query($conn,"SELECT * FROM `register` WHERE username='$l_username'");

             //   row akare data ashbe
             while($row = mysqli_fetch_array($allData)){
                echo"
              
  

                        <!--------------------------------- USER PROFILE---------------------------------->

                        <div class='container-fluid mt-5 mb-5'>
    
                        <div class='row d-flex justify-content-center'>
                            
                            <div class='col-md-7'>
                                
                                <div class='card p-3 py-4'>
                                    
                                    <div class='text-center'>
                                      
                                      
                                      <div class='card-img-top justify-content-center  m-auto mt-4 '
                                    style='width: 15vw;height: 15vw;  '>
                                    <img class='img-fluid w-100 h-100' src='./$row[image]' alt=''>
                                   
                                       </div>
                                    </div>
                                    
                                    <div class='text-center mt-3'>
                                        
                                        
                
                                        <h3 class='mt-2 mb-3 mb-0 text-uppercase text-Dark'>$row[username]</h3>
                                        
                                        
                                     
                                        <span><h6 class='d-inline-block m-2 text-uppercase text-Dark'>Address : </h6>$row[address]</span><br>
                                        <span><h6 class='d-inline-block m-2 text-uppercase text-Dark'>Email : </h6>$row[email]</span><br>
                                        <span><h6 class='d-inline-block m-2 text-uppercase text-Dark'>Mobile : </h6>$row[mobile]</span><br>
                                        
                                        
                                        
                                        
                                        <div class='buttons m-5'>
                                         
                                        <a href='edituser.php? id=$row[id]'><button class='btn btn-outline-primary px-4'>Edit Profile</button></a>
                                            <a href='upload.php?id=$row[id]'><button class='btn btn-info px-4 ms-3'>Upload photo</button></a>
                                            
                                         
                                        </div>
                                        
                                        
                                    </div>
                                    
                                   
                                    
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                


                        <!--- TRY1 END --->
                   
                        
                    ";

              }
            
            
             ?>

    <!--  -->

    <!-- profile -->
    <!-- <div class="container-fluid mt-5">
    
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    
                    <div class="text-center">
                        <img src="./img/med1.jpg" width="250" height="250" class="">
                    </div>
                    
                    <div class="text-center mt-3"> -->
                        
                        <!-- <span class="bg-secondary p-1 px-4 rounded text-white">Profile</span> -->

                        <!-- <h5 class="mt-2 mb-0">Dr. Elizabeth Blackwell</h5>
                        <span>Medication</span>
                        
                        <div class="px-4 m-4">
                            <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        
                        </div>
                        
                         <ul class="social-list">
                            <li><i class="fa fa-facebook"></i></li>
                           
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            
                        </ul>
                        
                        <div class="buttons">
                            
                            <button class="btn btn-outline-primary px-4">Message</button>
                            <button class="btn btn-primary px-4 ms-3">Contact</button>
                        </div>
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div> -->

 <!-- footer -->
 <div class="container-fluid">
        <footer>
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