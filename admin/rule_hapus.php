<?php
include '../koneksi.php';

$hapus = mysqli_query($koneksi, "DELETE FROM data_rule WHERE id_rule = '$_GET[id_rule]'");
echo "<script>alert('Data Berhasil Dihapus');window.location='data_rule.php'</script>";
?>