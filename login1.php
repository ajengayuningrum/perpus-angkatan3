<?php 
session_start();
session_regenerate_id(true);

//Jika session nya isi, maka melempar ke dashboard.php
if(isset($_SESSION['nama']) && isset($_SESSION['email'])){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-3 mb-4">
                <img src="fotoppkd.png" alt="gambar1" class="img-fluid" width="150">
            </div>
            <div class="col-6 text-center mb-4">
                <h1>SELAMAT DATANG DI PPKD JAKPUS</h1>
                <p>Jl. Karet Pasar Baru Barat V No. 23,
                    Karet Tengsin Jakarta Pusat.</p>
            </div>
            <div class="col-3 mb-3">
                <img src="fotoppkd.png" alt="gambar1" class="img-fluid" width="150">
            </div>
        </div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #20c997">
            <div class=""></div>
        <button class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navAltMarkup" 
        aria-controls="navAltMarkup" 
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navAltMarkup">
                <div class="navbar-nav">
                    <a href="home.php" class="nav-link">Home</a>
                    <a href="index1.php" class="nav-link active">Login</a>
                    <a href="#" class="nav-link">Department</a>
                    <a href="register.php" class="nav-link"></a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Running text -->
         <marquee behavior="" direction="">Angkatan 3 Sedang Membuat Project WEB</marquee>
        <!-- End Running text -->
        <!-- Login -->
         <div class="row justify-content-center">
            <div class="col-md-7">
              <div class="card">
                <div class="card-header text-center">
                    <h3>Login</h3>
                </div>
                
                <?php
                if (isset($_GET['error'])  && $_GET['error'] == "login-gagal")  { 
                    echo "<div class='alert alert-danger' role='alert'>
  A simple danger alert—check it out!
</div>";
                    
                }?>
                
                <div class="card-body">
                    <form action="controler/control-login.php"  method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <a href="register.php" class="nav.link">Register</a>
                        </div>
                    </form>

                </div>
            </div>
            </div>
        </div>



        <footer class="fixed-bottom" style="background-color: #20c997; min-height: 65px">
    <p class="text-center pt-3 px-4">Copyright &copy 2024 PPKD - Jakarta Pusat.</p>
  </footer>
        </div> 
    
         
    
    
    <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
