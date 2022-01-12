<?php
include 'src/header.php';

//HAPUS TABEL HASIL FUZZY
$hapus = mysqli_query($koneksi, "TRUNCATE TABLE data_hasil");

//MENGAMBIL NILAI MAHASISWA UNTUK DIMASUKKAN KE DALAM INISIALISASI VARIABEL
$sql1 = mysqli_query($koneksi, "SELECT * FROM data_nilai ORDER BY nim");
while ($data1 = mysqli_fetch_array($sql1)) {

    //INISIALIASI VARIABEL
    include 'src/inisialisasi_variabel.php';

    //MENGAMBIL DATA ATURAN
    $sql2 = mysqli_query($koneksi, "SELECT * FROM data_rule GROUP BY id_rule");
    //DEKLARASI
    $Z = 0;
    $Zi = 0;
    $Ri = 0;
    $minZ = 0;
    while ($data2 = mysqli_fetch_array($sql2)) {

        //KONDISI UNTUK MENGUBAH DATA RULE KE HASIL INISIALISASI VARIABEL
        include 'src/kondisi_rule.php';

        //AMBIL KONDISI RULE FUZZY TSUKAMOTO
        $R = min($pm, $mesin, $web, $robot, $spk, $kripto, $pola);

        //KONDISI DARI THEN RULE
        if ($data2['ket'] == "Sistem Cerdas") {
            //JIKA HASIL RULE TIDAK BAIK
            $Z1 = (70 - (50 * $R));
            $Z += (70 - (50 * $R));
        } elseif ($data2['ket'] == "Rekayasa Perangkat Lunak dan Data") {
            //JIKA HASIL RULE BAIK
            $Z1 = (($R * 50) + 50);
            $Z += (($R * 50) + 50);
        }

        //JUMLAH Rule (Min)
        $Ri += $R;
        //JUMLAH Z
        $Zi += $Z;
        //JUMLAH min(Rule) * Z
        $minZ += ($R * $Z1);
    }
    //DEFUZZYFIKASI
    $Dz = $minZ / $Ri;

    //KETERANGAN
    if ($Dz < 70) {
        $ket = "Sistem Cerdas";
    } elseif ($Dz > 70) {
        $ket = "Rekayasa Perangkat Lunak dan Data";
    }

    //SIMPAN DATA PERHITUNGAN FUZZY TSUKAMOTO KE DALAM TABEL HASIL FUZZY
    $sql = mysqli_query($koneksi, "INSERT INTO data_hasil VALUES ('','$data1[nim]','$Dz','$ket')") or die(mysqli_error($koneksi));
}

?>
<div class="block-header">
    <h2>HASIL PERHITUNGAN FUZZY TSUKAMOTO</h2>
</div>
<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <a href="hasil_cetak.php" target="_blank"><button type="button" class='btn btn-sm btn-success shadow-sm'>Cetak</button></a>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="table-responsive">
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
                                            <th>Dz</th>
                                            <th>Ket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT data_nilai.*, data_hasil.* FROM data_nilai, data_hasil WHERE data_hasil.nim = data_nilai.nim");
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
                                                <td><?= round($data['defuzzy'], 2) ?></td>
                                                <td><?= $data['ket'] ?></td>
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
</div>
</div>
</section>
<?php include 'src/footer.php'; ?>