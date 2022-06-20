<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Signup</title>

         <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


         <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
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

    <body class="login">

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="assets/images/logo/tucee.png"
                             class="avatar-img rounded-circle"
                             alt="TUCEE Online Registration" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="#"
                       class="navbar-brand m-0">TUCEE Online Registration</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Sign Up</h4>
                        <p class="card-subtitle">Create a new account</p>
                    </div>
                    <div class="card-body">

                        <!-- <a href="dashboard.php"
                           class="btn btn-light btn-block">
                            <span class="fab fa-google mr-2"></span>
                            Continue with Google
                        </a>

                        <div class="page-separator">
                            <div class="page-separator__text">or</div>
                        </div> -->

                        <form action="dashboard.php"
                              novalidate
                              method="get">
                            <div class="form-group">
                                <label class="form-label"
                                       for="name">First Name:</label>
                                <div class="input-group input-group-merge">
                                    <input id="name"
                                           type="text"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your first name">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="name">Last Name:</label>
                                <div class="input-group input-group-merge">
                                    <input id="name"
                                           type="text"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your last name">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Email address:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email"
                                           type="email"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your email address">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Choose a password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password2">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password2"
                                           type="password"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Confirm password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary btn-block mb-3">Sign Up</button>
                            <div class="form-group text-center mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input id="terms"
                                           type="checkbox"
                                           class="custom-control-input"
                                           checked
                                           required="">
                                    <label for="terms"
                                           class="custom-control-label text-black-70">I agree to the <a href="#"
                                           class="text-black-70"
                                           style="text-decoration: underline;">Terms of Use</a></label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-black-50">Already signed up? <a href="index.php">Login</a></div>
                </div>
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

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
</html>