<?php
$anggota = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY id DESC");
?>


<div class="container">



    <div class="row">
        <div class="col=sm-12">
            <fieldset class="border border-black border-2 p-3">
                <legend class="float-none w-auto px-3">Data Anggota</legend>
                <div align="right">
                    <a href="?pg=tambah-anggota" class="btn btn-primary">Tambah</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($anggota)):
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nama_anggota'] ?></td>
                                    <td><?php echo $row['telepon'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['alamat'] ?></td>
                                    <td>
                                        <a href="?pg=tambah-anggota&edit=<?php echo $row['id'] ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <a href="?pg=tambah-anggota&delete=<?php echo $row['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>

                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>