<?php
require_once('./database.php');
$user = isset($_GET["user"]) ? $_GET["user"] : "";

$sql = "SELECT * FROM people WHERE id=$user";
$result = $conn->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
    array_push($users, $user);
}
?>