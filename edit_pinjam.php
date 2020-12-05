<html>
<head>
</head>
<body>
<?php 
include "koneksi.php";
?>
<table width="700" border="1">
<tr>
<td colspan="2" align="center"><h1>Selamat Datang Di Sistem Perpustakaan</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="customer.php">Customer</a></li>
<li><a href="kamera.php">Kamera</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<form method="post" action="proses_edit_pinjam.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$query = mysql_query ("select * from meminjam where id_pinjam=$id");
$data= mysql_fetch_array($query);
?>

<table border="0">
<tr>
<td>Nama Peminjam</td>
<td>:</td>
<td><?php

$sql_customer="select * from customer order by id_customer";
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
<td>Judul Buku </td>
<td>:</td>
<td><?php

$sql_buku="select * from buku order by kd_buku";
$kueri_buku=mysql_query($sql_buku) or die(mysql_error());
?>
                                            <select name="buku">
                                             <?php
 while (list($kode,$nama_status)=mysql_fetch_array($kueri_buku))
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