<?php
include 'assets/conn.php';

$kode		= $_POST['kode'];
$gambar		= $_POST['gambar'];
$jenis  	= $_POST['jenis'];
$merek 		= $_POST['merek'];
$harga  	= $_POST['harga'];


$query = mysql_query('insert into kamera(kd_kamera,gambar,jenis,merek,harga) values ("'.$kode.'","'.$gambar.'","'.$jenis.'","'.$merek.'","'.$harga.'")');
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='kamera.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='input_kamera.php'</script>\n";
}
?>