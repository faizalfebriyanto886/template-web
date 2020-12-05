<?php
include 'assets/conn.php';

$nama	= $_POST['nama'];
$alamat	= $_POST['alamat'];
$no_telp= $_POST['no_telp'];

$query = mysql_query('insert into customer(nm_customer,alamat,no_telp) values ("'.$nama.'","'.$alamat.'","'.$no_telp.'")');
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='kamera.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='input_kamera.php'</script>\n";
}
?>