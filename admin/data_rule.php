<?php include 'src/header.php'; ?>
        <div class="block-header">
            <h2>DATA RULE</h2>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="rule_tambah.php"><button type="button" class='btn btn-sm btn-success shadow-sm'>Tambah</button></a>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID.</th>
                                            <?php
                                            $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                                            while($DKrit = mysqli_fetch_array($QKrit)){
                                                echo "<th>$DKrit[matkul]</th>";
                                            }
                                            ?>
                                            <th>Ket.</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM data_rule");
                                        while($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?= "R".$data['id_rule'] ?></td>
                                            <td><?= $data['c1'] ?></td>
                                            <td><?= $data['c2'] ?></td>
                                            <td><?= $data['c3'] ?></td>
                                            <td><?= $data['c4'] ?></td>
                                            <td><?= $data['c5'] ?></td>
                                            <td><?= $data['c6'] ?></td>
                                            <td><?= $data['c7'] ?></td>
                                            <td><?= $data['ket'] ?></td>
                                            <td>
                                                <a href="rule_edit.php?id_rule=<?php echo $data['id_rule']; ?>"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Edit</button></a>
                                                <a href="rule_hapus.php?id_rule=<?php echo $data['id_rule']; ?>"><button type="button" class='btn btn-sm btn-danger shadow-sm'>Hapus</button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'src/footer.php'; ?>

    