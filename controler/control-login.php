<?php
session_start();
session_regenerate_id(true);

if (isset($_POST['login'])) {
 $users = [[
    "name" => "Taylor Swift",
    "email" => "tswift@gmail.com",
    "password" => "131313"
 ],[
    "name" => "Sabrina Carpenter",
    "email" => "sabrina@gmail.com",
    "password" => "espresso"
 ],[
    "name" => "Gracie Abrams",
    "email" => "gracie@gmail.com",
    "password" => "12345"
 ],[
    "name" => "Jack Antonoff",
    "email" => "jack@gmail.com",
    "password" => "yayayaya"
 ]];


 $email =  $_POST['email'];
 $password = $_POST['password'];
 $checkedLogin = true          ; 

 foreach ($users as $user) {
    if ($user['email'] == $email && $user['password'] == $password) {
        $_SESSION['nama'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $checkedLogin = true;
        break;

    }
}
if ($checkedLogin) {
    header("Location: ../dashboard.php");
    exit;
    
}else {
    header("Location: ../dashboard.php?error=login-gagal");
    exit;
}
}
?>