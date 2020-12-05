<?php
include 'assets/conn.php';

$id	= $_GET['id'];


$query = mysql_query("delete FROM customer WHERE id_customer='$id'");
if ($query) {
echo "<script>alert('data berhasil dihapus');
document.location.href='customer.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='customer.php'</script>\n";
}
?>