<html>
<head>
	<title>Struk Pembayaran Keluar</title>
  <style>
  @page { margin: 3px; }
  body { margin: 3px}
  </style>
</head>
<body>
	<hr>
	<center>E - Parking Triple Six</center>
	<hr>
	<p style="font-size: 11px;">
		- Kode parkir : <?= $masuk['kode_parkir'] ?><br>
		- Plat : <?= $masuk['plat'] ?><br>
		- Jenis Kendaraan : <?= $masuk['nama_jenis'] ?><br>
		- Waktu Masuk : <?= $masuk['waktu_masuk'] ?><br>
	</p>
	<hr>
	<center style="font-size: 24px; font-weight: bold;">Rp. <?= $masuk['tarif'] ?></center>
</body>
</html>