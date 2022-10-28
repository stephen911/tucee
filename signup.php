<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


    <meta name="robots" content="noindex">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">


    <!-- sweetalert -->
    <link type="text/css" href="assets/css/sweetalert2.min.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/vendor/spinkit.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">

</head>

<body class="login">

    <div class="d-flex align-items-center" style="min-height: 100vh">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
            <div class="text-center mt-5 mb-1">
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">TUCEE Institute of Counselling and Technology</h4>
                        <!-- <p class="card-subtitle">Access your account</p> -->
                    </div>

                </div>



                <div class="avatar avatar-lg">
                    <img src="assets/images/logo/tucee.png" class="avatar-img rounded-circle" alt="TUCEE Online Registration" />
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5 navbar-light">
                <a href="#" class="navbar-brand m-0">TUCEE Online Registration</a>
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

                    <form action="dashboard.php" novalidate method="get" class="register">
                        <div class="form-group">
                            <label class="form-label" for="name">First Name:</label>
                            <div class="input-group input-group-merge">
                                <input id="name" type="text" required="required" class="form-control form-control-prepended" placeholder="Your first name" name="fname">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Other Name:</label>
                            <div class="input-group input-group-merge">
                                <input id="name" type="text" required="" class="form-control form-control-prepended" placeholder="Other name" name="oname">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="name">Last Name:</label>
                            <div class="input-group input-group-merge">
                                <input id="name" type="text" required="required" class="form-control form-control-prepended" placeholder="Your last name" name="lname">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phonenumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <input id="phonenumber" type="text" required="required" class="form-control form-control-prepended" placeholder="Your Phone Number" name="contact">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label id="label-lastname" for="lastname" class="form-label">NTC license No.</label>
                            <div class="input-group input-group-merge">
                                <input id="lincesed" type="text" placeholder="No. should be like PT/000660/2022" class="form-control" name="lincesed">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label id="label-lastname" for="lastname" class="form-label">Registered Number</label>
                            <div class="input-group input-group-merge">
                                <input id="regnumber" type="text" placeholder="Registered Number" class="form-control" name="regnumber">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label id="label-lastname" for="lastname" class="form-label">NTC Email <span style="color: red;">(only newly posted teachers)</span> </label>
                            <div class="input-group input-group-merge">
                                <input id="ntcemail" type="email" placeholder="NTC Email" class="form-control" name="ntcemailpost">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group m-0" role="group" aria-labelledby="label-foodpref">
                                <div class="form-row">
                                    <label id="label-foodpref" for="modality" class="col-md-3 col-form-label form-label">Select Workshop Mode</label>
                                    <div class="col-md-9">
                                        <select id="custom-select2" class="form-control custom-select" name="modality">
                                            
                                            <option value="online">Online</option>
                                            <option value="physical">Face-to-Face</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group m-0" role="group" aria-labelledby="label-foodpref">
                                <div class="form-row">
                                    <label id="label-foodpref" for="ntcemail" class="col-md-3 col-form-label form-label">Are you registered with NTC?</label>
                                    <div class="col-md-9">
                                        <select id="custom-select2" class="form-control custom-select" name="ntcemail">
                                            
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="list-group-item">
                            <div class="form-group m-0" role="group" aria-labelledby="label-region">
                                <div class="form-row">
                                    <label id="label-region" for="region" class="col-md-3 col-form-label form-label">Region</label>
                                    <div class="col-md-9">
                                        <select required="required" id="custom-select8" class="form-control custom-select" name="region">
                                            <option selected value="">
                                            </option>

                                            <option value="Greater Accra">Greater Accra</option>
                                            <option value="Ashanti Region">Ashanti Region</option>
                                            <option value="Ahafo Region">Ahafo Region</option>
                                            <option value="Bono Region">Bono Region</option>
                                            <option value="Bono East Region">Bono East Region</option>
                                            <option value="Central Region">Central Region</option>
                                            <option value="Eastern Region">Eastern Region</option>
                                            <option value="Northern Region">Northern Region</option>
                                            <option value="North East Region">North East Region</option>
                                            <option value="Oti Region">Oti Region</option>
                                            <option value="Savannah Region">Savannah Region</option>
                                            <option value="Upper East Region">Upper East Region</option>
                                            <option value="Upper West Region">Upper West Region</option>
                                            <option value="Volta Region">Volta Region</option>
                                            <option value="Western Region">Western Region</option>
                                            <option value="Western North Region">Western North Region</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="region_districts">

                            <div id="Greater Accra" style="display: none;">

                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="ABLEKUMA CENTRAL MUNICIPAL">ABLEKUMA CENTRAL MUNICIPAL</option>
                                                    <option value="ABLEKUMA NORTH MUNICIPAL">ABLEKUMA NORTH MUNICIPAL</option>
                                                    <option value="ABLEKUMA WEST MUNICIPAL">ABLEKUMA WEST MUNICIPAL</option>
                                                    <option value="ACCRA METROPOLITAN">ACCRA METROPOLITAN</option>
                                                    <option value="ADA EAST DISTRICT">ADA EAST DISTRICT</option>
                                                    <option value="ADA WEST DISTRICT">ADA WEST DISTRICT</option>
                                                    <option value="ADENTAN MUNICIPAL" >ADENTAN MUNICIPAL</option>
                                                    <option value="ASHAIMAN MUNICIPAL">ASHAIMAN MUNICIPAL</option>
                                                    <option value="AYAWASO CENTRAL MUNICIPAL">AYAWASO CENTRAL MUNICIPAL</option>
                                                    <option value="AYAWASO EAST MUNICIPAL">AYAWASO EAST MUNICIPAL</option>
                                                    <option value="AYAWASO NORTH MUNICIPAL">AYAWASO NORTH MUNICIPAL</option>
                                                    <option value="AYAWASO WEST MUNICIPAL">AYAWASO WEST MUNICIPAL</option>
                                                    <option value="GA CENTRAL MUNICIPAL">GA CENTRAL MUNICIPAL</option>
                                                    <option value="GA EAST MUNICIPAL" >GA EAST MUNICIPAL</option>
                                                    <option value="GA NORTH MUNICIPAL">GA NORTH MUNICIPAL</option>
                                                    <option value="GA SOUTH MUNICIPAL">GA SOUTH MUNICIPAL</option>
                                                    <option value="GA WEST MUNICIPAL">GA WEST MUNICIPAL</option>
                                                    <option value="KORLE KLOTTEY MUNICIPAL">KORLE KLOTTEY MUNICIPAL</option>
                                                    <option value="KPONE KATAMANSO DISTRICT">KPONE KATAMANSO DISTRICT</option>
                                                    <option value="KROWOR MUNICIPAL">KROWOR MUNICIPAL</option>
                                                    <option value="LA DADE-KOTOPON MUNICIPAL">LA DADE-KOTOPON MUNICIPAL</option>
                                                    <option value="LA NKWANTANANG MADINA MUNICIPAL">LA NKWANTANANG MADINA MUNICIPAL</option>
                                                    <option value="LEDZOKUKU MUNICIPAL">LEDZOKUKU MUNICIPAL</option>
                                                    <option value="NINGO PRAMPRAM DISTRICT">NINGO PRAMPRAM DISTRICT</option>
                                                    <option value="OKAIKWEI NORTH MUNICIPAL">OKAIKWEI NORTH MUNICIPAL</option>
                                                    <option value="SHAI-OSUDOKU DISTRICT">SHAI-OSUDOKU DISTRICT</option>
                                                    <option value="TEMA METROPOLITAN">TEMA METROPOLITAN</option>
                                                    <option value="TEMA WEST MUNICIPAL">TEMA WEST MUNICIPAL</option>
                                                    <option value="WEIJA GBAWE MUNICIPAL">WEIJA GBAWE MUNICIPAL</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Ahafo Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="ASUNAFO NORTH MUNICIPAL">ASUNAFO NORTH MUNICIPAL</option>
                                                    <option value="ASUNAFO SOUTH DISTRICT">ASUNAFO SOUTH DISTRICT</option>
                                                    <option value="ASUTIFI NORTH DISTRICT">ASUTIFI NORTH DISTRICT</option>
                                                    <option value="ASUTIFI SOUTH DISTRICT">ASUTIFI SOUTH DISTRICT</option>
                                                    <option value="TANO NORTH MUNICIPAL">TANO NORTH MUNICIPAL</option>
                                                    <option value="TANO SOUTH MUNICIPAL">TANO SOUTH MUNICIPAL</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="Bono East Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="ATEBUBU-AMANTIN DISTRICT">ATEBUBU-AMANTIN DISTRICT</option>
                                                    <option value="KINTAMPO NORTH MUNICIPAL">KINTAMPO NORTH MUNICIPAL</option>
                                                    <option value="KINTAMPO SOUTH DISTRICT">KINTAMPO SOUTH DISTRICT</option>
                                                    <option value="NKORANZA NORTH DISTRICT">NKORANZA NORTH DISTRICT</option>
                                                    <option value="NKORANZA SOUTH MUNICIPAL">NKORANZA SOUTH MUNICIPAL</option>
                                                    <option value="PRU EAST DISTRICT">PRU EAST DISTRICT</option>
                                                    <option value="PRU WEST DISTRICT">PRU WEST DISTRICT</option>
                                                    <option value="SENE EAST DISTRICT">SENE EAST DISTRICT</option>
                                                    <option value="SENE WEST DISTRICT">SENE WEST DISTRICT</option>
                                                    <option value="TECHIMAN MUNICIPAL">TECHIMAN MUNICIPAL</option>
                                                    <option value="TECHIMAN NORTH DISTRICT">TECHIMAN NORTH DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Ashanti Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="ADANSI ASOKWA DISTRICT">ADANSI ASOKWA DISTRICT</option>
                                                    <option value="ADANSI NORTH DISTRICT">ADANSI NORTH DISTRICT</option>
                                                    <option value="ADANSI SOUTH DISTRICT">ADANSI SOUTH DISTRICT</option>
                                                    <option value="AFIGYA-KWABERE DISTRICT">AFIGYA-KWABERE DISTRICT</option>
                                                    <option value="AFIGYA KWABRE NORTH DISTRICT">AFIGYA KWABRE NORTH DISTRICT</option>
                                                    <option value="AHAFO ANO NORTH DISTRICT">AHAFO ANO NORTH DISTRICT</option>
                                                    <option value="AHAFO ANO SOUTH EAST DISTRICT">AHAFO ANO SOUTH EAST DISTRICT</option>
                                                    <option value="AHAFO ANO SOUTH WEST DISTRICT">AHAFO ANO SOUTH WEST DISTRICT</option>
                                                    <option value="AKROFUOM DISTRICT">AKROFUOM DISTRICT</option>
                                                    <option value="AMANSIE CENTRAL DISTRICT">AMANSIE CENTRAL DISTRICT</option>
                                                    <option value="AMANSIE SOUTH DISTRICT">AMANSIE SOUTH DISTRICT</option>
                                                    <option value="AMANSIE WEST DISTRICT">AMANSIE WEST DISTRICT</option>
                                                    <option value="ASANTE-AKIM CENTRAL MUNICIPAL">ASANTE-AKIM CENTRAL MUNICIPAL</option>
                                                    <option value="ASANTE-AKIM NORTH DISTRICT">ASANTE-AKIM NORTH DISTRICT</option>
                                                    <option value="ASANTE-AKIM SOUTH DISTRICT">ASANTE-AKIM SOUTH DISTRICT</option>
                                                    <option value="ASOKORE MAMPONG MUNICIPAL">ASOKORE MAMPONG MUNICIPAL</option>
                                                    <option value="ASOKWA MUNICIPAL">ASOKWA MUNICIPAL</option>
                                                    <option value="ATWIMA-KWANWOMA DISTRICT">ATWIMA-KWANWOMA DISTRICT</option>
                                                    <option value="ATWIMA MPONUA DISTRICT">ATWIMA MPONUA DISTRICT</option>
                                                    <option value="ATWIMA NWABIAGYA MUNICIPAL">ATWIMA NWABIAGYA MUNICIPAL</option>
                                                    <option value="ATWIMA NWABIAGYA NORTH DISTRICT">ATWIMA NWABIAGYA NORTH DISTRICT</option>
                                                    <option value="BEKWAI MUNICIPAL">BEKWAI MUNICIPAL</option>
                                                    <option value="BOSOME FREHO DISTRICT">BOSOME FREHO DISTRICT</option>
                                                    <option value="BOSOMTWE DISTRICT">BOSOMTWE DISTRICT</option>
                                                    <option value="EJISU MUNICIPAL">EJISU MUNICIPAL</option>
                                                    <option value="EJURA SEKYEDUMASE MUNICIPAL">EJURA SEKYEDUMASE MUNICIPAL</option>
                                                    <option value="JUABEN MUNICIPAL">JUABEN MUNICIPAL</option>
                                                    <option value="KUMASI METROPOLITAN">KUMASI METROPOLITAN</option>
                                                    <option value="KWABRE EAST MUNICIPAL">KWABRE EAST MUNICIPAL</option>
                                                    <option value="KWADASO MUNICIPAL">KWADASO MUNICIPAL</option>
                                                    <option value="MAMPONG MUNICIPAL">MAMPONG MUNICIPAL</option>
                                                    <option value="OBUASI EAST MUNICIPAL">OBUASI EAST MUNICIPAL</option>
                                                    <option value="OBUASI MUNICIPAL">OBUASI MUNICIPAL</option>
                                                    <option value="OFFINSO MUNICIPAL">OFFINSO MUNICIPAL</option>
                                                    <option value="OFFINSO NORTH DISTRICT">OFFINSO NORTH DISTRICT</option>
                                                    <option value="OFORIKROM MUNICIPAL">OFORIKROM MUNICIPAL</option>
                                                    <option value="OLD TAFO MUNICIPAL">OLD TAFO MUNICIPAL</option>
                                                    <option value="SEKYERE AFRAM PLAINS DISTRICT">SEKYERE AFRAM PLAINS DISTRICT</option>
                                                    <option value="SEKYERE CENTRAL DISTRICT">SEKYERE CENTRAL DISTRICT</option>
                                                    <option value="SEKYERE EAST DISTRICT">SEKYERE EAST DISTRICT</option>
                                                    <option value="SEKYERE KUMAWU DISTRICT">SEKYERE KUMAWU DISTRICT</option>
                                                    <option value="SEKYERE SOUTH DISTRICT">SEKYERE SOUTH DISTRICT</option>
                                                    <option value="SUAME MUNICIPAL">SUAME MUNICIPAL</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Central Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="ABURA-ASEBU-KWAMANKESE DISTRICT">ABURA-ASEBU-KWAMANKESE DISTRICT</option>
                                                    <option value="AGONA EAST DISTRICT">AGONA EAST DISTRICT</option>
                                                    <option value="AGONA WEST MUNICIPAL">AGONA WEST MUNICIPAL</option>
                                                    <option value="AJUMAKO-ENYAN-ESSIAM DISTRICT">AJUMAKO-ENYAN-ESSIAM DISTRICT</option>
                                                    <option value="ASIKUMA-ODOBEN-BRAKWA DISTRICT">ASIKUMA-ODOBEN-BRAKWA DISTRICT</option>
                                                    <option value="ASSIN FOSU MUNICIPAL">ASSIN FOSU MUNICIPAL</option>
                                                    <option value="ASSIN NORTH DISTRICT">ASSIN NORTH DISTRICT</option>
                                                    <option value="ASSIN SOUTH DISTRICT">ASSIN SOUTH DISTRICT</option>
                                                    <option value="AWUTU SENYA DISTRICT">AWUTU SENYA DISTRICT</option>
                                                    <option value="AWUTU SENYA EAST MUNICIPAL">AWUTU SENYA EAST MUNICIPAL</option>
                                                    <option value="CAPE COAST METROPOLITAN">CAPE COAST METROPOLITAN</option>
                                                    <option value="EFUTU MUNICIPAL">EFUTU MUNICIPAL</option>
                                                    <option value="EKUMFI DISTRICT">EKUMFI DISTRICT</option>
                                                    <option value="GOMOA CENTRAL DISTRICT">GOMOA CENTRAL DISTRICT</option>
                                                    <option value="GOMOA EAST DISTRICT">GOMOA EAST DISTRICT</option>
                                                    <option value="GOMOA WEST DISTRICT">GOMOA WEST DISTRICT</option>
                                                    <option value="KOMENDA-EDINA-EGUAFO-ABIREM MUNICIPAL">KOMENDA-EDINA-EGUAFO-ABIREM MUNICIPAL</option>
                                                    <option value="MFANTSEMAN MUNICIPAL">MFANTSEMAN MUNICIPAL</option>
                                                    <option value="TWIFO ATI-MORKWA MUNICIPAL">TWIFO ATI-MORKWA MUNICIPAL</option>
                                                    <option value="TWIFO HEMANG-LOWER DENKYIRA DISTRICT">TWIFO HEMANG-LOWER DENKYIRA DISTRICT</option>
                                                    <option value="UPPER DENKYIRA EAST MUNICIPAL">UPPER DENKYIRA EAST MUNICIPAL</option>
                                                    <option value="UPPER DENKYIRA WEST DISTRICT">UPPER DENKYIRA WEST DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="Bono Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="BANDA DISTRICT">BANDA DISTRICT</option>
                                                    <option value="BEREKUM MUNICIPAL">BEREKUM MUNICIPAL</option>
                                                    <option value="BEREKUM WEST DISTRICT">BEREKUM WEST DISTRICT</option>
                                                    <option value="DORMAA CENTRAL MUNICIPAL">DORMAA CENTRAL MUNICIPAL</option>
                                                    <option value="DORMAA EAST DISTRICT">DORMAA EAST DISTRICT</option>
                                                    <option value="DORMAA WEST DISTRICT">DORMAA WEST DISTRICT</option>
                                                    <option value="JAMAN NORTH DISTRICT">JAMAN NORTH DISTRICT</option>
                                                    <option value="JAMAN SOUTH MUNICIPAL">JAMAN SOUTH MUNICIPAL</option>
                                                    <option value="SUNYANI MUNICIPAL">SUNYANI MUNICIPAL</option>
                                                    <option value="SUNYANI WEST DISTRICT">SUNYANI WEST DISTRICT</option>
                                                    <option value="TAIN DISTRICT">TAIN DISTRICT</option>
                                                    <option value="WENCHI MUNICIPAL">WENCHI MUNICIPAL</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="North East Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="BUNKPURUGU-NAKPANDURI DISTRICT">BUNKPURUGU-NAKPANDURI DISTRICT</option>
                                                    <option value="CHEREPONI DISTRICT">CHEREPONI DISTRICT</option>
                                                    <option value="EAST MAMPRUSI DISTRICT">EAST MAMPRUSI DISTRICT</option>
                                                    <option value="MAMPRUGU MOADURI DISTRICT">MAMPRUGU MOADURI DISTRICT</option>
                                                    <option value="WEST MAMPRUSI DISTRICT">WEST MAMPRUSI DISTRICT</option>
                                                    <option value="YUNYOO-NASUAN DISTRICT">YUNYOO-NASUAN DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Northern Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="GUSHIEGU MUNICIPAL">GUSHIEGU MUNICIPAL</option>
                                                    <option value="KARAGA DISTRICT">KARAGA DISTRICT</option>
                                                    <option value="KPANDAI DISTRICT">KPANDAI DISTRICT</option>
                                                    <option value="KUMBUNGU DISTRICT">KUMBUNGU DISTRICT</option>
                                                    <option value="MION DISTRICT">MION DISTRICT</option>
                                                    <option value="NANTON DISTRICT">NANTON DISTRICT</option>
                                                    <option value="NANUMBA NORTH MUNICIPAL">NANUMBA NORTH MUNICIPAL</option>
                                                    <option value="NANUMBA SOUTH DISTRICT">NANUMBA SOUTH DISTRICT</option>
                                                    <option value="SABOBA DISTRICT">SABOBA DISTRICT</option>
                                                    <option value="SAGNARIGU MUNICIPAL">SAGNARIGU MUNICIPAL</option>
                                                    <option value="SAVELUGU MUNICIPAL">SAVELUGU MUNICIPAL</option>
                                                    <option value="TAMALE METROPOLITAN">TAMALE METROPOLITAN</option>
                                                    <option value="TATALE SANGULI DISTRICT">TATALE SANGULI DISTRICT</option>
                                                    <option value="TOLON DISTRICT">TOLON DISTRICT</option>
                                                    <option value="YENDI MUNICIPAL">YENDI MUNICIPAL</option>
                                                    <option value="ZABZUGU DISTRICT">ZABZUGU DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="Eastern Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="ABUAKWA NORTH MUNICIPAL">ABUAKWA NORTH MUNICIPAL</option>
                                                    <option value="ABUAKWA SOUTH MUNICIPAL">ABUAKWA SOUTH MUNICIPAL</option>
                                                    <option value="ACHIASE DISTRICT">ACHIASE DISTRICT</option>
                                                    <option value="AFRAM PLAINS (KWAHU NORTH) DISTRICT">AFRAM PLAINS (KWAHU NORTH) DISTRICT</option>
                                                    <option value="AKWAPIM NORTH MUNICIPAL">AKWAPIM NORTH MUNICIPAL</option>
                                                    <option value="AKWAPIM SOUTH DISTRICT">AKWAPIM SOUTH DISTRICT</option>
                                                    <option value="AKYEMANSA DISTRICT">AKYEMANSA DISTRICT</option>
                                                    <option value="ASENE MANSO DISTRICT">ASENE MANSO DISTRICT</option>
                                                    <option value="ASUOGYAMAN DISTRICT">ASUOGYAMAN DISTRICT</option>
                                                    <option value="ATIWA EAST DISTRICT">ATIWA EAST DISTRICT</option>
                                                    <option value="ATIWA WEST DISTRICT">ATIWA WEST DISTRICT</option>
                                                    <option value="AYENSUANO DISTRICT">AYENSUANO DISTRICT</option>
                                                    <option value="BIRIM CENTRAL MUNICIPAL">BIRIM CENTRAL MUNICIPAL</option>
                                                    <option value="BIRIM NORTH DISTRICT">BIRIM NORTH DISTRICT</option>
                                                    <option value="BIRIM SOUTH DISTRICT">BIRIM SOUTH DISTRICT</option>
                                                    <option value="DENKYEMBOUR DISTRICT">DENKYEMBOUR DISTRICT</option>
                                                    <option value="FANTEAKWA NORTH DISTRICT">FANTEAKWA NORTH DISTRICT</option>
                                                    <option value="FANTEAKWA SOUTH DISTRICT">FANTEAKWA SOUTH DISTRICT</option>
                                                    <option value="KWAEBIBIREM MUNICIPAL">KWAEBIBIREM MUNICIPAL</option>
                                                    <option value="KWAHU AFRAM PLAINS SOUTH DISTRICT">KWAHU AFRAM PLAINS SOUTH DISTRICT</option>
                                                    <option value="KWAHU EAST DISTRICT">KWAHU EAST DISTRICT</option>
                                                    <option value="KWAHU SOUTH DISTRICT">KWAHU SOUTH DISTRICT</option>
                                                    <option value="KWAHU WEST MUNICIPAL">KWAHU WEST MUNICIPAL</option>
                                                    <option value="LOWER MANYA KROBO MUNICIPAL">LOWER MANYA KROBO MUNICIPAL</option>
                                                    <option value="NEW JUABEN NORTH DISTRICT">NEW JUABEN NORTH DISTRICT</option>
                                                    <option value="NEW JUABEN SOUTH MUNICIPAL">NEW JUABEN SOUTH MUNICIPAL</option>
                                                    <option value="NSAWAM ADOAGYIRI MUNICIPAL">NSAWAM ADOAGYIRI MUNICIPAL</option>
                                                    <option value="OKERE DISTRICT">OKERE DISTRICT</option>
                                                    <option value="SUHUM MUNICIPAL">SUHUM MUNICIPAL</option>
                                                    <option value="UPPER MANYA KROBO DISTRICT">UPPER MANYA KROBO DISTRICT</option>
                                                    <option value="UPPER WEST AKIM DISTRICT">UPPER WEST AKIM DISTRICT</option>
                                                    <option value="WEST AKIM MUNICIPAL">WEST AKIM MUNICIPAL</option>
                                                    <option value="YILO KROBO MUNICIPAL">YILO KROBO MUNICIPAL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Oti Region">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="biakoye">BIAKOYE DISTRICT</option>
                                                    <option value="JASIKAN DISTRICT">JASIKAN DISTRICT</option>
                                                    <option value="KADJEBI DISTRICT">KADJEBI DISTRICT</option>
                                                    <option value="KRACHI EAST DISTRICT">KRACHI EAST DISTRICT</option>
                                                    <option value="KRACHI NCHUMURU DISTRICT">KRACHI NCHUMURU DISTRICT</option>
                                                    <option value="KRACHI WEST DISTRICT">KRACHI WEST DISTRICT</option>
                                                    <option value="NKWANTA NORTH DISTRICT">NKWANTA NORTH DISTRICT</option>
                                                    <option value="NKWANTA SOUTH DISTRICT">NKWANTA SOUTH DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Upper East Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="BAWKU MUNICIPAL">BAWKU MUNICIPAL</option>
                                                    <option value="BAWKU WEST DISTRICT">BAWKU WEST DISTRICT</option>
                                                    <option value="BINDURI DISTRICT">BINDURI DISTRICT</option>
                                                    <option value="BOLGATANGA EAST DISTRICT">BOLGATANGA EAST DISTRICT</option>
                                                    <option value="BOLGATANGA MUNICIPAL">BOLGATANGA MUNICIPAL</option>
                                                    <option value="BONGO DISTRICT">BONGO DISTRICT</option>
                                                    <option value="BUILSA NORTH MUNICIPAL">BUILSA NORTH MUNICIPAL</option>
                                                    <option value="BUILSA SOUTH DISTRICT">BUILSA SOUTH DISTRICT</option>
                                                    <option value="GARU DISTRICT">GARU DISTRICT</option>
                                                    <option value="KASSENA-NANKANA MUNICIPAL">KASSENA-NANKANA MUNICIPAL</option>
                                                    <option value="KASSENA-NANKANA WEST DISTRICT">KASSENA-NANKANA WEST DISTRICT</option>
                                                    <option value="NABDAM DISTRICT">NABDAM DISTRICT</option>
                                                    <option value="PUSIGA DISTRICT">PUSIGA DISTRICT</option>
                                                    <option value="TALENSI DISTRICT">TALENSI DISTRICT</option>
                                                    <option value="TEMPANE DISTRICT">TEMPANE DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Savannah Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="BOLE DISTRICT">BOLE DISTRICT</option>
                                                    <option value="CENTRAL GONJA DISTRICT">CENTRAL GONJA DISTRICT</option>
                                                    <option value="EAST GONJA DISTRICT">EAST GONJA DISTRICT</option>
                                                    <option value="NORTH EAST GONJA DISTRICT">NORTH EAST GONJA DISTRICT</option>
                                                    <option value="NORTH GONJA DISTRICT">NORTH GONJA DISTRICT</option>
                                                    <option value="SAWLA-TUNA-KALBA DISTRICT">SAWLA-TUNA-KALBA DISTRICT</option>
                                                    <option value="WEST GONJA DISTRICT">WEST GONJA DISTRICT</option>




                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="Volta Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="ADAKLU DISTRICT">ADAKLU DISTRICT</option>
                                                    <option value="AFADZATO SOUTH DISTRICT">AFADZATO SOUTH DISTRICT</option>
                                                    <option value="AGOTIME ZIOPE DISTRICT">AGOTIME ZIOPE DISTRICT</option>
                                                    <option value="AKATSI NORTH DISTRICT">AKATSI NORTH DISTRICT</option>
                                                    <option value="AKATSI SOUTH DISTRICT">AKATSI SOUTH DISTRICT</option>
                                                    <option value="ANLOGA DISTRICT">ANLOGA DISTRICT</option>
                                                    <option value="ANLO (KETA) MUNICIPAL">ANLO (KETA) MUNICIPAL</option>
                                                    <option value="CENTRAL TONGU DISTRICT">CENTRAL TONGU DISTRICT</option>
                                                    <option value="HOHOE MUNICIPAL">HOHOE MUNICIPAL</option>
                                                    <option value="HO MUNICIPAL">HO MUNICIPAL</option>
                                                    <option value="HO WEST DISTRICT">HO WEST DISTRICT</option>
                                                    <option value="KETU NORTH MUNICIPAL">KETU NORTH MUNICIPAL</option>
                                                    <option value="KETU SOUTH MUNICIPAL">KETU SOUTH MUNICIPAL</option>
                                                    <option value="KPANDO MUNICIPAL">KPANDO MUNICIPAL</option>
                                                    <option value="NORTH DAYI DISTRICT">NORTH DAYI DISTRICT</option>
                                                    <option value="NORTH TONGU DISTRICT">NORTH TONGU DISTRICT</option>
                                                    <option value="SOUTH DAYI DISTRICT">SOUTH DAYI DISTRICT</option>
                                                    <option value="SOUTH TONGU DISTRICT">SOUTH TONGU DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="Upper West Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="DAFFIAMA-BUSSIE-ISSA DISTRICT">DAFFIAMA-BUSSIE-ISSA DISTRICT</option>
                                                    <option value="JIRAPA MUNICIPAL">JIRAPA MUNICIPAL</option>
                                                    <option value="LAMBUSSIE-KARNI DISTRICT">LAMBUSSIE-KARNI DISTRICT</option>
                                                    <option value="LAWRA MUNICIPAL">LAWRA MUNICIPAL</option>
                                                    <option value="NADOWLI-KALEO DISTRICT">NADOWLI-KALEO DISTRICT</option>
                                                    <option value="NANDOM DISTRICT">NANDOM DISTRICT</option>
                                                    <option value="SISSALA EAST MUNICIPAL">SISSALA EAST MUNICIPAL</option>
                                                    <option value="SISSALA WEST DISTRICT">SISSALA WEST DISTRICT</option>
                                                    <option value="WA EAST DISTRICT">WA EAST DISTRICT</option>
                                                    <option value="WA MUNICIPAL">WA MUNICIPAL</option>
                                                    <option value="WA WEST DISTRICT">WA WEST DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="Western Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="AHANTA WEST MUNICIPAL">AHANTA WEST MUNICIPAL</option>
                                                    <option value="EFFIA-KWESIMINTSIM DISTRICT">EFFIA-KWESIMINTSIM DISTRICT</option>
                                                    <option value="ELLEMBELE DISTRICT">ELLEMBELE DISTRICT</option>
                                                    <option value="JOMORO MUNICIPAL">JOMORO MUNICIPAL</option>
                                                    <option value="MPOHOR DISTRICT">MPOHOR DISTRICT</option>
                                                    <option value="NZEMA EAST MUNICIPAL">NZEMA EAST MUNICIPAL</option>
                                                    <option value="PRESTEA HUNI VALLEY MUNICIPAL">PRESTEA HUNI VALLEY MUNICIPAL</option>
                                                    <option value="SEKONDI-TAKORADI METROPOLITAN">SEKONDI-TAKORADI METROPOLITAN</option>
                                                    <option value="SHAMA DISTRICT">SHAMA DISTRICT</option>
                                                    <option value="TARKWA-NSUAEM MUNICIPAL">TARKWA-NSUAEM MUNICIPAL</option>
                                                    <option value="WASA AMENFI CENTRAL DISTRICT">WASA AMENFI CENTRAL DISTRICT</option>
                                                    <option value="WASA AMENFI EAST MUNICIPAL">WASA AMENFI EAST MUNICIPAL</option>
                                                    <option value="WASA AMENFI WEST MUNICIPAL">WASA AMENFI WEST MUNICIPAL</option>
                                                    <option value="WASSA EAST DISTRICT">WASSA EAST DISTRICT</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Western North Region" style="display: none;">
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-highestEduLevel">
                                        <div class="form-row">
                                            <label id="label-highestEduLevel" for="highestEduLevel" class="col-md-3 col-form-label form-label">District or Municipality</label>
                                            <div class="col-md-9">
                                                <select id="custom-select9" class="form-control custom-select" name="district">
                                                    <option selected value="">
                                                    </option>
                                                    <option value="AOWIN DISTRICT">AOWIN DISTRICT</option>
                                                    <option value="BIA EAST DISTRICT">BIA EAST DISTRICT</option>
                                                    <!-- <option value="BIA WEST DISTRICT" disabled="disabled">BIA WEST DISTRICT</option> -->

                                                    <option value="BIA WEST DISTRICT" >BIA WEST DISTRICT</option>
                                                    <option value="BIBIANI-ANHWIASO-BEKWAI DISTRICT">BIBIANI-ANHWIASO-BEKWAI DISTRICT</option>
                                                    <option value="BODI DISTRICT">BODI DISTRICT</option>
                                                    <option value="JUABOSO DISTRICT">JUABOSO DISTRICT</option>
                                                    <option value="SEFWI AKONTOMBRA DISTRICT">SEFWI AKONTOMBRA DISTRICT</option>
                                                    <option value="SEFWI WIAWSO DISTRICT">SEFWI WIAWSO DISTRICT</option>
                                                    <option value="SUAMAN DISTRICT">SUAMAN DISTRICT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item">
                            <div class="form-group m-0" role="group" aria-labelledby="label-tdate">
                                <div class="form-row">
                                    <label id="label-tdate" for="tdate" class="col-md-3 col-form-label form-label">Date for training</label>
                                    <div class="col-md-9">
                                        <input required="required" class="form-control" id="tdate" type="date" placeholder="Date for training" value="" name="tdate">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="form-label" for="email">Email address:</label>
                            <div class="input-group input-group-merge">
                                <input id="email" type="email" required="required" class="form-control form-control-prepended" placeholder="Your email address" name="email">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="form-label" for="password">Password:</label>
                            <div class="input-group input-group-merge">
                                <input id="password" type="password" required="required" class="form-control form-control-prepended" placeholder="Choose a password" name="password">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-key"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password2">Password:</label>
                            <div class="input-group input-group-merge">
                                <input id="password2" type="password" required="required" class="form-control form-control-prepended" placeholder="Confirm password" name="repass">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-key"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-3">Sign Up</button>
                        <!-- <div class="form-group text-center mb-0">
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
                            </div> -->
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
    <script src="assets/js/sweetalert2.all.min.js"></script>

    <!-- <script src="assets/js/view.js"></script> -->

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>


    <script>
        var paymentForm = document.getElementById('paymentForm');

        paymentForm.addEventListener('submit', payWithPaystack, false);

        function payWithPaystack() {

            var handler = PaystackPop.setup({

                key: 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a', // Replace with your public key

                email: '<?php echo $email; ?>',

                amount: <?php echo $amount * 100; ?>, // the amount value is multiplied by 100 to convert to the lowest currency unit

                currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars

                firstname: '<?php echo $fname; ?>',

                lastname: '<?php echo $lname; ?>',

                ref: '<?php echo $myref; ?>', // Replace with a reference you generated
                metadata: {
                    custom_fields: [{
                            display_name: 'Mobile Number',
                            variable_name: 'mobile_number',
                            value: "+233556676471"
                        }


                    ]
                },

                callback: function(response) {

                    //this happens after the payment is completed successfully

                    var reference = response.reference;
                    var fname = '<?php echo $fname; ?>';
                    var lname = '<?php echo $lname; ?>';
                    var email = '<?php echo $email; ?>';
                    var amount = '<?php echo $amount; ?>';

                    //   alert('Payment complete! Reference: ' + reference);
                    // window.location='success.php?ref='+ reference + '&fname=' + fname + '&lname=' + lname + '&email=' + email + '&amount=' + amount ;

                    // Make an AJAX call to your server with the reference to verify the transaction

                    if (response.status == "success") {
                        var myrf = '<?php echo $myref; ?>';
                        var mimi = 'dollar';
                        var formdt = $('#paymentForm')[0]; // You need to use standard javascript object here
                        var formData = new FormData(formdt);

                        var opt = {
                            url: "dollar.php?action=paysuccess",
                            type: "post",
                            data: formData,
                            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                            processData: false,
                            cache: false, // NEEDED, DON'T OMIT THIS

                            success: function(rep) {
                                setTimeout(function() {
                                    swal({
                                            title: "Success!",
                                            text: "<small>You purchase is successfull  </small>",
                                            type: "success",
                                            html: true,
                                            confirmButtonText: "OK"
                                        },
                                        function(isConfirm) {
                                            if (isConfirm) {
                                                window.location = "profile.php";
                                            }
                                        });
                                }, 1000);
                            }

                        }
                        $.ajax(opt);





                    }
                },

                onClose: function() {

                    alert('Transaction was not completed, window closed.');

                },

            });

            handler.openIframe();

        }
    </script>


    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="processor.js"></script>
    <script src="assets/js/regions.js"></script>


</body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->

</html>
