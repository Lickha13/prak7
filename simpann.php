<?php
include 'koneksii.php';
// menyimpan data ke dalam variabel
$nama			= $_POST['nama'];
$jkel			= $_POST['jkel'];
$email			= $_POST['email'];
$alamat			= $_POST['alamat'];
$kota			= $_POST['kota'];
$pesan			= $_POST['pesan'];
// query SQL untuk insert data
$query="INSERT INTO namakontak SET nama='$nama', jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksii, $query);
// mengalihkan ke halaman index.php
header("location:tampilkontak.php");
?>
