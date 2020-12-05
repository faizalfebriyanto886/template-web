<?php
include 'assets/conn.php';


$customer	= $_POST['customer'];
$kamera		= $_POST['kamera'];
$tgl = date('Y-m-d');

$query = mysql_query("UPDATE meminjam SET tgl_pinjam		='$tgl',
										id_customer			='$customer',
										kd_kamera				='$kamera'
										where id_pinjam	='$_GET[id]'");
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='pinjam.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='pinjam.php'</script>\n";
}
?>