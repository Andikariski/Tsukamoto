<?php
include "../koneksi.php";
?>
<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<body style="padding: 0 20;">
    <div>
      <section class="content">
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <h1 align="center">LAPORAN HASIL PERHITUNGAN FUZZY TSUKAMOTO</h1>
              <br>
              <hr>
              <table class="table table-striped" align="center" border="1">
                <thead class="thead-light">
                  <tr align="center">
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                    <th>C7</th>
                    <th>Dz</th>
                    <th>Ket</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysqli_query($koneksi, "SELECT data_nilai.*, data_hasil.* FROM data_nilai, data_hasil WHERE data_hasil.nim = data_nilai.nim");
                    while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr align="center">
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama_mahasiswa'] ?></td>
                    <td><?= $data['c1'] ?></td>
                    <td><?= $data['c2'] ?></td>
                    <td><?= $data['c3'] ?></td>
                    <td><?= $data['c4'] ?></td>
                    <td><?= $data['c5'] ?></td>
                    <td><?= $data['c6'] ?></td>
                    <td><?= $data['c7'] ?></td>
                    <td><?= round($data['defuzzy'],2) ?></td>
                    <td><?= $data['ket'] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>
      </section>
    </div>
  </body>
   <script>
      window.print()
  </script>