<?php include 'src/header.php'; ?>
<div class="block-header">
    <h2>DATA NILAI</h2>
</div>
<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <!-- <a href="nilai_tambah.php"><button type="button" class='btn btn-sm btn-success shadow-sm'>Tambah</button></a> -->
                <a href="nilai_cetak.php" target="_blank()"><button type="button" class='btn btn-sm btn-danger shadow-sm'>Cetak</button></a>
                <div class="body">
                    <div class="table-responsive">
                        <?php
                        if ($auth['role'] == 'admin') :
                        ?>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <?php
                                        $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                                        while ($DKrit = mysqli_fetch_array($QKrit)) {
                                            echo "<th>$DKrit[matkul]</th>";
                                        }
                                        ?>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM data_nilai");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $data['nim'] ?></td>
                                            <td><?= $data['nama_mahasiswa'] ?></td>
                                            <td><?= $data['c1'] ?></td>
                                            <td><?= $data['c2'] ?></td>
                                            <td><?= $data['c3'] ?></td>
                                            <td><?= $data['c4'] ?></td>
                                            <td><?= $data['c5'] ?></td>
                                            <td><?= $data['c6'] ?></td>
                                            <td><?= $data['c7'] ?></td>
                                            <td>
                                                <a href="nilai_edit.php?nim=<?php echo $data['nim']; ?>"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Edit</button></a>
                                                <a href="nilai_hapus.php?nim=<?php echo $data['nim']; ?>"><button type="button" class='btn btn-sm btn-danger shadow-sm'>Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php
                        elseif ($auth['role'] == 'mahasiswa') :
                        ?>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <?php
                                        $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                                        while ($DKrit = mysqli_fetch_array($QKrit)) {
                                            echo "<th>$DKrit[matkul]</th>";
                                        }
                                        ?>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nim =  $auth['nim'];
                                    $query = mysqli_query($koneksi, "SELECT * FROM data_nilai WHERE nim = $nim");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $data['nim'] ?></td>
                                            <td><?= $data['nama_mahasiswa'] ?></td>
                                            <td><?= $data['c1'] ?></td>
                                            <td><?= $data['c2'] ?></td>
                                            <td><?= $data['c3'] ?></td>
                                            <td><?= $data['c4'] ?></td>
                                            <td><?= $data['c5'] ?></td>
                                            <td><?= $data['c6'] ?></td>
                                            <td><?= $data['c7'] ?></td>
                                            <td>
                                                <a href="nilai_edit.php?nim=<?php echo $data['nim']; ?>"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Edit</button></a>
                                                <a href="nilai_hapus.php?nim=<?php echo $data['nim']; ?>"><button type="button" class='btn btn-sm btn-danger shadow-sm'>Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</section>

<?php include 'src/footer.php'; ?>