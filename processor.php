<?php

// require '../loader/autoloader.php';
require 'functions.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);
            
            updateuser($id, $gender, $email, $contact, $telegram, $lincesed, $regnumber, $modality, $ntcemail, $region, $district, $tdate);

            break;
        
        case 'cfuser':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);
            

            break;
        
        case 'ticket':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);
            

            break;

        case 'enrolluser':
            extract($_POST);
            // extract($_POST);
            enrolluser($id, $enroll);
            

            break;      

        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'register':
            extract($_POST);
            if ($oname == '') {
                $name = $fname.' '.$lname;
            } else {
                $name = $fname.' '.$oname.' '.$lname;
            }
                if ($password != $repass) {
                    echo 'Password do not match';
                } elseif ($fname == '' || $lname == '' || $contact == '' || $region == '' || $district == '' || $tdate == '' || $email == '' || $password == '') {
                    echo ' All field must be filled';
                } else {
                    register($name, $email, $contact, $lincesed, $regnumber, $modality, $ntcemail, $ntcemailpost, $region, $district, $tdate, $password);
                }

            break;

        case 'changepass':

            extract($_POST);
            if ($newpass != $repass) {
                echo 'Password do not match';
            } else {
                changepass($id, $password, $newpass);
            }
                break;

        default:

        break;
    }
 }
