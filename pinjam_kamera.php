<html>
<head>
</head>
<body>
<table width="700" border="1">
<tr>
<td colspan="2" align="center"><h1>Selamat Datang Di Sistem Sewa kamera</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="Customer.php">Customer</a></li>
<li><a href="Kamera.php">Kamera</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<?php include 'assets/conn.php';?>
<form method="post" action="proses_pinjam.php" >
<table border="0">
<tr>
<td>Nama Peminjam</td>
<td>:</td>
<td><?php

$sql_customer="select * from Customer order by id_customer";
$kueri_customer=mysql_query($sql_customer) or die(mysql_error());
?>
                                            <select name="customer">
                                             <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_customer))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  } 
?>
                                            </select></td>
</tr>
<tr>
<td>merek </td>
<td>:</td>
<td><?php

$sql_kamera="select * from kamera order by kd_kamera";
$kueri_kamera=mysql_query($sql_kamera) or die(mysql_error());
?>
                                            <select name="Kamera">
                                             <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_kamera))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  }
?>
                                            </select><td>
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