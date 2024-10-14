<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <style>
        .kotak {
            border: 2px solid #20c997; /* Warna border */
            border-radius: 2px; /* Sudut yang melengkung */
            padding: 20px; /* Jarak di dalam kotak */
            background-color: #f8f9fa; /* Warna latar belakang */
            margin: 20px 0; /* Jarak luar atas dan bawah */
            position: relative; /* Untuk mengatur posisi label */
            margin-bottom: 80px;
        }
        .label-kotak {
            position: absolute;
            top: -15px; /* Atur posisi label di atas kotak */
            left: 12%; /* Pusatkan label secara horizontal */
            transform: translateX(-50%); /* Pusatkan label secara horizontal */
            background-color: #f8f9fa; /* Warna latar belakang label */
            padding: 0 10px; /* Jarak dalam label */
            font-weight: bold; /* Membuat teks lebih tebal */
            color: #000; /* Warna teks label */
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #20c997;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAltMarkup" aria-controls="navAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navAltMarkup">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link">Dashboard</a>
                    <a href="manageaccounts.php" class="nav-link">Manage Accounts</a>
                    <a href="managebooks.php" class="nav-link">Manage Books</a>
                </div>
            </div>
        </div>
    </nav> 
    
<body>

<div class="container justify-content-center mt-5">
    <div class="kotak"> <!-- Kotak di sini -->
        <div class="label-kotak">Tabel Buku</div> <!-- Label di atas kotak -->
        

        <!-- Tombol di dalam kotak -->
        <div class="d-flex justify-content-start mb-3">
            <button type="button" class="btn btn-outline-secondary btn-sm me-2">Add</button>
            <button type="button" class="btn btn-outline-secondary btn-sm">Recycle</button>
        </div>

        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                <th scope="col">No<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Kategori Buku<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Lokasi Rak<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Judul<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Pengarang<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Penerbit<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Tahun Terbit<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Keterangan<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Stock<i class="bx bxs-sort-alt"></i></th>
                    <th scope="col">Settings<i class="bx bxs-sort-alt"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>
                </tr>
                <tr><th scope="row">6</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>
                </tr>
                <tr><th scope="row">7</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>
                </tr>
                <tr><th scope="row">8</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>    
                </tr>
                <tr><th scope="row">9</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>   
                </tr>
                <tr><th scope="row">10</th>
                    <td>Anak-anak dan Remaja</td>
                    <td>AR-BAA-AR1</td>
                    <td>Cerita si Ipin</td>
                    <td>Horasan</td>
                    <td>Horasan Media</td>
                    <td>2008</td>
                    <td>Buku ini untuk Anak-anak</td>
                    <td>16</td>
                    <td>#</td>   
                </tr>
            </tbody>
        </table>
    </div>
        <footer class="fixed-bottom" style="background-color: #20c997; min-height: 65px">
        <p class="text-center pt-3 px-4">Copyright &copy 2024 PPKD - Jakarta Pusat.</p>
       </footer>
</div>

<script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>




