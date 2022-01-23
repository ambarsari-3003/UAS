<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output UAS</title>
</head>
<body>
		<p>***Data Pemesanan Tiket***</p>
<?php
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$kelas=$_POST['kelas'];
$tujuan=$_POST['tujuan'];
$bagasi=$_POST['kg'];
$asuransi=$_POST['asuransi'];

?>
<?php
if ($kelas=="Ekonomi (Air Mineral)") {
	$a=1000000;
}
else if ($kelas=="Bisnis (Snack)") {
	$a=2000000;
}
else if ($kelas=="Eksekutif (Makan)") {
	$a=3000000;
}

if ($bagasi=="5kg") {
    $b=100000;
}
else if ($bagasi=="10kg") {
	$b=150000;
}
else if ($bagasi=="15kg") {
	$b=200000;
}

if ($asuransi=="asuransi kejiwaan") {
	$as=50000;
}
else if ($asuransi=="asuransi kecelakaan") {
	$as=50000;
}
else if ($asuransi=="asuransi keterlambatan") {
	$as=50000;
}

if($jumlah>=3) {
	$d=$jumlah*3/100;
}
else {
	$d=0;
}

$total=$a*$jumlah+$b;

?>

<pre><table>
	<tr>	
<td>Nama Pemesanan : <?php echo $nama;?><br>
Jumlah         : <?php echo $jumlah;?><br>
Kelas          : <?php echo $kelas;?><br>
Tujuan         : <?php echo $tujuan;?><br>
Bagasi         : <?php echo $bagasi;?><br>
Asuransi       : <?php echo $asuransi;?><br>
Total          : <?php echo $total;?><br></td></tr>
</table>
<a href="UAS1.php"></a>
</body>
</html>