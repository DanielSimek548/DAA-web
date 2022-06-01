<?php

require_once ('../database.php');

$uname = $_POST["uname"];
$psw = $_POST["psw"];

$sqlu = "SELECT * FROM `people` WHERE username = '$uname'";
$sqle = "SELECT * FROM `people` WHERE password = '$psw'";
$r_u = mysqli_query($conn, $sqlu);
$r_p = mysqli_query($conn, $sqle);

if (mysqli_num_rows($r_u) == 1 && mysqli_num_rows($r_p) > 0) {
    echo "Login successful.";
    header('Location: action_page.php');
}
else{
    echo "ERROR";
}