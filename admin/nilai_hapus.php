<?php
include '../koneksi.php';

$hapus = mysqli_query($koneksi, "DELETE FROM data_nilai WHERE nim = '$_GET[nim]'");
echo "<script>alert('Data Berhasil Dihapus');window.location='data_nilai.php'</script>";
?>