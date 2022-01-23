<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<title>UAS PEMROGRAMAN WEB</title>
	<style type="text/css">
		p{
			font-family: pink;
			line-height: 1.75em;
			font-size: 18px;
			background-color: whitesmoke;
		}
	</style>

</head>
<body>
	<form action="outputUAS1.php" method="POST">
	<p>**Pemesanan Tiket Maskapai**</p>
	<p>======================</p>
<pre>
Nama Pemesanan : <input type="text" name="nama"><br>
Jumlah Tiket   : <input type="text" name="jumlah"><br>
Kelas          : <select name="kelas">
	<option value="Ekonomi (Air Mineral)">Ekonomi</option>
	<option value="Bisnis (Snack)">Bisnis</option>
	<option value="Eksekutif (Makan)">Eksekutif</option>
</select><br>
Tujuan         : <select name="tujuan">
	<option value="Bali">Bali</option>
	<option value="Semarang">Semarang</option>
	<option value="Tangerang">Tangerang</option>
</select><br>
Bagasi         : <input type="radio" name="kg" value="5kg">5kg  <input type="radio" name="kg" value="10kg">10kg  <input type="radio" name="kg" value="15kg">15kg
<br>
Asuransi       : <input type="checkbox" name="asuransi" value="asuransi kejiwaan">Asuransi Jiwa
                 <input type="checkbox" name="asuransi" value="asuransi kecelakaan">Asuransi Kecelakaan
                 <input type="checkbox" name="asuransi" value="asuransi keterlambatan">Asuransi Keterlambatan
<input type="submit" value="Simpan"> <input type="reset" value="Batal"> 
</pre>


</body>
</html>