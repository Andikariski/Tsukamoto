<?php
include 'src/header.php';

if(isset($_POST['simpan'])){
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = ($_POST['c3']);
    $c4 = ($_POST['c4']);
    $c5 = ($_POST['c5']);
    $c6 = ($_POST['c6']);
    $c7 = ($_POST['c7']);
    $kt = ($_POST['ket']);

    $simpan = mysqli_query($koneksi, "INSERT INTO data_rule VALUES('','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$kt')");
    echo "<script>alert('Data Berhasil Disimpan');window.location='data_rule.php'</script>";
}
?>
        <div class="block-header">
            <h2>TAMBAH DATA RULE</h2>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="data_rule.php"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Kembali</button></a>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    
                                    <form method="POST" action="">
                                        <?php
                                        $namaK = array();
                                        $no    = 1;
                                        $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                                        while($DKrit = mysqli_fetch_array($QKrit)){
                                            $c = "c".$no;
                                        ?>
                                       <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="<?= $c ?>" required>
                                                    <option value="">-- Pilih Himpunan <?= $DKrit['matkul'] ?> --</option>
                                                    <option value="Rendah">Rendah</option>
                                                    <option value="Sedang">Sedang</option>
                                                    <option value="Tinggi">Tinggi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <?php $no++; } ?>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="ket" required>
                                                    <option value="">-- Pilih Keterangan --</option>
                                                    <option value="Sistem Cerdas">Sistem Cerdas</option>
                                                    <option value="Rekayasa Perangkat Lunak dan Data">Rekayasa Perangkat Lunak dan Data</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="simpan" id="simpan" class='btn btn-sm btn-success shadow-sm'>Simpan</button>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'src/footer.php'; ?>

    