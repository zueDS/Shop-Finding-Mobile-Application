<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>Sign Up | Velzon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="auth-page-wrapper pt-5">
            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
                <div class="bg-overlay"></div>

                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div>
                                    <a href="index.html" class="d-inline-block auth-logo">
                                        <img src="assets/images/logo-light.png" alt="" height="20">
                                    </a>
                                </div>
                                <p class="mt-3 fs-15 fw-medium">Advertise your products Easily on Velzon</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Create New Account</h5>
                                        <p class="text-muted">Get your free velzon account now</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <div class="needs-validation" >

                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Shop Name <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="p1" placeholder="Enter shop Name" required>
                                                <div class="invalid-feedback">
                                                    Please enter Shop Name
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="p2" placeholder="Enter Email" required>
                                                <div class="invalid-feedback">
                                                    Please enter Email
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Contact <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="p3" placeholder="Enter contact" required>
                                                <div class="invalid-feedback">
                                                    Please enter contact 
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="username" class="form-label">City <span class="text-danger">*</span></label>
                                                <select name="country_id" id="p4" class="form-control">
                                                    <option>None</option>
                                                    <?php
                                                    //Load District
                                                    include 'phpfiles/DB.php';
                                                    $sqlzy34 = "SELECT * FROM cities";
                                                    $query4 = $conn->query($sqlzy34);
                                                    foreach ($query4 as $value4) {
                                                        ?>
                                                        <option value="<?php echo $value4['city']; ?>"><?php echo $value4['city']; ?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>


                                            <div class="mb-3">
                                                <label for="username" class="form-label">Address <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="p5" placeholder="Enter shop Address" required>
                                                <div class="invalid-feedback">
                                                    Please enter shop type 
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="p6" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    <div class="invalid-feedback">
                                                        Please enter password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Confirm Password</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="p7" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    <div class="invalid-feedback">
                                                        Please enter password
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="button" onclick="registeruser()">Sign Up</button>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Already have an account ? <a href="Login.php" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-muted">&copy;
                                    <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- particles js -->
        <script src="assets/libs/particles.js/particles.js"></script>
        <!-- particles app js -->
        <script src="assets/js/pages/particles.app.js"></script>
        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>
        <!-- password create init -->
        <script src="assets/js/pages/passowrd-create.init.js"></script>
        <script>
                                        function registeruser() {

                                            var name = $('#p1').val();
                                            var emmailz = $('#p2').val();
                                            var contact = $('#p3').val();
                                            var cityz = $('#p4 option:selected').text();
                                            var shoptype = $('#p5').val();
                                            var pw1 = $('#p6').val();
                                            var pw2 = $('#p7').val();





                                            if (name == "" || emmailz == "" || contact == "" || shoptype == "" || pw1 == "" || pw2 == "") {

                                                swal("Error!", "Please fill all  mandatory feilds....!", "error");
                                            } else if (cityz == "None") {

                                                swal("Error!", "Please select valid district....!", "error");
                                            } else if (cityz == "None" || cityz == "Select city" || cityz == "") {

                                                swal("Error!", "Please select valid City....!", "error");
                                            } else if ((contact.length > 10) || (contact.length < 10)) {

                                                swal("Error!", "Please enter valid contact number 10 digits....!", "error");
                                            } else if (!(pw1 == pw2)) {

                                                swal("Error!", "Passwords are not matched....!", "error");
                                            } else {

                                                $.post("phpfiles/User_register.php",
                                                        {
                                                            name: name,
                                                            emmailz: emmailz,
                                                            contact: contact,
                                                            shoptype: shoptype,
                                                            cityz: cityz,
                                                            pw1: pw1

                                                        },
                                                function(data, status) {
                                                    if (data == "ok") {


                                                        swal("Done..!User Registered Sucessfully...!", {
                                                            icon: "success",
                                                        });

                                                        setTimeout(rideirecttoLogin(), 56000);


                                                    }
                                                    else if (data == "Already") {
                                                        swal("Error!", "This Email is already taken....!", "error");

                                                    } else {

                                                        alert(data);
                                                    }

                                                });
                                            }

                                        }


                                        function rideirecttoLogin() {

                                            window.location = "CreateAccount.php";
                                        }

        </script>
    </body>


</html>