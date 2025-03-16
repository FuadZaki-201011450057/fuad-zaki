<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kode_dosen = $_POST['kode_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$alamat=$_POST['alamat'];
// menginput data ke database
mysqli_query($koneksi,"insert into tbl_dosen values('$kode_dosen','$nama_dosen','$alamat')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>