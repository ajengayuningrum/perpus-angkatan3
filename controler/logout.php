<?php

session_start();
session_destroy();
$_SESSION = [];

if(empty($_SESSION)) {
    header('Location: ../dashboard.php');
    exit;
}
?>