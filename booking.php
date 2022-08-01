
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Counselling Session Booking</title>

         <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


         <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
//nicely done great fun yet best boy
//Fine hat cook fire fiod boy fresh best best
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

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
//great

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <?php include ("navbar.php") ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                        <li class="breadcrumb-item active">Counselling Session Booking</li>
                                    </ol>

                                    <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">account_box</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <strong>Fill your Counselling Session Booking forms</strong>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                            <a class="btn btn-success"
                                               href="dashboard.php">Go to Dashboard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">credit_card</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <small>Please we humbly entreat you to make payment right away to book your seat. Please call +233 246 535 961 when you have successfully made payment. Thank you</small>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                            <a class="btn btn-success"
                                               href="dashboard.php">Pay Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <h1 class="h2">Counselling Session Booking</h1>
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                        <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-status">
                                                    <div class="form-row">
                                                        <label id="label-status" for="status"
                                                            class="col-md-3 col-form-label form-label">Title
                                                            </label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select">
                                                                <option selected>Dr.</option>
                                                                <option value="1">Fr.</option>
                                                                <option value="2">Sis.</option>
                                                                <option value="1">Mr.</option>
                                                                <option value="2">Mrs.</option>
                                                                <option value="1">Ms./Miss</option>
                                                                

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-certname">
                                                    <div class="form-row">
                                                        <label id="label-certname"
                                                               for="certname"
                                                               class="col-md-3 col-form-label form-label">Name on Certificate</label>
                                                        <div class="col-md-9">
                                                            <input id="certname"
                                                                   type="text"
                                                                   placeholder="Name to be shown on Certificate"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-status">
                                                    <div class="form-row">
                                                        <label id="label-status" for="status"
                                                            class="col-md-3 col-form-label form-label">Sex
                                                            </label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select">
                                                                <option selected>Male</option>
                                                                <option value="1">Female</option>
                                                                <option value="2">Prefer not to say</option>
                                                                
                                                                

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-email">
                                                    <div class="form-row">
                                                        <label id="label-email"
                                                               for="email"
                                                               class="col-md-3 col-form-label form-label">Your email address</label>
                                                        <div class="col-md-9">
                                                            <div role="group"
                                                                 class="input-group input-group-merge">
                                                                <input id="email"
                                                                       type="email"
                                                                       placeholder="Your email address"
                                                                       value=""
                                                                       class="form-control form-control-prepended">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="material-icons">email</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                                        </div>
                                                    </div>
                                                </div>
</div>
                                                <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-phonenumber">
                                                    <div class="form-row">
                                                        <label id="label-phonenumber"
                                                               for="phonenumber"
                                                               class="col-md-3 col-form-label form-label">Personal contact number</label>
                                                        <div class="col-md-9">
                                                            <input id="phonenumber"
                                                                   type="text"
                                                                   placeholder="Your phone number"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-telegram">
                                                    <div class="form-row">
                                                        <label id="label-telegram"
                                                               for="telegram"
                                                               class="col-md-3 col-form-label form-label">Telegram App contact number</label>
                                                        <div class="col-md-9">
                                                            <input id="telegram"
                                                                   type="text"
                                                                   placeholder="Your telegram number"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-lastname">
                                                    <div class="form-row">
                                                        <label id="label-lastname"
                                                               for="lastname"
                                                               class="col-md-3 col-form-label form-label">Nation teachers council license number</label>
                                                        <div class="col-md-9">
                                                            <input id="lastname"
                                                                   type="text"
                                                                   placeholder="No. should be like PT/000660/2022"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-schname">
                                                    <div class="form-row">
                                                        <label id="label-schname"
                                                               for="schname"
                                                               class="col-md-3 col-form-label form-label">Name of School</label>
                                                        <div class="col-md-9">
                                                            <input id="schname"
                                                                   type="text"
                                                                   placeholder="Name of School"
                                                                   value=""
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input id="customCheck01"
                                                           type="checkbox"
                                                           class="custom-control-input">
                                                    <label for="customCheck01"
                                                           class="custom-control-label">Check this custom checkbox</label>
                                                </div>
                                            </div> -->
                                            
                                            
                                            <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-highestEduLevel">
                                                <div class="form-row">
                                                    <label id="label-highestEduLevel" for="highestEduLevel"
                                                        class="col-md-3 col-form-label form-label">What district or Municipality are you coming from</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select9" class="form-control custom-select">
                                                            <option selected value="none">Choose your district or Municipality
                                                            </option>
                                                            <option value="adenta">Adenta Municipality</option>
                                                            <option value="east">Ga - East Municipality</option>
                                                            <option value="madina">La Nkwantanang Madina Municipality</option>
                                                            <option value="other">other</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="specify">
                                            <div class="list-group-item toggle-target target-report" data-lookup="1">

                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-specify">
                                                    <div class="form-row">
                                                        <label id="label-specify" for="specify"
                                                            class="col-md-3 col-form-label form-label">specify</label>
                                                        <div class="col-md-9">
                                                            <input id="specify" type="text" placeholder="Specify your district or municipality"
                                                                value="" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
</div>
<div id="east" class="list-group-item">
                                            <div id="east" class="form-group m-0" role="group"
                                                aria-labelledby="label-venuepref">
                                                <div class="form-row">
                                                    <label id="label-venuepref" for="venuepref"
                                                        class="col-md-3 col-form-label form-label">Venue Preference</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select2" class="form-control custom-select">
                                                            <option selected value="none">Choose a venue of your choice
                                                            </option>
                                                            <option value="ashongmang">Ashongmang Presby Church</option>
                                                            <option value="kwabenya">Kwabenya SHS</option>
                                                            

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-foodpref">
                                                <div class="form-row">
                                                    <label id="label-foodpref" for="foodpref"
                                                        class="col-md-3 col-form-label form-label">Food Preference</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select2" class="form-control custom-select">
                                                            <option selected value="none">Choose food Preference
                                                            </option>
                                                            <option value="waakye">Waakye with chicken</option>
                                                            <option value="jollof">Jollof with chicken</option>
                                                            <option value="rice">plain rice with chicken</option>
                                                            <option value="kenkey">Jollof with Fish</option>
                                                            

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-heard">
                                                <div class="form-row">
                                                    <label id="label-heard" for="heard"
                                                        class="col-md-3 col-form-label form-label">How did you hear/know of this training</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select2" class="form-control custom-select">
                                                            <option selected value="none">Choose food Preference
                                                            </option>
                                                            <option value="website">TUCEE Website</option>
                                                            <option value="gnacc">GNACC Website</option>
                                                            <option value="facebook">Facebook</option>
                                                            <option value="whatsapp">WhatsApp</option>
                                                            <option value="instagram">Instagram</option>
                                                            <option value="friend">Friend</option>
                                                            <option value="radio">Radio</option>
                                                            <option value="other">other</option>
                                                            

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">credit_card</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <small>Please we humbly entreat you to make payment right away to book your seat. Please call +233 246 535 961 when you have successfully made payment. Thank you</small>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> -->


                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                                        <div class="col-sm-9">
                                                            <div role="group"
                                                                 class="input-group input-group-merge form-control-prepended">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="page-nav"
                                     class="col-lg-auto page-nav">
                                    <div data-perfect-scrollbar>
                                        <div class="page-section pt-lg-32pt">
                                            <ul class="nav page-nav__menu">
                                                <li class="nav-item">
                                                    <a href="#"
                                                       class="nav-link active">Counselling Session Booking</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="payment.php"
                                                       class="nav-link">Payment</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="certification.php"
                                                       class="nav-link">Cerification</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a href="student-account-edit-profile.html"
                                                       class="nav-link">Profile &amp; Privacy</a>
                                                </li> -->
                                            </ul>
                                            <div class="page-nav__content">
                                                <button class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php include ("sidebar.php") ?>

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

        <script src="assets/js/view.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
</html>
