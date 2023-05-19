<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Penjualan Toko Kecil & Sederhana by SarahMunabari</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
  background-image: url(img/bg.jpg);
}
.style1 {
	color: #483D8B ;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>

<body>
<div align="center">
<form id="form1" name="form1" method="post" action="proses_transaksi_sarah.php">
<table width="80%" height="100%" border="0" bgcolor="#ADD8E6">
<tr>
<td colspan="3" >
<div align="center" class="style1" >Aplikasi Penjualan Toko Kecil & Sederhana</div></td>
</tr>
<tr>
  <td colspan="3" ><div align="center"><img src="img/toko.png" alt="Aplikasi Penjualan Toko Kecil & Sederhana" width="200" height="150" /></div></td>
  </tr>
<tr>
<td width="239" ><div align="right">Nama Pembeli </div></td>
<td width="10" >&nbsp;</td>
<td width="619" >&nbsp;
<input name="nama_pembeli" type="text" size="50" /></td>
</tr>
<tr>
  <td ><div align="right">Tanggal Beli </div></td>
  <td >&nbsp;</td>
  <td >&nbsp;
 <select name="tgl">
<?php
for($i=1;$i<=31;$i++) {
echo "<option value=".$i.">".$i."</option>";
}
?>
</select>  </td>
</tr>
<tr>
  <td ><div align="right">Jam Beli </div></td>
  <td >&nbsp;</td>
  <td >&nbsp;
  <select name="jam">
<?php
for($i=1;$i<=24;$i++) {
echo "<option value=".$i.">".$i."</option>";
}
?>
</select>   </td>
</tr>
<tr>
<td width="239" ><div align="right">Nama Barang </div></td>
<td width="10" >&nbsp;</td>
<td width="619" >&nbsp;
  <label>
<select name="nama_barang" id="nama_barang">
  <option>Mie Instant</option>
  <option>Air Mineral</option>
  <option>Shampo</option>
  <option>Sabun Mandi</option>
  <option>Gula Pasir</option>
  <option>Obat Nyamuk</option>
  <option>Obat Batuk</option>
  <option>Pasta Gigi</option>
</select>
</label></td>
</tr>
<tr>
<td ><div align="right">Harga</div></td>
<td >&nbsp;</td>
<td >&nbsp;
<select name="harga">
<?php
for($i=1000;$i<=10000;$i+=1000) {
echo "<option value=".$i.">".$i."</option>";
}
?>
</select> </td>
</tr>
<tr>
<td ><div align="right">Quantity</div></td>
<td >&nbsp;</td>
<td >&nbsp;
  <input name="jumlah" type="text" size="4" /></td>
</tr>
<tr>
<td ><div align="right">Status</div></td>
<td >&nbsp;</td>
<td ><p>
<label>
<input type="radio" name="status" value="Members" id="status_0" checked="checked" />
 Pelanggan (20%)</label>
<label>
<input type="radio" name="status" value="Non_Planggan" id="status_1" />
 Bukan pelanggan (10%)</label>
 <label>
<input type="radio" name="status" value="Others" id="status_2" />
 Lainnya (0%)</label>


</p></td>
</tr>
<tr>
<td ><div align="right">Biaya Kirim Antar Kota</div></td>
<td >&nbsp;</td>
<td ><select name="kota">
<option>Jakarta</option>
<option>Bogor</option>
<option>Depok</option>
<option>Tanggerang</option>
<option>Bekasi</option>
</select>
  &nbsp;<em>Jakarta (10rb), Bogor (15rb), Depok (20rb), Tanggerang (25rb), Bekasi (30rb)</em></td>
</tr>
<tr>
  <td height="28" >&nbsp;</td>
  <td >&nbsp;</td>
  <td ><input name="Input1" type="submit" value="Hitung" />
    - 
      <input name="Input2" type="reset" value="Hapus/Ulangi" /></td>
</tr>
</table>

  </tr>
  <table>
<tr>
  <td width="140" rowspan="4" ><div align="center"><img src="img/foto.jpg" alt="SarahMunabari" width="120" height="115" /></div></td>
  <td width="76" height="28" ><strong><em>Nama Mhs </em></strong></td>
  <td width="183" ><strong><em>: Sarah Munabari </em></strong></td>
  </tr>
<tr>
  <td height="28" ><strong><em>NIM</em></strong></td>
  <td ><strong><em>: 1812500815 </em></strong></td>
  </tr>
<tr>
  <td height="28" ><strong><em>No Hp. </em></strong></td>
  <td ><strong><em>: 085891743032 </em></strong></td>
  </tr>
<tr>
  <td height="28" ><strong><em>Email</em></strong></td>
  <td ><strong><em>:sarahmunabari@gmail.com </em></strong></td>
  </tr>
</table>
</form>
</div>
<hr>
    <center>
    <p><strong>CopyRights(c)2023 by sarahmunabari</strong></p>
    </center>
</body>
</html>