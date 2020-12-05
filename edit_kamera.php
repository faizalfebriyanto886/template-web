<html>
<head>
</head>
<body>
<?php 
include 'assets/conn.php';
?>
<table width="700" border="1">
<tr>
<td colspan="2" align="center"><h1>Selamat Datang Di Sistem Sewa Kamera</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="customer.php">Customer</a></li>
<li><a href="Kamera.php">kamera</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<form method="post" action="proses_edit_kamera.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$query = mysql_query ("select * from kamera where kd_kamera=$id");
$data= mysql_fetch_array($query);
?>

<table border="0">
<tr>
<td>Kode Kamera</td>
<td>:</td>
<td><input type="text" name="kode"  value="<?php echo $data['kd_kamera']?>"></td>
</tr>
<tr>
<td>Gambar</td>
<td>:</td>
<td><input type="file" name="gambar"  value="<?php echo $data['gambar']?>"></td>
</tr>
<tr>
<td>Jenis</td>
<td>:</td>
<td><input type="text" name="jenis"  value="<?php echo $data['jenis']?>"></td>
</tr>
<tr>
<td>Merek</td>
<td>:</td>
<td><input type="text" name="merek"  value="<?php echo $data['merek']?>">
</tr>
<tr>
<td>Harga</td>
<td>:</td>
<td><input type="text" name="harga"  value="<?php echo $data['harga']?>">
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="simpan"></td>
</tr>

</table>
</form>
</td>
</tr>
<tr>
<td colspan="2" align="center"><br><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></td>
</tr>
</table>

</body>
</html>