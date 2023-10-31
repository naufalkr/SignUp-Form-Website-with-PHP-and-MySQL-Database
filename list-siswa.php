<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}

		header {
			text-align: center;
			background-color: #007BFF;
			color: #fff;
			padding: 10px;
		}

		nav {
			text-align: center;
			margin-top: 10px;
		}

		table {
			width: 80%;
			margin: 0 auto;
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		table, th, td {
			border: 1px solid #ccc;
		}

		th, td {
			padding: 10px;
			text-align: center;
		}

		th {
			background-color: #007BFF;
			color: #fff;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		a {
			text-decoration: none;
			color: #007BFF;
		}

		a:hover {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>

	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah Asal</th>
				<th>Tindakan</th> <!-- Kolom Tindakan ditempatkan dengan benar -->
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM calon_siswa";
			$query = mysqli_query($db, $sql);

			$counter = 1;
			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";

				echo "<td>".$counter."</td>";
				echo "<td>".$siswa['nama']."</td>";
				echo "<td>".$siswa['alamat']."</td>";
				echo "<td>".$siswa['jenis_kelamin']."</td>";
				echo "<td>".$siswa['agama']."</td>";
				echo "<td>".$siswa['sekolah_asal']."</td>";

				echo "<td>";
				echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
				echo "</td>";

				echo "</tr>";

				$counter++;
			}
			?>

		</tbody>
	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
