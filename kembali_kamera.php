<?php
include "koneksi.php";

$tgl = date('Y-m-d');

$query = mysql_query("UPDATE meminjam SET tgl_kembali		= '$tgl', kembali = '2'
										
										where id_pinjam	='$_GET[id]'");
if ($query) {
echo "<script>alert('Kamera Sudah Dikembalikan');
document.location.href='pinjam.php'</script>\n";
} else {
echo "<script>alert('gagal');
document.location.href='pinjam.php'</script>\n";
}
?>