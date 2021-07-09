<?php
    $file = "form.txt";

    if (file_exists($file)) {
        unlink($file);
    }

    $file = fopen("form.txt", "x");
    fclose($file);
?>
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

		<div class="text-awal3">
			<h1>File Berhasil Dihapus</h1>
            <a href="awal.html" class="button-btn">Kembali</a>
            </form>
            </center>
        </div>
	</section>
</body>
</html>