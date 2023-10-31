<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}

		header {
			text-align: center;
			background-color: #007BFF;
			color: #fff;
			padding: 20px;
		}

		h3 {
			margin: 0;
		}

		h1 {
			margin: 10px 0;
		}

		h4 {
			text-align: center;
		}

		nav ul {
			list-style-type: none;
			padding: 0;
		}

		nav ul li {
			margin-right: 20px;
			padding: 20px;
			text-align: center;
		}

		nav a {
			text-decoration: none;
			color: #007BFF;
			font-weight: bold;
		}

		nav a:hover {
			color: #0056b3;
		}

		.status-message {
			text-align: center;
			margin: 20px 0;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
		}
	</style>
</head>

<body>
	<header>
		<h3>Pendaftaran Siswa Baru</h3>
		<h1>SMK Coding</h1>
	</header>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Pendaftar</a></li>
		</ul>
	</nav>

	<?php if(isset($_GET['status'])): ?>
		<div class="status-message">
			<?php
				if($_GET['status'] == 'sukses'){
					echo "Pendaftaran siswa baru berhasil!";
				} else {
					echo "Pendaftaran gagal!";
				}
			?>
		</div>
	<?php endif; ?>
</body>
</html>
