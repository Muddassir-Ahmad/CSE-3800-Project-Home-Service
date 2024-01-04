<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body style="background-color:black ;">
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="insertProvider.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h3>Provider Registration</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Name :
                                <input type="text" class="form-control" name="r_name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Email :
                                <input type="text" class="form-control" name="r_email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Age :
                                <input type="text" class="form-control" name="r_age" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Service :
                                <!-- <input type="" class="form-control" name="r_service"> -->
                                <select name="r_service"class="form-control" id="r_service" required>
                                      <option value="">Choose Service..</option>
                                      <option value="Medication">Medication</option>
                                      <option value="Electrician">Electrician</option>
                                      <option value="Plumber">Plumber</option>
                                      <option value="Tutor">Tutor</option>
                                      <option value="Transport">Transport</option>
                                      <option value="Laundry">Laundry</option>
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Address :
                                <input type="text" class="form-control" name="r_address" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Mobile :
                                <input type="text" class="form-control" name="r_mobile" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Password :
                                <input type="text" class="form-control" name="r_pass" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Confirm Password :
                                <input type="text" class="form-control" name="r_con_pass" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Image :
                                <input type="file" class="form-control" name="image" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                about :
                                <textarea name="r_about" id="" cols="44" rows="2" required></textarea>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-dark col-12" name="login">Register</button>





                    Already Registered?<a href="providerLogin.php">Login Here</a>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>