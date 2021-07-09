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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="calculator.css">
</head>
<body>

<div class="counter">
        <div class="image">
            <img src="bar-chart.png" alt="" style="width: 24px; height: 24px;">
        </div>
        <p>Total Page Views</p><br>
        <p class="tot"><?= $hit ?></p>
</div>
<div class="menu">
  <a href="../menu.html">Beranda</a>
  <a href="#">Kalkulator</a>
  <a href="../praktikum7/shopcart.php">Shopcart</a>
</div>
<section>
  <div class="container">
    <div class="calculator">
      <div class="display">
        <div class="display-1">0</div>
        <div class="display-2">0</div>
        <div class="temp-result"></div>
      </div>
      <div class="all_button">
        <div class="button all-clear">C</div>
        <div class="button last-entity-clear">CE</div>
        <div class="button operation">Mod</div>
        <div class="button operation">÷</div>
        <div class="button number">7</div>
        <div class="button number">8</div>
        <div class="button number">9</div>
        <div class="button operation">x</div>
        <div class="button number">4</div>
        <div class="button number">5</div>
        <div class="button number">6</div>
        <div class="button operation">-</div>
        <div class="button number">1</div>
        <div class="button number">2</div>
        <div class="button number">3</div>
        <div class="button operation">+</div>
        <div class="button btn-0 number">0</div>
        <div class="button number dot">.</div>
        <div class="button equal">=</div>
      </div>
    </div>
  </div>
</section>
	<div class="copyright">
		<p>2021 All Rights Reserved | Designed by Rifqi Abdillah<br>Inspired By Samsung Calculator </p>
	</div>
<script type="text/javascript" src="calculator.js"></script>
</body>
</html>