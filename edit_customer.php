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
<li><a href="Kamera.php">Kamera</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<form method="post" action="proses_edit_customer.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$query = mysql_query ("select * from customer where id_customer=$id");
$data= mysql_fetch_array($query);
?>

<table border="0">
<tr>
<td>nama customer</td>
<td>:</td>
<td><input type="text" name="nm_customer"  value="<?php echo $data['nm_customer']?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><textarea name="alamat"  ><?php echo $data['alamat']?></textarea></td>
</tr>
<tr>
<td>no_telp</td>
<td>:</td>
<td><textarea name="no_telp"  ><?php echo $data['no_telp']?></textarea></td>
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