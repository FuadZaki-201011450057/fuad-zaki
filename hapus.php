<?php
// koneksi database
include '../../koneksi.php';
// menangkap data id yang di kirim dari url
$kd_dosen = $_GET['kd_dosen'];
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_dosen where kd_dosen='$kd_dosen'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>