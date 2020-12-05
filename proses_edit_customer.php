<?php
include 'assets/conn.php';

$nama		= $_POST['nm_customer'];
$alamat		= $_POST['alamat'];
$no_telp	= $_POST['no_telp'];

$query = mysql_query("UPDATE customer SET nm_customer		='$nama',
										  alamat			='$alamat',
										  no_telp			='$no_telp', 
										  where id_customer			='$_GET[id]'");
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='customer.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='customer.php'</script>\n";
}
?>