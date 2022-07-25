<?php

// Developer : Frederick  Ennin
// Email : kpin463@gmail.com
// started on Saturday11 June,2022
// github :https://github.com/dollarstir

function db()
{
    return  'starter.php';
}

function login($email, $password)
{
    include 'starter.php';

    // extract($_POST);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $passwordc = $password;
    $password = md5($password);
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    $sel3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND contact = '$passwordc'");


    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'loginsuccess';
        } elseif (mysqli_num_rows($sel3) >= 1) {
            $row = mysqli_fetch_array($sel3);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'loginsuccess';
        } else {
            echo 'Login details not correct';
        }
    } else {
        echo 'loginfailed';
    }
}

function logout()
{
    session_start();
    // session_destroy();
    unset($_SESSION['id']);
    echo '<script>window.location="index.php"</script>';
}

function checker()
{
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<script>
        alert("You need to login first");
        window.location="index.php"</script>';
    }
}

function users()
{
    include 'starter.php';
    // session_start();
    $id = $_SESSION['id'];
    $d = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function confirmuser($id, $confirmation)
{
    include 'starter.php';
    // $id = $_SESSION['id'];
    $conf = mysqli_query($conn, "UPDATE users SET confirm ='$confirmation' WHERE id='$id'  ");
    if ($conf) {
        echo 'confirmed';
    } else {
        echo 'Failed to update record . Try again';
    }
}

function enrolluser($id, $enroll)
{
    include 'starter.php';
    // $id = $_SESSION['id'];
    $confn = mysqli_query($conn, "UPDATE users SET enroll ='$enroll' WHERE id='$id'  ");
    if ($confn) {
        echo 'enrolled';
    } else {
        echo 'Failed to update record . Try again';
    }
}

function updateuser($id, $gender, $email, $contact, $telegram, $lincesed, $regnumber, $ntcemail, $region, $district, $tdate)
{
    // include 'mail.php';

    // require '/PHPMailer/src/Exception.php';
    // require '/PHPMailer/src/PHPMailer.php';
    // require '/PHPMailer/src/SMTP.php';

    // use PHPMailer\PHPMailer\PHPMailer;
    //  use PHPMailer\PHPMailer\SMTP;

    // $m = new Mail();
    include 'yolksms.php';
    include 'sms.php';
    $sms = new sms();
    $send = new Yolksms();
    $olddate = $tdate;
    $tdate = date('jS F, Y', strtotime($olddate));

    include 'starter.php';
    // $gg = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
    // $rg = mysqli_fetch_array($gg);
    // $admin = 'New user has registered for ntc programme. name - '.$name.' , contact - '.$contact.'';
    if (mysqli_query($conn, "UPDATE users SET gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed='$lincesed', regnumber='$regnumber', ntcemail='$ntcemail', region='$region', district='$district', tdate='$tdate'  WHERE id='$id'  ")) {
        echo 'updatesuccess';
        // mail('stephendappah1@gmail.com', 'TUCEE '.$subject, $admin.' Duplicate', $headers);
        // mail('kpin463@gmail.com', 'TUCEE '.$subject, $admin.'Duplicate', $headers);
    } else {
        echo 'Failed to update record . Try again';
    }

    // if ($rg['contact'] == '') {
    //     if (mysqli_query($conn, "UPDATE users SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref',  heard ='$heard', tdate='$tdate', confirm='$confirm' WHERE id='$id'  ")) {
    //         echo 'Updated Successfully';
    //         // mail($email, 'TUCEE Institute of Counselling and Technology', '');
    //         $subject = 'NTC REGISTRATION';
    //         $body = '<html> 
    //         <head> 
    //             <title>TUCEE Institute of Counselling and Technology</title> 
    //         </head> 
    //         <body> 
    //             <h4>Registration Successful</h4> 
    //             <b> <span style="color: green;">Congratulations</span>, you are duly registered for the Counselling training. Proceed to make <span style="color: green;">Payment</span> to Confirm your Particiation. Call <span style="color: green;">+233(0)54 1369 429</span> for any assistance. Thanks</b>
    //         </body> 
    //         </html>';
    //         // yolk mailer
    //         // $mym = [$email];
    //         $from = ['Tucee', 'TUCEEHUB@tuceehub.org'];
    //         $headers = 'MIME-Version: 1.0'."\r\n";
    //         $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    //         $headers .= 'From: '.$from[1];
    //         mail($email, 'TUCEE NTC REGISTRATION', $body, $headers);

    //         $send->sms('Tucee hub', $contact, 'Congratulations, you are duly registered for the Counselling training. Proceed to make payment  to confirm your participation  Call 0541 369 429 for any assistance. Thanks');

    //         // $sel = mysqli_query($conn, "SELECT * FROM users WHERE id = '$uid'");
    //         // $row = mysqli_fetch_array($sel);

    //         $sms->sms('Tucee hub', '0208496496,0244996991', $admin);
    //         mail('stephendappah1@gmail.com', 'TUCEE NTC REGISTRATION', $admin, $headers);
    //     // mail('kpin463@gmail.com', 'TUCEE NTC REGISTRATION', $admin, $headers);
    //     // $admin = 'New user has registered for ntc programme. name - '.$name.' , contact - '.$contact.'';
    //     } else {
    //         echo 'Failed to update record . Try again';
    //     }
    // } else {
    //     if (mysqli_query($conn, "UPDATE users SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref',  heard ='$heard', tdate='$tdate' WHERE id='$id'  ")) {
    //         echo 'updatesuccess';
    //         // mail('stephendappah1@gmail.com', 'TUCEE '.$subject, $admin.' Duplicate', $headers);
    //     // mail('kpin463@gmail.com', 'TUCEE '.$subject, $admin.'Duplicate', $headers);
    //     } else {
    //         echo 'Failed to update record . Try again';
    //     }
    // }
}

function register($name, $email, $contact, $lincesed, $regnumber, $ntcemail, $region, $district, $tdate, $password)
{
    $password = md5($password);
    include 'starter.php';
    include 'yolksms.php';
    include 'sms.php';
    $sms = new sms();
    $send = new Yolksms();

    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($sel) >= 1) {
        echo 'Sorry User account exist';
    } else {
        $dd = date('jS F, Y');
        $old = $tdate;
        $tdate = date('jS F, Y', strtotime($old));


        $ins = mysqli_query($conn, "INSERT INTO users (name,email,contact,lincesed,regnumber,ntcemail,region,district,tdate,password,dateadded) VALUES('$name', '$email', '$contact', '$lincesed','$regnumber','$ntcemail','$region', '$district', '$tdate', '$password', '$dd' ) ");

        if ($ins) {
            $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password='$password'");
            $row = mysqli_fetch_array($sel);
            session_start();
            $_SESSION['id'] = $row['id'];

            echo 'registered';
            $subject = 'NTC REGISTRATION';
            $admin = 'New user has registered for ntc programme. name - ' . $name . ' , contact - ' . $contact . '';
            $body = '<html> 
            <head> 
                <title>TUCEE Institute of Counselling and Technology</title> 
            </head> 
            <body> 
                <h4>Registration Successful</h4> 
                <b> <span style="color: green;">Congratulations</span>, you are duly registered for the Counselling training. Proceed to make <span style="color: green;">Payment</span> to Confirm your Participation. Call <span style="color: green;">+233(0)54 1369 429</span> for any assistance. Thanks</b>
            </body> 
            </html>';
            // yolk mailer
            // $mym = [$email];
            $from = ['Tucee', 'TUCEEHUB@tuceehub.org'];
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: ' . $from[1];
            mail($email, 'TUCEE NTC REGISTRATION', $body, $headers);

            // $send->sms('Tucee hub', $contact, 'Congratulations, you are duly registered for the Counselling training.Please continue with your Registration. Proceed to make payment  to confirm your participation  Call 0541 369 429 for any assistance. Thanks');

            // $sel = mysqli_query($conn, "SELECT * FROM users WHERE id = '$uid'");
            // $row = mysqli_fetch_array($sel);

            // $sms->sms('Tucee hub', '0208496496,0244996991', $admin);
            // mail('stephendappah1@gmail.com', 'TUCEE NTC REGISTRATION', $admin, $headers);
        } else {
            echo 'Registeration failed';
        }
    }
}

function payment($uid, $ref, $amount)
{
    include 'starter.php';
    $dateadded = date('jS F,Y');

  
    



    $ins = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$uid','$ref','$amount','$dateadded')");
    $up = mysqli_query($conn, "UPDATE users SET paystatus ='paid' WHERE id ='$uid'");

    if($uid == ""){
        $goo = "Empty uid: " . $uid;
        mail('stephendappah1@gmail.com', 'Empty Uid', $goo, "Stedap Cooperation");

    }

    if ($ins || $up) {
        //mail('stephendappah1@gmail.com', 'TUCEE NTC REGISTRATION', "", $headers);
        echo 'donepay';
    } else {
        $fail = mysqli_query($conn, "SELECT name users WHERE id ='$uid'");

        if ($fail) {
            $mess = "Fail to update payment for " . $fail . " ID: " . "$uid";

            mail('stephendappah1@gmail.com', 'Payment Update Failed', $mess, "Stedap Cooperation");
        }else{
            mail('stephendappah1@gmail.com', 'Payment Update Failed', "Failed to update payment", "Stedap Cooperation");
        }
    }
}

function changepass($id, $password, $newpass)
{
    $password = md5($password);
    $newpass = md5($newpass);
    include 'starter.php';
    $check = mysqli_query($conn, "SELECT * FROM users WHERE password = '$password'");
    if (mysqli_num_rows($check) >= 1) {
        $up = mysqli_query($conn, "UPDATE users SET password = '$newpass' WHERE id ='$id'");
        if ($up) {
            echo 'changepasssuccess';
        } else {
            echo 'Failed to change password';
        }
    } else {
        echo 'Incorrect Password';
    }
}
function transactions()
{
    // session_start();
    $id = $_SESSION['id'];
    include 'starter.php';

    $sel = mysqli_query($conn, "SELECT * FROM  transactions WHERE uid = '$id'");
    while ($row = mysqli_fetch_array($sel)) {
        echo '<tr>
        <td>
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Transaction Amount</small>
                <a href="#"
                   class="text-body small"><span class="js-lists-values-document">₵' . $row['amount'] . '.00</span></a>
            </div>
        </td>
        
        <td class="text-center">
            <div class="d-flex align-items-center">
                <small class="text-uppercase text-muted mr-2">Status</small>
                <i class="material-icons text-success md-18 mr-2">lens</i>
                <small class="text-uppercase js-lists-values-status">paid</small>
            </div>
        </td>
        <td class="text-right">
            <div class="d-flex align-items-center text-right">
                <small class="text-uppercase text-muted mr-2">Date</small>
                <small class="text-uppercase js-lists-values-date">' . $row['dateadded'] . '</small>
            </div>
        </td>
    </tr>';
        // code...
    }
}
