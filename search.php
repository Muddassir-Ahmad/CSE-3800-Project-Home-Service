<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search</title>
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
                            <li><a class="dropdown-item text-dark" href="medication.php">Health CheckUp</a></li>
                            <li><a class="dropdown-item text-dark" href="plumber.php">Plumber</a></li>
                            <li><a class="dropdown-item text-dark" href="electrician.php">Electrician</a></li>
                            <li><a class="dropdown-item text-dark" href="tutor.php">Tutor</a></li>
                            <li><a class="dropdown-item text-dark" href="laundry.php">Laundry</a></li>
                            <li><a class="dropdown-item text-dark" href="transport.php">Transport</a></li>


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
                <form class="d-flex" action="search.php" method="post">
                
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" name="searchh "type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>




  <div class="container-fluid">
    <div class= "row justify-content-center mt-5">
    <h1 class="mb-5 text-center bg-success text-white ">Search Result</h1>
      
    </div>
  </div>  

<?php


include 'config.php';
$search = $_POST['search'];

    

    $result = mysqli_query($conn,"SELECT * FROM `providerregister` WHERE service='$search'");


    ?>

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
               <th scope="col">Profile</th>
               <th scope="col">Book</th>
               <!-- <th scope="col">Pass</th> -->
               <!-- <th scope="col">About</th> -->
               <!-- <th scope="col">Update  </th>
               <th scope="col">Delete</th>
               <th scope="col">Approve</th>
            </tr> -->
        </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `providerregister` Where service='$search'");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        <td><img src='image/$row[image]' width='100px'></td> 
                       
                        <td>$row[username]</td>
                        <td>$row[email]</td>
                        <td>$row[age]</td>
                        <td>$row[service]</td>
                        <td>$row[address]</td>
                        <td>$row[mobile]</td>


                        <td><a class='btn btn-success' href='proProfile.php? id=$row[id]'>Profile</a></td>
                        <td><a class='btn btn-warning' href='book.php? id=$row[id]'>Book</a></td>
                        
                        
                    </tr>";

              }


             ?>

    
             </tbody>
   </table>
</div>


<!-- footer -->
<div class="container-fluid">
        <footer class="">
            <div class="footer-content ">
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