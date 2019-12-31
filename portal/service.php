<?php

if ($_SESSION['role'] == 2) {
    $getdatauser = mysqli_query($conn, "SELECT * FROM user WHERE email='$_SESSION[email]'");
    $auth = mysqli_fetch_array($getdatauser);
    $getdataberkas = mysqli_query($conn, "SELECT * FROM pemberkasan WHERE user_id='$auth[id]'");
    $pemberkasan = mysqli_fetch_array($getdataberkas);
} else {
    $getdatauser = mysqli_query($conn, "SELECT * FROM admin WHERE email='$_SESSION[email]'");
    $auth = mysqli_fetch_array($getdatauser);
}


?>