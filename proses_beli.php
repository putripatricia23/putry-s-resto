<?php 
include_once("dbkonek.php");


$db->query("INSERT INTO pesanan Values ('', '$_POST[tanggal]', '$_POST[nama_pemesan]', '$_POST[alamat_pemesan]', '$_POST[no_hp]', '$_POST[email]', 
'$_POST[jumlah_pesanan]', '$_POST[deskripsi]', '$_POST[produk_id]')");

header("location: invoice.php");
?>