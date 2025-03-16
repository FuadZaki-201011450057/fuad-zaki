<!DOCTYPE html>
<html>
<head>
<title>Data Dosen</title>
</head>
<body>
<h2>Data Dosen</h2>
<br/>
<a href="tambah.php">+ TAMBAH</a>
<br>
<table border="1">
<tr>
<th>NO</th>
<th>NIM</th>
<th>Nama</th>
<th>GENDER</th>
<th>JURUSAN</th>
<th>OPSI</th>
</tr>
<?php
include '../../koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from mahasiswa");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nim']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['gender']; ?></td>
<td><?php echo $d['jurusan']; ?></td>

<td>
<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
<br/>
<a href="../index.php">Back To Main Menu</a><br>
<a href="../logout.php">LOGOUT</a>
</body>
</html>