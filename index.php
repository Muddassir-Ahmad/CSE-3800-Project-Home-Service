<?php
session_start();
if(isset($_SESSION['username'])){


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

    <!--------------------------- Headings ------------------->

    <div class="container-fluid">
        <div class="row " style="margin:200px ;">
            <div class="col-lg-6 col-md-12 mt-5">
                <div class="d-flex">
                    <div>
                        <h1>
                            Hire
                        </h1>
                    </div>
                    <div>
                        <h1 style="margin-left:20px ; color: rgba(249, 205, 9, 0.555)">
                            Experts
                        </h1>
                    </div>
                    <div>
                        <h1 style="margin-left: 20px ;">
                            &
                        </h1>
                    </div>
                </div>
                <div>

                    <h1>
                        Get Your Job Done
                    </h1>
                </div>
                <div style="width: 340px;height: 5px;background-color: rgba(249, 205, 9, 0.555);  ">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src ="./img/home1.png" width="400" height="400" src="" alt="home">
            </div>
        </div>


    </div>
    <!------------------------------ Categories -------------------------------->
    <div class="container justify-content-center border-dark">
        <div class="m-5 mb-2">
            <h4 class="text-warning">
                Categories
            </h4>
            <h2>
                Polular Categories
            </h2>
        </div>



        <div class="row mb-5">
        <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <div class="d-flex">
                        <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/medication_logo.png"
                            alt="Card image cap">
                        <div class="card-body m-auto">
                            <h5 class="card-title">Health Checkup</h5>
                            <p class="card-text">100 listing</p>
                            <a href="medication.php" class="btn btn-primary">Get service</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg">
                    <div class="d-flex">
                        <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/electrician_logo.png"
                            alt="Card image cap">
                        <div class="card-body m-auto">
                            <h5 class="card-title">Electrician</h5>
                            <p class="card-text">100 listing</p>
                            <a href="electrician.php" class="btn btn-primary">Get service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg">
                    <div class="d-flex">
                        <img class="card-img-top  m-5" style="width: 10vw;height: 10vw;" src="./img/plumber_logo.png"
                            alt="Card image cap">
                        <div class="card-body m-auto">
                            <h5 class="card-title">Plumber</h5>
                            <p class="card-text">100 listing</p>
                            <a href="plumber.php" class="btn btn-primary">Get service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row 2 -->
        <div class="row mb-5">
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg ">
                    <div class="d-flex">
                        <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/tutor_logo.png"
                            alt="Card image cap">
                        <div class="card-body m-auto">
                            <h5 class="card-title">Tutor</h5>
                            <p class="card-text">100 listing</p>
                            <a href="tutor.php" class="btn btn-primary">Get service</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg">
                    <div class="d-flex">
                        <img class="card-img-top m-5" style="width: 10vw;height: 10vw;" src="./img/transport_logo.png"
                            alt="Card image cap">
                        <div class="card-body m-auto">
                            <h5 class="card-title">Transport</h5>
                            <p class="card-text">100 listing</p>
                            <a href="transport.php" class="btn btn-primary">Get service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card shadow-lg">
                    <div class="d-flex">
                        <img class="card-img-top  m-5" style="width: 10vw;height: 10vw;" src="./img/laundry_logo.png"
                            alt="Card image cap">
                        <div class="card-body m-auto">
                            <h5 class="card-title">Laundry</h5>
                            <p class="card-text">100 listing</p>
                            <a href="laundry.php" class="btn btn-primary">Get Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12  ">
                
                <a href="allcategory.php" class="btn btn-danger d-block m-auto p-3" >View All Categories</a>

            </div>
        </div>

        <!------------------- How it work ----------------------->
        <div class="container-fluid mb-5">
            <div>
                <div class="m-auto mt-5 rounded " style="width: 70vw;height: 40vw; background-color: #f9a600;  ">

                    <h1 class="text-white text-center  p-2">How it work</h1>

                    <div class="d-flex justify-content-center">
                        <div class="card m-4 shadow-lg" style="width: 18rem;;">
                            <img src="./img/create.png" class="card-img-top " alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Create Account</h5>
                                <p class="card-text text-center">At first you have to register</p>

                            </div>
                        </div>

                        <div class="card m-4 shadow-lg" style="width: 18rem;">
                            <img src="./img/find_expert.png" class="card-img-top " alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Find Expert</h5>
                                <p class="card-text text-center">Search your desired service</p>

                            </div>
                        </div>

                        <div class="card m-4 shadow-lg" style="width: 18rem;">
                            <img src="./img/get_service.png" class="card-img-top " alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Get Service</h5>
                                <p class="card-text text-center">Book the service provider</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

       
    </div>





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