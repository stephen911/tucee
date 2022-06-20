<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student - PhD</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">


         <meta name="robots" content="noindex">

    <!-- Custom Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
        rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/vendor/spinkit.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link type="text/css" href="assets/css/style.css" rel="stylesheet">

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

    </div>

    <!-- Header Layout -->
    <?php include("navbar.php") ?>
    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">PhD Scholarship Application Form</li>
                    </ol>
                    <h1 class="h2">PhD Scholarship Application Form</h1>

                    <div class="card">
                        <ul class="nav nav-tabs nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" href="#first" data-toggle="tab">Basic Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#second" data-toggle="tab">Academic Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#third" data-toggle="tab">Documents</a>
                            </li>
                        </ul>
                        <div class="tab-content card-body">
                            <div class="tab-pane active" id="first">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="avatar" class="col-sm-3 col-form-label form-label">Avatar</label>
                                        <div class="col-sm-9">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <div class="icon-block rounded">
                                                        <i class="material-icons text-muted-light md-36">photo</i>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="custom-file" style="width: auto;">
                                                        <input type="file" id="avatar" class="custom-file-input">
                                                        <label for="avatar" class="custom-file-label">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-firstname">
                                                    <div class="form-row">
                                                        <label id="label-firstname" for="firstname"
                                                            class="col-md-3 col-form-label form-label">First
                                                            name</label>
                                                        <div class="col-md-9">
                                                            <input id="firstname" type="text"
                                                                placeholder="Your first name" value="Alexander"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-othernames">
                                                    <div class="form-row">
                                                        <label id="label-othernames" for="othernames"
                                                            class="col-md-3 col-form-label form-label">other
                                                            names</label>
                                                        <div class="col-md-9">
                                                            <input id="othernames" type="text" placeholder="Other Name"
                                                                value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-lastname">
                                                    <div class="form-row">
                                                        <label id="label-lastname" for="lastname"
                                                            class="col-md-3 col-form-label form-label">Last name</label>
                                                        <div class="col-md-9">
                                                            <input id="lastname" type="text"
                                                                placeholder="Your last name" value="Watson"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-gender">
                                                    <div class="form-row">
                                                        <label id="label-gender" for="lastname"
                                                            class="col-md-3 col-form-label form-label">Gender</label>
                                                        <div class="col-md-9">
                                                            <input id="gender" type="text" placeholder="Gender"
                                                                value="Male" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-dob">
                                                    <div class="form-row">
                                                        <label id="label-dob" for="dob"
                                                            class="col-md-3 col-form-label form-label">Date of
                                                            birth</label>
                                                        <div class="col-md-9">
                                                            <input id="dob" type="date" placeholder="date of birth"
                                                                value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-status">
                                                    <div class="form-row">
                                                        <label id="label-status" for="status"
                                                            class="col-md-3 col-form-label form-label">Marital
                                                            Status</label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select">
                                                                <option selected>Single</option>
                                                                <option value="1">Married</option>
                                                                <option value="2">Divorced</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-region">
                                                    <div class="form-row">
                                                        <label id="label-region" for="region"
                                                            class="col-md-3 col-form-label form-label">Region</label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select">
                                                                <option selected>Greater Accra Region</option>
                                                                <option value="1">Ashanti Region</option>
                                                                <option value="2">Ahafo Region</option>
                                                                <option value="3">Bono Region</option>
                                                                <option value="4">Bono EastRegion</option>
                                                                <option value="5">Central Region</option>
                                                                <option value="6">Eastern Region</option>
                                                                <option value="7">Northern Region</option>
                                                                <option value="8">North East Region</option>
                                                                <option value="9">Oti Region</option>
                                                                <option value="10">Savannah Region</option>
                                                                <option value="11">Upper East Region</option>
                                                                <option value="12">Upper West Region</option>
                                                                <option value="13">Volta Region</option>
                                                                <option value="14">Western Region</option>
                                                                <option value="15">Western North Region</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-status">
                                                    <div class="form-row">
                                                        <label id="label-status" for="status"
                                                            class="col-md-3 col-form-label form-label">District</label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select">
                                                                <option selected>Ga west</option>
                                                                <option value="1">Ga south</option>
                                                                <option value="2">Ga North</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-residence">
                                                    <div class="form-row">
                                                        <label id="label-residence" for="residence"
                                                            class="col-md-3 col-form-label form-label">Residence</label>
                                                        <div class="col-md-9">
                                                            <input id="residence" type="text"
                                                                placeholder="Permanent residence in Ghana" value=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-phonenumber">
                                                    <div class="form-row">
                                                        <label id="label-phonenumber" for="phonenumber"
                                                            class="col-md-3 col-form-label form-label">phone
                                                            number</label>
                                                        <div class="col-md-9">
                                                            <input id="phonenumber" type="text"
                                                                placeholder="Your phone number" value="+233245678923"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-emerContName">
                                                    <div class="form-row">
                                                        <label id="label-emerContName" for="emerContName"
                                                            class="col-md-3 col-form-label form-label">Emergency Contact
                                                            Name</label>
                                                        <div class="col-md-9">
                                                            <input id="emerContName" type="text"
                                                                placeholder="Emergency Contact Name" value=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-emergencycontact">
                                                    <div class="form-row">
                                                        <label id="label-emergencycontact" for="emergencycontact"
                                                            class="col-md-3 col-form-label form-label">emergency
                                                            contact</label>
                                                        <div class="col-md-9">
                                                            <input id="emergencycontact" type="text"
                                                                placeholder="Your emergencycontact"
                                                                value="+233 234567891" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-relationshipType">
                                                    <div class="form-row">
                                                        <label id="label-relationshipType" for="relationshipType"
                                                            class="col-md-3 col-form-label form-label">Relationship
                                                            Type</label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select">
                                                                <option selected>parent</option>
                                                                <option value="1">sibling</option>
                                                                <option value="2">others</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-physicallyChallenged">
                                                    <div class="form-row">
                                                        <label id="label-physicallyChallenged"
                                                            for="physically_challenged"
                                                            class="col-md-3 col-form-label form-label">Physically
                                                            challenged</label>
                                                        <div class="col-md-9">
                                                            <div role="group" class="input-group input-group-merge">
                                                                <select id="custom-select"
                                                                    class="form-control custom-select toggle-trigger"
                                                                    data-group="target-example#2">
                                                                    <option value="0" selected>No</option>
                                                                    <option value="1">Yes</option>


                                                                </select>
                                                                <!-- <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="material-icons">email</i>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                            <small class="form-text text-muted">If Yes, Specify</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item toggle-target target-example#2" data-lookup="1">
                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-specify">
                                                    <div class="form-row">
                                                        <label id="label-specify" for="specify"
                                                            class="col-md-3 col-form-label form-label">specify</label>
                                                        <div class="col-md-9">
                                                            <input id="specify" type="text" placeholder="paralyzed"
                                                                value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8 offset-sm-3">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <a href="#" class="btn btn-success tab-pane-btn" data-tab="#second">Save and continue</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane" id="second">
                            <form action="#" class="form-horizontal">
                                <div class="card">
                                    <div class="list-group list-group-fit">
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-NOI">
                                                <div class="form-row">
                                                    <label id="label-NOI" for="NOI"
                                                        class="col-md-3 col-form-label form-label">Name of
                                                        Institution</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select" class="form-control custom-select">
                                                            <option selected>University of Cape Coast</option>
                                                            <option value="1">University of Ghana</option>
                                                            <option value="2">Kwame Nkrumah University of Science and
                                                                Technology</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-POS">
                                                <div class="form-row">
                                                    <label id="label-POS" for="POS"
                                                        class="col-md-3 col-form-label form-label">Program of
                                                        Study</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select" class="form-control custom-select">
                                                            <option selected>BSc. Computer Science</option>
                                                            <option value="1">BSc. Mathematics</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-StudentID">
                                                <div class="form-row">
                                                    <label id="label-StudentID" for="lastname"
                                                        class="col-md-3 col-form-label form-label">Student ID
                                                        Number</label>
                                                    <div class="col-md-9">
                                                        <input id="StudentID" type="number" placeholder="StudentID"
                                                            value="ps/csc/18/0000" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-highestEduLevel">
                                                <div class="form-row">
                                                    <label id="label-highestEduLevel" for="highestEduLevel"
                                                        class="col-md-3 col-form-label form-label">Higest Level of
                                                        Education</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select1" class="form-control custom-select">
                                                            <option selected value="none">Choose your level of Education
                                                            </option>
                                                            <option value="shs">First Degree</option>
                                                            <option value="tertiary">Postgraduate Degree</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="all">
                                            <div id="senior1">
                                                <div class="list-group-item">
                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-NOI">
                                                        <div class="form-row">
                                                            <label id="label-NOI" for="NOI"
                                                                class="col-md-3 col-form-label form-label">Name of
                                                                Senior High School</label>
                                                            <div class="col-md-9">
                                                                <select id="custom-select"
                                                                    class="form-control custom-select">
                                                                    <option selected>University of cape coast</option>
                                                                    <option value="1">Ghana National SHS</option>
                                                                    <option value="2">St. Augustine SHS</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item" id="senior1">
                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-POS">
                                                        <div class="form-row" id="senior1">
                                                            <label id="label-POS" for="POS"
                                                                class="col-md-3 col-form-label form-label">Program of
                                                                Study</label>
                                                            <div class="col-md-9">
                                                                <select id="custom-select"
                                                                    class="form-control custom-select">
                                                                    <option selected>General Science</option>
                                                                    <option value="1">General Arts</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="list-group-item" id="senior1">
                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-wassceGrade">
                                                        <div class="form-row" id="senior1">
                                                            <label id="label-wassceGrade" for="wassceGrade"
                                                                class="col-md-3 col-form-label form-label">Class
                                                                Obtained</label>
                                                            <div class="col-md-9">
                                                                <input id="wassceGrade" type="text"
                                                                    placeholder="Wassce grade" value=""
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list-group-item">

                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-specify">
                                                        <div class="form-row">
                                                            <label for="transcript"
                                                                class="col-md-3 col-form-label form-label">Upload
                                                                Transcript</label>
                                                            <div class="col-md-9">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body">
                                                                        <div class="custom-input" style="width: auto;">
                                                                            <label for="transcript"
                                                                                class="custom-file-label">Choose
                                                                                file</label>
                                                                            <input type="file" id="transcript"
                                                                                class="form-control custom-file-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- tertiary -->
                                            <div id="tertiary2">
                                                <div class="list-group-item" id="tertiary">
                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-NOI">
                                                        <div class="form-row">
                                                            <label id="label-NOI" for="NOI"
                                                                class="col-md-3 col-form-label form-label">Name of
                                                                Institution</label>
                                                            <div class="col-md-9">
                                                                <select id="custom-select"
                                                                    class="form-control custom-select">
                                                                    <option selected>University of Cape Coast</option>
                                                                    <option value="1">University of Ghana</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-POS">
                                                        <div class="form-row">
                                                            <label id="label-POS" for="POS"
                                                                class="col-md-3 col-form-label form-label">Program of
                                                                Study</label>
                                                            <div class="col-md-9">
                                                                <select id="custom-select"
                                                                    class="form-control custom-select">
                                                                    <option selected>HND Computer Science</option>
                                                                    <option value="1">HND Mathematics</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="list-group-item">
                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-classObtained">
                                                        <div class="form-row">
                                                            <label id="label-classObtained" for="classObtained"
                                                                class="col-md-3 col-form-label form-label">Class
                                                                Obtained</label>
                                                            <div class="col-md-9">
                                                                <input id="classObtained" type="text"
                                                                    placeholder="Class" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="list-group-item">

                                                    <div class="form-group m-0" role="group"
                                                        aria-labelledby="label-specify">
                                                        <div class="form-row">
                                                            <label for="transcript2"
                                                                class="col-md-3 col-form-label form-label">Upload
                                                                Transcript</label>
                                                            <div class="col-md-9">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body">
                                                                        <div class="custom-input" style="width: auto;">
                                                                            <label for="transcript2"
                                                                                class="custom-file-label">Choose
                                                                                file</label>
                                                                            <input type="file" id="transcript2"
                                                                                class="form-control custom-file-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="statement" class="col-sm-3 col-form-label form-label">Current Statement of
                                        results</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">photo</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="statement" class="custom-file-input">
                                                    <label for="statement" class="custom-file-label">Choose file</label>
                                                </div>

                                            </div>

                                        </div>
                                        <small><span style="color: red;">Notice:</span> Upload current statement of
                                            results <span style="color: red;">only</span> if you are a continuing
                                            student.</small>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-4 offset-sm-3">
                                        <a href="#" class="btn btn-success tab-pane-btn" data-tab="#third"> Save and continue</a>
                                    </div>
                                </div>



                        </div>



                        <div class="tab-pane" id="third">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row my-4">
                                    <label for="addLetter" class="col-sm-3 col-form-label form-label">Addmission
                                        Letter</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">file_upload</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="addLetter" class="custom-file-input">
                                                    <label for="addLetter" class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row my-4">
                                    <label for="publicatioin"
                                        class="col-sm-3 col-form-label form-label">Publications</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">file_upload</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="publication" class="custom-file-input">
                                                    <label for="publication" class="custom-file-label">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <small>(Publications <span style="color:red;">if any</span> )</small>
                                    </div>
                                </div>

                                <div class="form-group row my-4">
                                    <label for="recommLetter" class="col-sm-3 col-form-label form-label">Recommendation
                                        Letters</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">file_upload</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="recommLetter" class="custom-file-input">
                                                    <label for="recommLetter" class="custom-file-label">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <small>(Academic and Occupation)</small>
                                    </div>
                                </div>
                                <div class="form-group row my-4">
                                    <label for="acaCert" class="col-sm-3 col-form-label form-label">Academic
                                        Certificate</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">file_upload</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="acaCert" class="custom-file-input">
                                                    <label for="acaCert" class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row my-4">
                                    <label for="nssCert" class="col-sm-3 col-form-label form-label">NSS
                                        Certificate</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">file_upload</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="nssCert" class="custom-file-input">
                                                    <label for="nssCert" class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row my-4">
                                    <label for="cv" class="col-sm-3 col-form-label form-label">CV</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">file_upload</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="cv" class="custom-file-input">
                                                    <label for="cv" class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row my-4">
                                    <label for="natId" class="col-sm-3 col-form-label form-label">National
                                        Identificatioin Card</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">photo</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="natId" class="custom-file-input">
                                                    <label for="natId" class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row my-4">
                                    <label for="passport" class="col-sm-3 col-form-label form-label">Passport
                                        Photo</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <!-- <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">photo</i>
                                                </div>
                                            </div> -->
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="passport" class="custom-file-input">
                                                    <label for="passport" class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="form-group m-0" role="group" aria-labelledby="label-sop">
                                        <div class="form-row">
                                            <label id="label-sop" for="status"
                                                class="col-md-3 col-form-label form-label">Personal Statement /
                                                SOP</label>
                                            <div class="col-md-9">
                                                <input id="sop" type="text"
                                                    placeholder="State reasons why you want the scholarship" value=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8 offset-sm-3">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="" class="btn btn-success mt-2"> submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>

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
    <script src="assets/js/index.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>

</body>


</html>