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
					<li><a href="index.php">Beranda</a></li>
					<li><a href="menu.html">Prak 10</a></li>
					<li><a href="data.php">Lihat Data</a></li>
				</ul>
			</div>
		</nav>

		<div class="text-awal">
			<h1>Form Pendaftaran Member</h1>
            <p>Silahkan isi data dengan tepat!</p>
                <form name="form1" action="proses.php" method="post">
                <center><table >
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input name="nama" id="nama" type="text" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input name="alamat" id="alamat" type="text"></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td><input name="telp" id="telp" type="text" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input name="email" id="email" type="text" ></td>
                    </tr>
                </table>
                <input type="submit" value="Kirim" class="button-btn" >
                <input type="reset" value="Reset" class="button1-btn" >
            </form>
            </center>
        </div>
	</section>
</body>
</html>
