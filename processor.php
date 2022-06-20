<?php

// require '../loader/autoloader.php';
require 'functions.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);
            
            updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard, $tdate);

            break;
        
        case 'cfuser':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirmation);
            

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
                } elseif ($fname == '' || $lname == '' || $contact == '' || $email == '' || $password == '') {
                    echo ' All field must be filled';
                } else {
                    register($name, $email, $contact, $password);
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
