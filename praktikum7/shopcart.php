  <?php
    $filecounter = "counter.txt";
    $fl = fopen($filecounter, "r+");
    $hit = fread($fl, filesize($filecounter));
    fclose($fl);
    $fl = fopen($filecounter, "w+");
    $hit = $hit + 1;
    fwrite($fl, $hit, strlen($hit));
    fclose($fl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopcart.css">
    <script type="text/javascript" src="cart.js"></script>
	<title>Vortex Computer</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<section class="header">
		<nav>
			<div class="nav">
				<ul>
					<li><a href="../menu.html">Beranda</a></li>
					<li><a href="../Prak6/Kalkulator.php">Kalkulator</a></li>
					<li><a href="../praktikum7/shopcart.php">Shopcart</a></li>
				</ul>
			</div>
		</nav>
</section>
<div class="counter">
        <div class="image">
            <img src="img/bar-chart.png" alt="" style="width: 24px; height: 24px;">
        </div>
        <p>Total Page Views</p><br>
        <p class="tot"><?= $hit ?></p>
</div>
	<center><div class="logo"><img src="img/logo.png"></div></center>
	<hr>
	<div>
		<h1 class="shop-chart">&nbsp;Shopping Cart</h1>
	</div>

	<form class="form" name="mform">
		<table border="0">
			<tr class="header">
				<th style="width: 15%;">PICTURE</th>
				<th style="width: 35%;">DESCRIPTION</th>
				<th>PRICE</th>
				<th>QUANTITY</th>
				<th>AMOUNT</th>
			</tr>
			<tr class="isi">
				<td ><div class="gbr"><img src="img/Apple1.jpg" ></div></td>
				<td>Apple Macbook Air 13 2020 MGND3ID - Gold [Apple M1-8GB-SSD 256GB-MacOS]</td>
				<td>IDR &nbsp;<input type="number" name="har1" class="input-har" value="15990000"></td>
				<td><input type="number" class="input-control" name="Apple1"></td>
				<td><input type="text" class="input-control1" id="har-bar1" value="IDR 0" readonly></td>
			</tr>
			<tr class="isi">
				<td><div class="gbr"><img src="img/Asus1.jpg"></div></td>
				<td>Laptop Asus ROG STRIX G G513QC-R535B6T-O - Space Grey [Ryzen 5 5600H-8GB-SSD 512GB-RTX3050]</td>
				<td>IDR &nbsp;<input type="number" name="har2" class="input-har" value="15999000"></td>
				<td><input type="number" class="input-control" name="Asus1"></td>
				<td><input type="text" class="input-control1" id="har-bar2" value="IDR 0" readonly></td>
			</tr>
			<tr class="isi">
				<td><div class="gbr"><img src="img/Asus2.jpg"></div></td>
				<td>Laptop Gaming Asus ROG STRIX G G513QM-R936D6G-O - Space Grey [Ryzen 9 5900H-16GB-SSD 1TB-RTX3060]</td>
				<td>IDR &nbsp;<input type="number" name="har3" class="input-har" value="27999000"></td>
				<td><input type="number" class="input-control" name="Asus2"></td>
				<td><input type="text" class="input-control1" id="har-bar3" value="IDR 0" readonly></td>
			</tr>
			<tr class="isi">
				<td><div class="gbr"><img src="img/Asus4.jpg"></div></td>
				<td>Laptop Gaming Asus TUF FX516PE-I7R5B6T-O - Eclipse Grey [i7 11370H-16GB-SSD 512GB-RTX3050Ti-W10-OHS]</td>
				<td>IDR &nbsp;<input type="number" name="har5" class="input-har" value="19999000"></td>
				<td><input type="number" class="input-control" name="Asus4"></td>
				<td><input type="text" class="input-control1" id="har-bar4" value="IDR 0" readonly></td>
			</tr>
			<tr class="isi">
				<td><div class="gbr"><img src="img/Kingston1.jpg"></div></td>
				<td>Sodimm DDR 4 - 8GB 3200 Kingston</td>
				<td>IDR &nbsp;<input type="number" name="har6" class="input-har" value="765000"></td>
				<td><input type="number" class="input-control" name="Kingston1"></td>
				<td><input type="text" class="input-control1" id="har-bar5" value="IDR 0" readonly></td>
			</tr>
			<tr class="isi">
				<td><div class="gbr"><img src="img/Kingston2.jpg"></div></td>
				<td>RAM PC DDR 4 4GB – 2666 Kingston</td>
				<td>IDR &nbsp;<input type="number" name="har7" class="input-har" value="430000"></td>
				<td><input type="number" class="input-control" name="Kingston2"></td>
				<td><input type="text" class="input-control1" id="har-bar6" value="IDR 0" readonly></td>
			</tr>
			<tr class="isi">
				<td><div class="gbr"><img src="img/JBL1.jpg"></div></td>
				<td>Headset Gaming JBL Quantum 100</td>
				<td>IDR &nbsp;<input type="number" name="har8" class="input-har" value="645000"></td>
				<td><input type="number" class="input-control" name="JBL1"></td>
				<td><input type="text" class="input-control1" id="har-bar7" value="IDR 0" readonly></td>
			</tr>
			<tr class="isi">
				<td><div class="gbr"><img src="img/DA1.jpg"></div></td>
				<td>Headset Gaming Digital Alliance Armor Plus</td>
				<td>IDR &nbsp;<input type="number" name="har9" class="input-har" value="305000"></td>
				<td><input type="number" class="input-control" name="DA1"></td>
				<td><input type="text" class="input-control1" id="har-bar8" value="IDR 0" readonly></td>
			</tr>
			<tr>
                <td colspan="4">Member</td>
                <td><input type="checkbox" name="member" class="input-control2"></td>
            </tr>
            <tr>
                <td colspan="4">Total</td>
                <td><input type="text" class="input-control2" name="total" value="IDR 0" readonly></td>
            </tr>
            <tr>
                <td colspan="4">Member Discount</td>
                <td><input type="text" class="input-control2" name="diskon" value="IDR 0" readonly></td>
            </tr>
            <tr>
                <td colspan="4">Final Cost</td>
                <td><input type="text" class="input-control2" name="jumlah" value="IDR 0" readonly></td>
            </tr>
            <tr>
                <td colspan="5" align="center"><input class="btn" type="button" value="Hitung" onclick="hitungTot()"> <input class="btn1" type="button" value="Reset" onclick="reset()"></td>
            </tr>
		</table>
	</form>
    
	<div class="copyright">
		<p>2021 All Rights Reserved <br> Designed by Rifqi Abdillah | 2000018104</p>
	</div>

</body>
</html>