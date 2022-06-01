<?php
session_start();
unset($_SESSION["uname"]);
session_destroy();
header('Location: ./action_page.php');
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

