<?php 
include_once("dbkonek.php");
 $db->query("UPDATE jenis_produk SET nama='$_POST[nama]' WHERE id='$_POST[id]'");
 header("location: kategori.php");
?>





