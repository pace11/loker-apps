<?php

if ($_SESSION['role'] == 2) {
    $g = mysqli_query($conn, "SELECT * FROM user WHERE email='$_SESSION[email]'");
    $auth = mysqli_fetch_array($g);
} else {
    $g = mysqli_query($conn, "SELECT * FROM admin WHERE email='$_SESSION[email]'");
    $auth = mysqli_fetch_array($g);
}


?>