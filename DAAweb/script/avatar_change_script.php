<?php
require_once('./database.php');
session_start();
$selected = $_POST['avatar'];
$uname = $_SESSION["username"];

if (!empty($selected)) {
    $sql = "UPDATE people SET avatar='$selected' WHERE username='$uname'";
    if ($conn->query($sql) == true) {
        header('Location: ./avatar_change.php?message=Zmena prebehla uspesne!');
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}
