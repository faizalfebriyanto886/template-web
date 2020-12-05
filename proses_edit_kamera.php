<?php
include 'assets/conn.php';

$kode		= $_POST['kode'];
$gambar		= $_POST['gambar'];
$jenis		= $_POST['jenis'];
$merek		= $_POST['merek'];
$harga		= $_POST['harga'];

$query = mysql_query("UPDATE kamera SET 	kd_kamera		='$kode',
									        gambar			='$gambar',
										    jenis			='$jenis',
										    merek			='$merek',
											harga			='$harga' 
											where kd_kamera	='$_GET[id]'");
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='kamera.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='kamera.php'</script>\n";
}
?>