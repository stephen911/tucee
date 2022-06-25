<?php

 include 'functions.php';
 include 'yolkpay.php';
 include 'yolksms.php';
include 'sms.php';
$send = new Yolksms();
$sms = new sms();
 $yolk = new YolkPay();

 checker();
 $user = users();
//  var_dump($_SESSION['id']);

if (isset($_GET['ref'])) {
    extract($_GET);

    $uid = $_SESSION['id'];
    $dd = date('jS F, Y');

    include 'starter.php';
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE id = '$uid'");
    // $ins = mysqli_query($conn, "INSERT INTO transactions (uid,transid,amount,dateadded) VALUES('$uid','$ref','$amount','$dd')");
    $row = mysqli_fetch_array($sel);
    $send->sms('Tucee hub', $row['contact'], 'Thank you for paying your NTC registration fees.');
    $admin = 'User '.$user['name'].' -'.$user['contact'].' -Has paid NTC registration fees ';
    $sms->sms('Tucee hub', '0208496496,0244996991', $admin);
    payment($uid, $ref, $amount);
    echo  '<script>window.location="payment.php"</script>';
}
