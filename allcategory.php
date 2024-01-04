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
    <title>Categories</title>
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


     <!------------------------------ Categories -------------------------------->
     <div class="container justify-content-center border-dark mb-5">
        <div class="m-5">
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
        
</div>


        <!-- footer -->
    <div class="container-fluid mt-5">
        <footer>
            <div class="footer-content">
                <h3>Get Service</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis minima cumque assumenda
                    doloremque voluptate expedita vel in quis nemo quos.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2022 Get Service. designed by <span>Get Service Team</span></p>
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