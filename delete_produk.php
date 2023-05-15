<?php 
include_once("dbkonek.php");

$db->query("DELETE FROM produk WHERE id='$_GET[id]'");
header("location: produk.php");


?>


