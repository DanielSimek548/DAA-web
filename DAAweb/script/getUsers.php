<?php
require_once('./database.php');

$sql = "SELECT * FROM people";
$result = $conn->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
    array_push($users, $user);
}
?>