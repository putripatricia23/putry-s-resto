<?php 
include_once("dbkonek.php");


$db->query("INSERT INTO produk Values ('', '$_POST[kode]', '$_POST[nama]', '$_POST[harga_jual]', '$_POST[harga_beli]', '$_POST[stok]', 
'$_POST[min_stok]', '$_POST[deskripsi]', '$_POST[jenis_produk_id]')");

header("location: produk.php");
?> 