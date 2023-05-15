<?php 
include_once("dbkonek.php");


$db->query("INSERT INTO jenis_produk Values ('', '$_POST[nama]')");

header("location: kategori.php");
?>