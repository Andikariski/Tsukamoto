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

    $simpan = mysqli_query($koneksi, "UPDATE data_rule SET c1 = '$c1', c2 = '$c2', c3 = '$c3', c4 = '$c4', c5 = '$c5', c6 = '$c6', c7 = '$c7', ket = '$kt' WHERE id_rule = '$_GET[id_rule]'");
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
                                    <?php
                                    $id    = $_GET['id_rule'];
                                    $cari  = mysqli_query($koneksi, "SELECT * FROM data_rule WHERE id_rule = '$id'");
                                    $hasil = mysqli_fetch_array($cari);
                                    ?>
                                    <form method="POST" action="">
                                        <?php
                                        $no    = 1;
                                        $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                                        while($DKrit = mysqli_fetch_array($QKrit)){
                                            $c = "c".$no;
                                        ?>
                                       <div class="form-group">
                                            <div class="form-line">
                                                <label><?= $DKrit['matkul'] ?></label>
                                                <select class="form-control" name="<?= $c ?>" required>
                                                    <option value="Rendah" <?php if($hasil[$c]== "Rendah" ){ echo "selected"; } ?> >Rendah</option>
                                                    <option value="Sedang" <?php if($hasil[$c]== "Sedang" ){ echo "selected"; } ?> >Sedang</option>
                                                    <option value="Tinggi" <?php if($hasil[$c]== "Tinggi" ){ echo "selected"; } ?> >Tinggi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <?php $no++; } ?>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" name="ket" required>
                                                    <option value="Sistem Cerdas" <?php if($hasil['ket']== "Sistem Cerdas" ){ echo "selected"; } ?> >Sistem Cerdas</option>
                                                    <option value="Rekayasa Perangkat Lunak dan Data" <?php if($hasil['ket']== "Rekayasa Perangkat Lunak dan Data" ){ echo "selected"; } ?> >Rekayasa Perangkat Lunak dan Data</option>
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

    