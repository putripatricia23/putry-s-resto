<?php 
include_once("dbkonek.php");
 $db->query("UPDATE produk SET kode='$_POST[kode]', nama='$_POST[nama]', harga_jual='$_POST[harga_jual]', 
 harga_beli='$_POST[harga_beli]', stok='$_POST[stok]', min_stok='$_POST[min_stok]', 
 deskripsi='$_POST[deskripsi]', jenis_produk_id='$_POST[jenis_produk_id]' WHERE id='$_POST[id]'");
 header("location: produk.php");
?>





