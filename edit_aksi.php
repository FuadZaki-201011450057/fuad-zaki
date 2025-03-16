<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kd_dosen = $_POST['kd_dosen'];
$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
// update data ke database
mysqli_query($koneksi,"update tbl_dosen set nama='$nama',alamat='$alamat' where kd_dosen='$kd_dosen'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>