<!DOCTYPE html>
<html>

<head>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
	<form method="post" id="form_mahasiswa">
		<label for="">NIM </label>
		<input type="number" name="nim" id="nim"><br>
		<label for="">Nama </label>
		<input type="text" name="nama" id="nama"><br>
		<label for="">Prodi</label>
		<select name="prodi" id="prodi">
			<option value="IF">Teknik Informatika</option>
			<option value="EL">Teknik Elektro</option>}
			<option value="SI">Teknik Sipil</option>
			<option value="TG">Teknik Geofisika</option>
			<option value="MA">Matematika</option>
		</select><br>
		<label for="">Angkatan</label>
		<select name="angkatan" id="angkatan">
			<option value="2018">2018</option>
			<option value="2017">2017</option>}
			<option value="2016">2016</option>
		</select>
	</form>
	<!-- <button id="btn_tampil" value="Tambah">Tampilkan</button> -->
	<input type="button" name="btn_tampil" id="btn_tampil" value="Tambah">
	<hr>
	<div id="tampil_data"></div>
	<script>
		$(document).ready(function() {
			$('#tampil_data').load("tampil.php");
			var rename;
			$('#btn_tampil').click(function() {
				var data = $('#form_mahasiswa').serialize();
				var aksi = $("#btn_tampil").val();

				var nim = $("#nim").val();
				var nama = $("#nama").val();
				var prodi = $("#prodi").val();
				var angkatan = $("#angkatan").val();
				if (aksi == "Tambah") {
					$.ajax({
						type: 'POST',
						url: "tambah.php",
						data: data,
						cache: false,
						success: function(data) {
							$('#tampil_data').load('tampil.php');
						}
					});
				} else {
					$("#btn_tampil").val("Tambah");
					$.ajax({
						type: 'post',
						url: "update.php",
						data: {
							nim: nim,
							nama: nama,
							prodi: prodi,
							angkatan: angkatan,
							kode: rename
						},
						cache: false,
						success: function(data) {
							$('#tampil_data').load('tampil.php');
						}

					});
					$("#nim").val("");
					$("#nama").val("");
				}
			});

			$("#tampil_data").on('click', '#EditButton', function() {

				var nim = $(this).attr('value');
				rename = nim;
				var nama = $(this).attr('nama');
				var prodi = $(this).attr('prodi');
				var angkatan = $(this).attr('angkatan');
				$("#nim").val(nim);
				$("#nama").val(nama);
				$("#prodi").val(prodi);
				$("#angkatan").val(angkatan);
				$("#btn_tampil").val("Update");
			});

			$("#tampil_data").on("click", "#DeleteButton", function() {
				var IdMhsw = $(this).attr("value");
				$.ajax({
					url: 'delete.php',
					type: 'post',
					data: {
						nim: IdMhsw
					},
					success: function(data) {
						$('#tampil_data').load('tampil.php');
					}
				});
			});

		});
	</script>

</body>

</html>