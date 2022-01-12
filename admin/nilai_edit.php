<?php
include 'src/header.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama_mahasiswa'];
    $c1   = $_POST['c1'];
    $c2   = $_POST['c2'];
    $c3   = ($_POST['c3']);
    $c4   = ($_POST['c4']);
    $c5   = ($_POST['c5']);
    $c6   = ($_POST['c6']);
    $c7   = ($_POST['c7']);

    $simpan = mysqli_query($koneksi, "UPDATE data_nilai SET nama_mahasiswa = '$nama', c1 = '$c1', c2 = '$c2', c3 = '$c3', c4 = '$c4', c5 = '$c5', c6 = '$c6', c7 = '$c7' WHERE nim = '$_GET[nim]'");
    echo "<script>alert('Data Berhasil Disimpan');window.location='data_nilai.php'</script>";
}
?>
        <div class="block-header">
            <h2>EDIT DATA NILAI</h2>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="data_nilai.php"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Kembali</button></a>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <?php
                                    $id    = $_GET['nim'];
                                    $cari  = mysqli_query($koneksi, "SELECT * FROM data_nilai WHERE nim = '$id'");
                                    $hasil = mysqli_fetch_array($cari);
                                    ?>
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                                                <input type="type" name="nama_mahasiswa" value="<?= $hasil['nama_mahasiswa'] ?>" class="form-control" placeholder="Input Nama Mahasiswa" required>
                                            </div>
                                        </div>
                                        <?php
                                        $namaK = array();
                                        $no    = 1;
                                        $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                                        while($DKrit = mysqli_fetch_array($QKrit)){
                                            $c = "c".$no;
                                        ?>
                                       <div class="form-group">
                                            <div class="form-line">
                                                <label for="<?= $c ?>">Input Nilai <?= $DKrit['matkul'] ?></label>
                                                <input type="type" name="<?= $c ?>" value="<?= $hasil[$c] ?>" class="form-control" placeholder="Input Nilai <?= $DKrit[matkul] ?>" required>
                                            </div>
                                        </div>
                                        <?php $no++; } ?>
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

    