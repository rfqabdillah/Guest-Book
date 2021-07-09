<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Member</title>
	<link rel="stylesheet" type="text/css" href="form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
		<nav>
			<div class="nav">
				<ul>
					<li><a href="awal.html">Beranda</a></li>
					<li><a href="menu.html">Prak 10</a></li>
					<li><a href="data.php">Lihat Data</a></li>
				</ul>
			</div>
		</nav>

		<div class="text-awal1">
			<h1>Proses Pendaftaran Berhasil</h1>
            <p>Selamat Bergabung!</p>
            <?php
                $fp = fopen("form.txt", "a+");
                $nama = $_POST["nama"];
                $alamat = $_POST["alamat"];
                $telp = $_POST["telp"];
                $email = $_POST["email"];

                fputs($fp, "$nama|$alamat|$telp|$email\n");
                fclose($fp);
            ?>
        </div>
	</section>
</body>
</html>
