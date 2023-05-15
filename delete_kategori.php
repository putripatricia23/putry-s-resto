<?php 
include_once("dbkonek.php");

$db->query("DELETE FROM jenis_produk WHERE id='$_GET[id]'");
header("location: kategori.php");


?>


