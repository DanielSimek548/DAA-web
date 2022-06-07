<?php
require_once('connection.php');

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
$articles = [];

while($article = $result->fetch_assoc()){
    array_push($articles, $article);
}
?>