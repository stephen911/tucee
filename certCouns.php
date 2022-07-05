<?php
include 'functions.php';
include 'yolkpay.php';
$yolk = new YolkPay();
checker();
$user = users();
//  var_dump($_SESSION['id']);

// if (isset($_POST['btnupdate'])) {
//     extract($_POST);
//     updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard);
// }

// // Yolk mailer
// $mail = new Mail();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NTC CPD Training</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


    <meta name="robots" content="noindex">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    //nice

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">


    <!-- sweetalert -->
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/vendor/spinkit.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">

</head>

<body class=" layout-fluid">

    <div class="preloader">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>

        <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

        <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
    </div>

    <!-- Header Layout -->
    <?php include 'navbar.php'; ?>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container p-0">
                    <div class="row m-0">
                        <div class="col-lg container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Certificate in Counselling</li>
                            </ol>

                            <h1 class="h2">Certificate in Counselling</h1>

                            <?php
                            if ($user['enroll'] == '') {
                                echo '<div class="card border-left-3 border-left-danger card-2by1">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            Certificate in Counselling

                                        </div>

                                        <form action="" method="POST" class="enrolluser">
                                            <input id="" type="hidden" name="enroll" value="enrolled">
                                            <input id="enrolluser" type="hidden" placeholder="" value="' . $user['id'] . '" class="form-control" name="id">

                                            <div class="page-nav__content">
                                                <button type="submit" class="btn btn-success">Enroll Now</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>';
                            } else {
                                echo '<div class="card border-left-3 border-left-danger card-2by1">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            You have  <span style="color: green;">Enrolled</span> in our Certificate in Counselling Program.
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>';
                            }
                            ?>

                            <!-- </?php

                            if ($user['paystatus'] == "paid") {
                                echo '<div class="card border-left-3 border-left-danger card-2by1">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    Certificate in Counselling
                                                    <strong class="text-danger">$25.00</strong> <a href="#">#8331</a> 
                                                </div>
                                                <div class="media-right">
                                                    <a href="dashboard.php"
                                                       class="btn btn-success float-right">Go to Dashboard</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdGXSiFPxZob_5ZUsvKh9dwDZseZ8GrE8x7uJ6I5JES3sPvzg/viewform?embedded=true" width="640" height="585" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>';
                            } else {
                                echo '<div class="card border-left-3 border-left-danger card-2by1">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    Certificate in Counselling will be made available after Payment. Thank You!
                                                    <strong class="text-danger">$25.00</strong> <a href="#">#8331</a> 
                                                </div>
                                                <div class="media-right">
                                                    ' . $yolk->handler() . '
                                                    ' . $yolk->payscript($user['title'], $user['name'], $user['email'], $user['contact'], 70, $ref = '') . '
                                                    ' . $yolk->pay("Pay Now") . '
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>';
                            }

                            ?> -->

                            <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc_2esK-JYFGRpODktsDDhK4Wr7wMmgIhp8CITNIo6hG4aB7A/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
                            <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdGXSiFPxZob_5ZUsvKh9dwDZseZ8GrE8x7uJ6I5JES3sPvzg/viewform?embedded=true" width="640" height="585" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->


                            <!-- Pagination -->


                        </div>
                        <div id="page-nav" class="col-lg-auto page-nav">
                            <div data-perfect-scrollbar>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include("sidebar.php") ?>


            <!-- App Settings FAB -->


        </div>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>


    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>


    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/dom-factory.js"></script>
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/regions.js"></script>

    <script src="assets/js/view.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>




    <script src="processor.js"></script>

</body>



</html>
