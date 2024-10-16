<?php
if (isset($_POST['tambah'])) {
    $nama_buku  = $_POST['nama_buku'];
    $penerbit  = $_POST['penerbit'];
    $tahun_terbit  = $_POST['tahun_terbit'];
    $pengarang  = $_POST['pengarang'];
    $id_kategori  = $_POST['id_kategori'];

    $insert = mysqli_query($koneksi, "INSERT INTO book (id_kategori, nama_buku, penerbit, tahun_terbit, pengarang) VALUES('$id_kategori','$nama_buku','$penerbit','$tahun_terbit','$pengarang')");

    header("location:?pg=book&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editBook = mysqli_query($koneksi, "SELECT * FROM book WHERE id = '$id'");
$rowEdit  = mysqli_fetch_assoc($editBook);

if (isset($_POST['edit'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama_buku =  $_POST['nama_buku'];
    $penerbit =  $_POST['penerbit'];
    $tahun_terbit =  $_POST['tahun_terbit'];
    $pengarang =  $_POST['pengarang'];

    $update = mysqli_query($koneksi, "UPDATE book SET nama_buku='$nama_buku', penerbit='$penerbit', tahun_terbit='$tahun_terbit', pengarang='$pengarang', id_kategori='$id_kategori' WHERE id='$id'");
    header("location:?pg=book&ubah=berhasil");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM book WHERE id  = '$id'");
    header("location:?pg=book&hapus=berhasil");
}

$queryBook =  mysqli_query($koneksi, "SELECT * FROM book");


?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border border-black border-2 p-3">
                <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Buku</legend>
                <form action="" method="post">
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="" class="form-label">No Peminjaman</label>
                                <input type="text" class="form-control" name="no_peminjaman" value="" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" name="tgl_peminjaman" value="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Buku</label>
                                <select name="" id="id_book" class="form-control">
                                    <option value="">Pilih Buku</option>
                                    <?php while ($rowBook = mysqli_fetch_assoc($queryBook)):?>
                                    <option value="<?php echo $rowBook['id']?>">
                                    <?php echo $rowBook['nama_buku']; ?>
                                    </option>
                                <?php endwhile ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Anggota</label>
                                <select name="id_anggota" id="" class="form-control">
                                    <option value="">Pilih Anggota</option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" name="tgl_pengembalian" value="">
                            </div>
                        </div>
                        <div align="right" class="mb-3">
                            <button type="button" id="add-row" class="btn btn-primary">Tambah Row</button>
                        </div>
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-row">
                            </tbody>
                        </table>

                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>