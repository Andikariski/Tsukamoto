<?php
include 'src/header.php';

if (isset($_POST['simpan'])) {
    $nim  = $_POST['nim'];
    $nama = $_POST['nama_mahasiswa'];
    $c1   = $_POST['c1'];
    $c2   = $_POST['c2'];
    $c3   = ($_POST['c3']);
    $c4   = ($_POST['c4']);
    $c5   = ($_POST['c5']);
    $c6   = ($_POST['c6']);
    $c7   = ($_POST['c7']);

    $simpan = mysqli_query($koneksi, "INSERT INTO data_nilai VALUES('$nim','$nama','$c1','$c2','$c3','$c4','$c5','$c6','$c7')");
    echo "<script>alert('Data Berhasil Disimpan');window.location='data_nilai.php'</script>";
}
?>

<?php
$nim = $auth['nim'];
$query = mysqli_query($koneksi, "SELECT * FROM data_nilai WHERE nim = $nim");
$cek   = mysqli_num_rows($query);
// if ($cek > 0)
?>
<?php if ($cek > 0) : ?>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h3 align="center">ANDA SUDAH MENGINPUTKAN NILAI</h1>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="block-header">
        <h2>TAMBAH DATA NILAI</h2>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <a href="data_nilai.php"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Kembali</button></a>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <form method="POST" action="">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nim" class="form-control" placeholder="Input NIM" readonly value=<?= $auth['nim'] ?>>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_mahasiswa" class="form-control" readonly value="<?= $auth['nama'] ?>">
                                        </div>
                                    </div>
                                    <?php
                                    $namaK = array();
                                    $no    = 1;
                                    $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                                    while ($DKrit = mysqli_fetch_array($QKrit)) {
                                        $c = "c" . $no;
                                    ?>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="type" name="<?= $c ?>" class="form-control" placeholder="Input Nilai <?= $DKrit['matkul'] ?>" required>
                                            </div>
                                        </div>
                                    <?php $no++;
                                    } ?>
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
<?php endif; ?>
<?php include 'src/footer.php'; ?>