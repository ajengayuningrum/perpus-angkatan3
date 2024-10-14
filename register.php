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
        <nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #bee1fa;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAltMarkup" aria-controls="navAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <div class="collapse navbar-collapse" id="navAltMarkup">
                <div class="navbar-nav">
                    <a href="home.php" class="nav-link">Home</a>
                    <a href="index.php" class="nav-link">Login</a>
                    <a href="#" class="nav-link">Department</a>
                    <a href="register.php" class="nav-link"></a>
                </div>
            </div> 
        </div>     
    </nav>
    <div class="row justify-content-center mt-4">
            <div class="col-md-7">
              <div class="card">
                <div class="card-header text-center bg-info">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form action=""  method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="username" class="form-control" name="username">
                    </div>    

                    <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                    </div>
                        
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Register</button>
                    </div>
                    </form>
                </div>
              </div>
            </div>

    <footer class="shadow-sm mt-5 fixed-bottom" style="background-color: #bee1fa; min-height: 65px">
        <div class="row">
        <div class="col-md-6 d-flex justify-content-between">
            <p class="text-center ps-4 pt-3">Copyright  &copy 2024 PPKD Jakarta Pusat</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <p class="text-center pt-3 pe-4">Privacy Policy</p>
        </div>
        </div> 
        </footer>
                    
    <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>