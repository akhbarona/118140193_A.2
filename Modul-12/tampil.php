<table border="1">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Prodi</th>
		<th>Angkatan</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php

	include "koneksi.php";
	$hasil = mysqli_query($kon, "select * from mahasiswa order by nim asc");
	$no = 0;
	while ($data = mysqli_fetch_array($hasil)) :
		$no++;
	?>
		<tr id="list">
			<td><?= $no; ?></td>
			<td><?= $data['nim']; ?></td>
			<td><?= $data['nama']; ?></td>
			<td><?= $data['prodi']; ?></td>
			<td><?= $data['angkatan']; ?></td>
			<td><button id="EditButton" nama="<?= $data['nama']; ?>" prodi="<?= $data['prodi'] ?>" angkatan="<?= $data['angkatan'] ?>" value="<?= $data['nim']; ?>">Update</button></td>
			<td><button id="DeleteButton" value="<?= $data['nim']; ?>">Delete</button></td>
		</tr>
	<?php endwhile; ?>
</table>