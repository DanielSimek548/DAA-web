<?php
require_once('../database.php');
$id = isset($_GET["id"]) ? $_GET["id"] : "";  

$sql = "DELETE FROM people WHERE id ='$id'";
if($conn->query($sql) === true){
    header('Location: ../action_page.php');
} 
else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
  
$conn->close();
?>