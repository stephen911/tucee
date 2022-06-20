<?php

// Developer : Frederick  Ennin
// Email : kpin463@gmail.comin
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
    $password = md5($password);
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $sel2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($sel) >= 1) {
        if (mysqli_num_rows($sel2) >= 1) {
            $row = mysqli_fetch_array($sel2);
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
        alert("You need to login");
        window.location="index.php"</script>';
    }
}

function users()
{
    include 'starter.php';
    // session_start();
    $id = $_GET['id'];
    
    $d = mysqli_query($conn, "SELECT * FROM users WHERE id ='$id'");
    $row = mysqli_fetch_array($d);

    return $row;
}

function updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard, $tdate, $confirm)
{
    include 'starter.php';
    // $id = $_GET['id'];
    extract($_POST);
    $up = mysqli_query($conn, "UPDATE users SET title='$title', name= '$name', gender = '$gender', email='$email', contact= '$contact', telegram='$telegram', lincesed ='$lincesed', nameofschool='$nameofschool', region ='$region', district ='$district', foodpref='$foodpref',  heard ='$heard', tdate='$tdate', confirm='$confirm' WHERE id='$id'  ");
    if ($up) {
        echo 'Updated Successfully ';
    } else {
        echo 'Failed to update record . Try again';
    }
}

function confirmuser($id, $confirm)
{
    include 'starter.php';
    $id = $_GET['id'];
    $conf = mysqli_query($conn, "UPDATE users SET confirm ='$confirm' WHERE id='$id'  ");
    if ($conf) {
        echo 'Participation Confirmed ';
    } else {
        echo 'Failed to update record . Try again';
    }
}

function register($name, $email, $password)
{
    $password = md5($password);
    include 'starter.php';
    $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($sel) >= 1) {
        echo 'Sorry User account exist';
    } else {
        $dd = date('jS F, Y');
        $ins = mysqli_query($conn, "INSERT INTO users (name,email,password,dateadded) VALUES('$name','$email','$password','$dd')");

        if ($ins) {
            $sel = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password='$password'");
            $row = mysqli_fetch_array($sel);
            session_start();
            $_SESSION['id'] = $row['id'];
            echo 'registered';
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

    if ($ins || $up) {
        // echo''
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
                <a href="student-invoice.php"
                   class="text-body small"><span class="js-lists-values-document">'.$row['amount'].'</span></a>
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
                <small class="text-uppercase js-lists-values-date">'.$row['dateadded'].'</small>
            </div>
        </td>
    </tr>';
        // code...
    }
}

function registered()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM users ORDER BY id DESC ');
    while ($row = mysqli_fetch_array($u)) {
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-name">'.$row['name'].'</span>

        </td>

        <td>'.$row['email'].'</td>
        <td>'.$row['contact'].'</td>
        <td><span class="js-lists-values-employee-title">'.$row['region'].'</span></td>
        <td><span class="js-lists-values-employee-district">'.$row['district'].'</span>
        <td>'.$row['tdate'].'</td>
        <td>'.$row['lincesed'].'</td>
        <td>'.$row['nameofschool'].'</td>
        <td><span class="js-lists-values-employee-paid">'.$row['paystatus'].'</span></td>  
        <td>'.$row['confirm'].'</td>

        <td>'.$row['foodpref'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td><a class="btn btn-success" href="update_user.php?id='.$row['id'].'"><i class="fa fa-edit"></i></a></td>      
        <td><a class="btn btn-danger" href="delete_user.php?id='.$row['id'].'"><i class="fa fa-trash"></i></a></td>      




                                        
    </tr>';
    }
}

function paidusers()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM users WHERE paystatus="paid" ORDER BY id DESC ');
    while ($row = mysqli_fetch_array($u)) {
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-name">'.$row['name'].'</span>

        </td>

        <td>'.$row['email'].'</td>
        <td>'.$row['contact'].'</td>
        <td><span class="js-lists-values-employee-title">'.$row['region'].'</span></td>
        <td><span class="js-lists-values-employee-district">'.$row['district'].'</span>
        <td>'.$row['tdate'].'</td>
        <td>'.$row['lincesed'].'</td>
        <td>'.$row['nameofschool'].'</td>
        <td><span class="js-lists-values-employee-paid">'.$row['paystatus'].'</span></td>  
        <td>'.$row['foodpref'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td><a class="btn btn-success" href="update_user.php?id='.$row['id'].'"><i class="fa fa-edit"></i></a></td>      
        <td><a class="btn btn-danger" href="delete_user.php?id='.$row['id'].'"><i class="fa fa-trash"></i></a></td>      



                                        
    </tr>';
    }
}

function trans()
{
    include 'starter.php';
    $u = mysqli_query($conn, 'SELECT * FROM transactions ');
    // echo '<td>'.$u.'</td>'
    while ($row = mysqli_fetch_array($u)) {
        $uid = $row['uid'];
        $us = mysqli_query($conn, "SELECT * FROM users WHERE id = '$uid'");
        $rr = mysqli_fetch_array($us);
        echo '<tr>

        <td>

            <span class="js-lists-values-employee-trans">'.$rr['name'].'</span>

        </td>

        
        <td>'.$rr['contact'].'</td>



        <td>'.$row['transid'].'</td>
        <td>'.$row['amount'].'</td>
        <td>'.$row['dateadded'].'</td>
        
    </tr>';
    }
}

function countusers()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM users');
    $count = mysqli_num_rows($c);
    echo $count;
}

function countpaid()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    echo $count;
}

function unpaid()
{
    include 'starter.php';
    $c = mysqli_query($conn, 'SELECT * FROM transactions');
    $count = mysqli_num_rows($c);
    $c2 = mysqli_query($conn, 'SELECT * FROM users');
    $count2 = mysqli_num_rows($c2);
    echo $count2 - $count;
}
