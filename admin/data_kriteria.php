<?php include 'src/header.php'; ?>
        <div class="block-header">
            <h2>DATA KRITERIA</h2>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Matkul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM data_kriteria");
                                        while($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?= $data['kode'] ?></td>
                                            <td><?= $data['matkul'] ?></td>
                                            <td>
                                                <a href="kriteria_edit.php?kode=<?php echo $data['kode']; ?>"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Edit</button></a>
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

    