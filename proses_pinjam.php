<?php
include 'assets/conn.php';

$customer	= $_POST['customer'];
$kamera		= $_POST['kamera'];


$query = mysql_query('insert into meminjam(tgl_pinjam,jumlah_pinjam,tgl_kembali,id_customer,kd_kamera,kembali) values ("'.date('Y-m-d').'",1,"'.$tgl_kembali.'","'.$customer.'","'.$kamera.'",1)');
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='pinjam.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='pinjam.php'</script>\n";
}
?>