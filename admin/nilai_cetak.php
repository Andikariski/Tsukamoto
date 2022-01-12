<?php
include "../koneksi.php";
?>
<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<body style="padding: 0 20;">
    <div>
      <section class="content">
          <div class="row">
            <div class="table-responsive">
              <h1 align="center">LAPORAN NILAI MAHASISWA</h1>
              <br>
              <hr>
              <table class="table table-striped" align="center" border="1">
                <thead class="thead-light">
                  <tr align="center">
                    <th>Nim</th>
                    <th>Nama</th>
                    <?php
                    $QKrit = mysqli_query($koneksi, "SELECT matkul FROM data_kriteria");
                    while($DKrit = mysqli_fetch_array($QKrit)){
                      echo "<th>$DKrit[matkul]</th>";
                    }
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM data_nilai");
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