<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

    <!--------------------- NAVBAR ------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-dark.jpg" alt="" width="50"
                    height="30" />

                Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark" href="medication.html">Medication</a></li>
                            <li><a class="dropdown-item text-dark" href="electrician.html">Electrician</a></li>
                            <li><a class="dropdown-item text-dark" href="plumber.html">Plumber</a></li>
                            <li><a class="dropdown-item text-dark" href="tutor.html">Tutor</a></li>
                            <li><a class="dropdown-item text-dark" href="transport.html">Transport</a></li>
                            <li><a class="dropdown-item text-dark" href="laundry.html">Laundry</a></li>


                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.html">Contact</a>
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


    <!-- Experts -->

    <div class="container-fluid mt-5">
        <div class="row border border-danger py-5 bg-primary">
            <div class="col-12">
                <!-- <img class="img-fluid" src="/img/medication_cover.jpg" alt=""> -->
                <h1 class="text-white text-center"> Electrician Experts</h1>
            </div>
        </div>
    </div>
    <!-- <div class="card bg-dark text-black">
        <img src="/img/medication_cover.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
      </div> -->



      

    <div class="container-fluid mb-5">
        <div class="d-flex">

        

        

            <div class="card m-auto mt-5" style="width: 18rem;">
        
            <?php

             include 'config.php';
              $id = $_REQUEST['id'];
              $dataFetchQuery = "SELECT * FROM `providerregister` WHERE id='$id'";
              $record = mysqli_query($conn,$dataFetchQuery);
              $data = mysqli_fetch_array($record);
              echo"

                <img src='$data[image]' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>$data[username]</h5>
                    
                    <p class='card-text'>$data[about]
                    </p>
                    <div class='mb-2'>
                        <i class='fas fa-star text-warning'></i>
                        <i class='fas fa-star text-warning'></i>
                        <i class='fas fa-star text-warning'></i>
                        <i class='fas fa-star text-warning'></i>
                        <i class='fas fa-star text-warning'></i>
                    </div>
                    <div class=''>
                        <a href='./medprofile/profile1.html' class='btn btn-primary'>Profile</a>
                        <a href='#' class='btn btn-primary'>Book</a>
                    </div>
                </div>
                ";
        

        ?>
            </div>
            
        
            
            
        

            <div class="card m-auto mt-5" style="width: 18rem;">
        
        <?php

         include 'config.php';
          $id = $_REQUEST['id'];
          $dataFetchQuery = "SELECT * FROM `providerregister` WHERE id='$id'";
          $record = mysqli_query($conn,$dataFetchQuery);
          $data = mysqli_fetch_array($record);
          echo"

            <img src='$data[image]' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>$data[username]</h5>
                
            <p class='card-text'>$data[about]
            </p>
                <div class='mb-2'>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                </div>
                <div class=''>
                    <a href='./medprofile/profile1.html' class='btn btn-primary'>Profile</a>
                    <a href='#' class='btn btn-primary'>Book</a>
                </div>
            </div>
            ";
    

    ?>
        </div>
        <div class="card m-auto mt-5" style="width: 18rem;">
        
        <?php

         include 'config.php';
          $id = $_REQUEST['id'];
          $dataFetchQuery = "SELECT * FROM `providerregister` WHERE id='$id'";
          $record = mysqli_query($conn,$dataFetchQuery);
          $data = mysqli_fetch_array($record);
          echo"

            <img src='$data[image]' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>$data[username]</h5>
                
            <p class='card-text'>$data[about]
            </p>
                <div class='mb-2'>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                </div>
                <div class=''>
                    <a href='./medprofile/profile1.html' class='btn btn-primary'>Profile</a>
                    <a href='#' class='btn btn-primary'>Book</a>
                </div>
            </div>
            ";
    

    ?>
        </div>
        <div class="card m-auto mt-5" style="width: 18rem;">
        
        <?php

         include 'config.php';
          $id = $_REQUEST['id'];
          $dataFetchQuery = "SELECT * FROM `providerregister` WHERE id='$id'";
          $record = mysqli_query($conn,$dataFetchQuery);
          $data = mysqli_fetch_array($record);
          echo"

            <img src='$data[image]' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>$data[username]</h5>
                
            <p class='card-text'>$data[about]
            </p>
                <div class='mb-2'>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                    <i class='fas fa-star text-warning'></i>
                </div>
                <div class=''>
                    <a href='./medprofile/profile1.html' class='btn btn-primary'>Profile</a>
                    <a href='#' class='btn btn-primary'>Book</a>
                </div>
            </div>
            ";
    

    ?>
        </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>