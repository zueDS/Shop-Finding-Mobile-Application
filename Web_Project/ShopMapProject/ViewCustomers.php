<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


    <head>

        <meta charset="utf-8" />
        <title>View All Customers | Velzon </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

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
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- dropzone css -->
        <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css" type="text/css" />

        <!-- Filepond css -->
        <link rel="stylesheet" href="assets/libs/filepond/filepond.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">

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

        <link rel="stylesheet" href="../../../../cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="../../../../cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

        <link rel="stylesheet" href="../../../../cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


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

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php
            include './AdminHeadersecond.php';
            ?>

            <!-- /.modal -->
            <!-- ========== App Menu ========== -->

            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">View all Customers</h4>

                                    </div><!-- end card header -->

                                </div>
                            </div>
                            <!--end col-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Customers Register in system</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                            <thead>
                                                <tr>

                                                    <th>Customer Name</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $emaillog = $_SESSION["emailz"];
                                                $ename = $_SESSION["shopname"];
                                                ?>
                                                <?php
                                                include './phpfiles/DB.php';


                                                $sqlzy34 = "SELECT * FROM customer";
                                                $query4 = $conn->query($sqlzy34);

                                                foreach ($query4 as $value4) {
                                                    ?>

                                                    <tr>

                                                        <td><?php echo $value4['cusnamez']; ?></td>
                                                        <td><?php echo $value4['emailz']; ?></td>
                                                        <td><?php echo $value4['contactz']; ?></td>
                                                        <td><button class="btn btn-danger" onclick="Deletercus(<?php echo $value4['id']; ?>)">Remove</button></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <!--end row-->



                        <!--end row-->


                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Velzon.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Velzon
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
        <div id="preloader">
            <div id="status">
                <div class="spinner-border text-primary avatar-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <div class="customizer-setting d-none d-md-block">
            <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
            </div>
        </div>

        <!-- Theme Settings -->


        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- dropzone min -->
        <script src="assets/libs/dropzone/dropzone-min.js"></script>
        <!-- filepond js -->
        <script src="assets/libs/filepond/filepond.min.js"></script>
        <script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
        <script src="assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
        <script src="assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
        <script src="assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

        <script src="assets/js/pages/form-file-upload.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/js/pages/datatables.init.js"></script>
        <script src="assets/js/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="../../../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="../../../../cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="../../../../cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="../../../../cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script>
            function Deletercus(vv) {



                var userid = vv;




                $.post("phpfiles/removecustomer.php",
                        {
                            userid: userid

                        },
                function(data, status) {

                    if (data == "ok") {


                        swal("Customer Removed...!", {
                            icon: "success",
                        });
                        window.location = "ViewCustomers.php";

                    } else {

                        swal("Error!", "Something Went Wrong", "error");

                    }

                });

            }

        </script>
    </body>





</html>