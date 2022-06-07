<?php

require_once('connection.php');

$title = $_POST["title"];
$text = $_POST["text"];
$image = $_POST["image"];
$autor = $_POST["autor"];

$sql = "INSERT INTO `clanok` (nazov, text, cover, autor) VALUES ('$title', '$text', '$image', '$autor');";

if ($conn->query($sql) == true) {
    header('Location: index.php?message=Clanok bol vytvoreny');
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}
$conn->close();
