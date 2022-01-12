<?php
include 'src/header.php';

if(isset($_POST['update'])){
    $nama = $_POST['matkul'];

    $update = mysqli_query($koneksi, "UPDATE data_kriteria SET matkul = '$nama' WHERE kode = '$_GET[kode]'");
    echo "<script>alert('Data Berhasil Diupdate');window.location='data_kriteria.php'</script>";
}
?>
        <div class="block-header">
            <h2>EDIT DATA KRITERIA</h2>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="data_kriteria.php"><button type="button" class='btn btn-sm btn-primary shadow-sm'>Kembali</button></a>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <?php
                                    $id    = $_GET['kode'];
                                    $cari  = mysqli_query($koneksi, "SELECT * FROM data_kriteria WHERE kode = '$id'");
                                    $hasil = mysqli_fetch_array($cari);
                                    ?>
                                    <form method="POST" action="">
                                       <div class="form-group">
                                            <div class="form-line">
                                                <label for="matkul">Nama Matkul</label>
                                                <input type="text" name="matkul" value="<?= $hasil['matkul'] ?>" class="form-control" placeholder="Nama Matkul" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="update" id="update" class='btn btn-sm btn-success shadow-sm'>Update</button>
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

    