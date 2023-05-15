<?php 
include_once("dbkonek.php");

$db->query("DELETE FROM pesanan WHERE id='$_GET[id]'");
header("location: pesanan.php");


?>


