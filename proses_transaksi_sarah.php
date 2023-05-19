<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Penjualan Toko Kecil & Sederhana by SarahMunabari</title>
<style type="text/css">
<!--
body {
	background-image: url(img/bg.jpg);
}
.style1 {
	font-size: 24px;
	color: #FFFF00;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style3 {
	color: #330066;
	font-weight: bold;
}
-->
</style></head>
<body>

<?php 
$nama_pembeli = $_POST['nama_pembeli'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];
$kota = $_POST['kota'];


//menghitung subtotal
$subtotal = $harga * $jumlah ;

//menghitung diskon berdasarkan status (pelanggan atau bukan pelanggan).
//Keterangan :
//jika statusnya pelanggan akan mendapat diskon 10%.
//jika statusnya bukan pelanggan maka tidak mendapat diskon. Jadi:

switch ($status){
 case "Members": 
  $diskon = $subtotal * 0.2;
 break; 
  case "Non_Planggan": 
  $diskon = $subtotal * 0.1;
 break; 
 default: 
  $diskon = 0; 
 }

//menghitung ongkos kirim berdasarkan kota tujuan
if($kota == "Jakarta" ){
 $ongkos = 10000;
 }
else if($kota == "Bogor" ){
 $ongkos = 15000;
 }
else if($kota == "Depok" ){
 $ongkos = 20000;
 }
 else if($kota == "Tanggerang" ){
 $ongkos = 25000;
 }
 else {
 $ongkos = 30000;
 }
//menghitung total keseluruhan
$subtotal_2 = $subtotal - $diskon;
$pajak = $subtotal_2 * 0.1;
$subtotal_3 = $subtotal_2 + $pajak;
$total = $subtotal_3 + $ongkos;
?>

<div align="center">
<table width="650" border="0" bgcolor="#ADD8E6">
<tr>
<td height="57" colspan="2">
<div align="center" class="putih style1">
  <p class="style3">HASIL PERHITUNGAN</p>
<hr />
</div></td>
</tr>
<tr>
<td width="345" ><div align="right">Nama Pembeli</div></td>
<td width="295" ><strong>:</strong> <?php echo "$nama_pembeli"; ?></td>
</tr>
<tr>
<td ><div align="right">Nama Barang</div></td>
<td width="295" ><strong>:</strong>
<?php echo "$nama_barang"; ?></td>
</tr>
<tr>
<td ><div align="right">Harga</div></td>
<td ><strong>:</strong>
<?php echo "Rp. ".number_format($harga); ?></td>
</tr>
<tr>
<td ><div align="right">Quantity</div></td>
<td ><strong>:</strong>
<?php echo "$jumlah"; ?></td>
</tr>
<tr>
<td ><div align="right">SubTotal (1)</div></td>
<td ><strong>:</strong>
<?php echo "Rp. ".number_format($subtotal); ?> <em>(Quantity x Harga) </em></td>
</tr>
<tr>
<td ><div align="right">Status</div></td>
<td ><strong>:</strong>
<?php echo "$status"; ?> </td>
</tr>
<tr>
<td ><div align="right">Diskon </div></td>
<td valign="top" ><strong>:</strong> <?php echo "Rp. ".number_format($diskon); ?></td>
</tr>
<tr>
  <td ><div align="right"><em>(Pelanggan 20%, Non Planggan 10%, Lainnya 0%)</em></div></td>
  <td >&nbsp;</td>
</tr>
<tr>
  <td ><div align="right">SubTotal (2) </div></td>
  <td ><strong> : </strong><?php echo "Rp. ".number_format($subtotal_2); ?> <em>(SubTotal1 - Disc.)</em></td>
</tr>
<tr>
  <td ><div align="right">Pajak 10% </div></td>
  <td ><strong> : </strong><?php echo "Rp. ".number_format($pajak); ?> </td>
</tr>
<tr>
  <td ><div align="right">SubTotal (3) </div></td>
  <td ><strong>:  </strong><?php echo "Rp. ".number_format($subtotal_3); ?> <em>(SubTotal2+ Pajak)</em></td>
</tr>
<tr>
<td ><div align="right">Biaya/Ongkos Kirim Antar Kota</div></td>
<td ><strong>:</strong>
<?php echo "Rp. ".number_format($ongkos)?> 
<?php echo " ( $kota )";?></td>
</tr>
<tr>
<td >
  <div align="right" class="style2">Grand Total</div></td>
<td ><strong>:</strong>&nbsp;<?php echo "Rp. ".number_format($total); ?></td>
</tr>
</table>
<br>
<a href="toko_sarah.php"> <img src="img/back.png" width="100" height="70" border="0" /><br />
&lt;&lt; Kembali ke Menu Utama</a>
<hr />
<img src="img/shopping.gif" width="500" height="200" /></div>
</body>
</html>