<?php

include("conf.php");

$update = mysql_query("SELECT * FROM correct WHERE id_lyric=$_GET[ac] ");
$query = mysql_fetch_array($update);
$isi = mysql_real_escape_string($query['lyric']);

if(isset($_GET['ac'])){
$nama=mysql_query("UPDATE lyric SET lyric='$isi' WHERE id_lyric=$_GET[ac]") or die(mysql_error());
mysql_query("DELETE FROM correct WHERE id_lyric=$_GET[ac]") or die(mysql_error());
header("Location:index.php");
}
/*elseif(isset($_GET['delete_coment'])){
mysql_query("DELETE FROM tabel_komentar WHERE id_komentar=$_GET[delete_coment]") or die(mysql_error());
$id = mysql_fetch_array(mysql_query("SELECT id_posting FROM tabel_komentar WHERE id_komentar=$_GET[delete_coment]"));
header("Location:../view.php?id_posting=$_GET[delete_posting]");
}*/

echo "<script> alert('Sukses Update !')";

?>