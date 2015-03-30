<?php

include("../conf.php");

if(isset($_GET['id_del'])){
mysql_query("DELETE FROM request WHERE id_req=$_GET[id_del]") or die(mysql_error());
header("Location:../index.php");
}
/*elseif(isset($_GET['delete_coment'])){
mysql_query("DELETE FROM tabel_komentar WHERE id_komentar=$_GET[delete_coment]") or die(mysql_error());
$id = mysql_fetch_array(mysql_query("SELECT id_posting FROM tabel_komentar WHERE id_komentar=$_GET[delete_coment]"));
header("Location:../view.php?id_posting=$_GET[delete_posting]");
}*/

echo "<script> alert('Sukses Menghapus !')";

?>