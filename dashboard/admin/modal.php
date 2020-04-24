<?php include('../../alat/koneksi.php'); ?>
<!-- Delete Pasien -->
<div class="modal fade" id="delpas<?php echo $temp['id_pasien']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php
                $pas = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE id_pasien='" . $temp['id_pasien'] . "' "));
                ?>
                <div class="container-fluid">
                    <h5>
                        <center>Pasien Bernama: <strong><?php echo $pas['nama']; ?></strong></center>
                    </h5>
                    <h5>
                        <center>Umur: <strong><?php echo $pas['umur']; ?></strong></center>
                    </h5>
                    <h5>
                        <center>Kelamin: <strong><?php echo $pas['kelamin']; ?></strong></center>
                    </h5>
                    <h5>
                        <center>Alamat: <strong><?php echo $pas['alamat']; ?></strong></center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                <a href="option/pasien/hapus.php?id=<?php echo $temp['id_pasien']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </div>

        </div>
    </div>
</div>
<!-- /EndmodalDelete -->
<!-- Perbarui -->
<div class="modal fade" id="positif<?php echo $temp['id_pasien']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <?php
                $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE id_pasien='" . $temp['id_pasien'] . "'"));
                ?>
                <div class="container-fluid">
                    <form method="POST" action="option/pasien/edit.php?id=<?php echo $temp['id_pasien']; ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Perbarui Data Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" required value="<?php echo $data['nama'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Suhu</label>
                                <input type="text" name="suhu" class="form-control" value="<?php echo $data['suhu'] ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End -->
<!-- Edit Pasien -->
<div class="modal fade" id="editpas<?php echo $temp['id_pasien']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <?php
                $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE id_pasien='" . $temp['id_pasien'] . "'"));
                ?>
                <div class="container-fluid">
                    <form method="POST" action="option/pasien/edit.php?id=<?php echo $temp['id_pasien']; ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" required value="<?php echo $data['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Kelamin</label>
                                <select name="kelamin" class='form-control' required>
                                    <option value="<?php echo $data['kelamin'] ?>" disabled selected hidden><?php echo $data['kelamin'] ?></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Tidak Disebutkan">Tidak Disebutkan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-tabel">Umur</label>
                                <input type="number" name="umur" class="form-control" value="<?php echo $data['umur'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Hasil</label>
                                <select name="hasil" class='form-control' required>
                                    <option value="<?php echo $data['hasil'] ?>" disabled selected hidden><?php echo $data['hasil'] ?></option>
                                    <option value="Negatif">Negatif</option>
                                    <option value="Positif">Positif</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /EndmodalEdit -->


<!-- Delete Perawat -->
<div class="modal fade" id="delper<?php echo $temp['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Petugas</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php
                $pet = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_petugas WHERE id_petugas='" . $temp['id_petugas'] . "' "));
                ?>
                <div class="container-fluid">
                    <h5>
                        <center>Id Petugas: <strong><?php echo $pet['id_petugas']; ?></strong></center>
                    </h5>
                    <h5>
                        <center>Username: <strong><?php echo $pet['username']; ?></strong></center>
                    </h5>
                    <h5>
                        <center>Nama: <strong><?php echo $pet['nama_petugas']; ?></strong></center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                <a href="option/perawat/hapus.php?id=<?php echo $temp['id_petugas']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </div>

        </div>
    </div>
</div>
<!-- /EndmodalDelete -->

<!-- Editperawat -->
<div class="modal fade" id="editper<?php echo $temp['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <?php
                $pet = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_petugas WHERE id_petugas='" . $temp['id_petugas'] . "' "));
                ?>
                <div class="container-fluid">
                    <form method="POST" action="option/perawat/edit.php?id=<?php echo $pet['id_petugas']; ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Perawat</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $pet['nama_petugas'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $pet['username'] ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /EndmodalEdit -->
<div class="modal fade" id="positif<?php echo $temp['id_pasien']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <?php
                $pet = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE id_pasien='" . $temp['id_pasien'] . "' "));
                ?>
                <div class="container-fluid">
                    <form method="POST" action="option/positif/edit.php?id=<?php echo $pet['id_pasien']; ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Perawat</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $pet['nama_petugas'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Suhu</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $pet['username'] ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>