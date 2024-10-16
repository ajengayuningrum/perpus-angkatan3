<?php 
session_start();

if (empty($_SESSION['NAMA'])) {
    header("location:login.php?access=failed");
}

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <title>Document</title>
</head>
<body>
   

    <!-- <nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #20c997;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAltMarkup" aria-controls="navAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
    
            <div class="collapse navbar-collapse" id="navAltMarkup">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link">Dashboard</a>
                    <a href="?pg=user" class="nav-link">Manage Accounts</a>
                    <a href="managebooks.php" class="nav-link">Manage Books</a>
                </div>
            </div>
        </div>
    </nav> -->

    <div class="wrapper">
        <?php include 'navbar.php' ?>

        <?php
        if (isset($_GET['pg'])) {
            if (file_exists('content/' . $_GET['pg'] .'.php')) {
                include 'content/' . $_GET['pg'] . '.php';
            }
        }else {
            include 'content/dashboard.php';
        }
        ?>

    </div>
    
    <!-- <div class="container mt-5 text-center">
        <div class="row">
            <div class="col-4 mt-5">
                <img src="fotoppkd.png" alt="" class="img-fluid">
            </div>
            <div class="col-7 mt-5 mb-4 fst-italic">
                <h3 style="padding-top: 30px">"Jadilah penjaga pintu menuju petualangan tak terbatas, karena setiap kunci yang diatur adalah kunci menuju cakrawala pengetahuan yang lebih luas"</h3>
            </div>
        </div> -->
        
                <footer class="fixed-bottom" style="background-color: #20c997; min-height: 65px">
            <p class="text-center pt-3 px-4">Copyright &copy 2024 PPKD - Jakarta Pusat.</p>
        </footer>
        
    </div>

    <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
</body>
</html>