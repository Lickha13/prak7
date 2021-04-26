<h2>Nama Kontak</h2>
<table border="1">
	<tr><th>N0</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><td>PESAN</td></tr>
	<?php
	include 'koneksii.php';
	$namakontak = mysqli_query($koneksii, "SELECT * from namakontak");
	$no=1;
	foreach ($namakontak as $row) {
		echo "<tr>
			<td>$no</td>
			<td>".$row['nama']."</td>
			<td>".$row['jkel']."</td>
			<td>".$row['email']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['kota']."</td>
			<td>".$row['pesan']."</td>
				</tr>";
		$no++;
	}
	?>
</table>
