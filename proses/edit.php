<?php
$judul		= $_POST['judul'];
$isiori        = $_POST['lyric'];

include("../conf.php");

$query1 = mysql_query("SELECT * FROM lyric WHERE judul = '$judul' ");
$query = mysql_fetch_array($query1);
$isi = mysql_real_escape_string($isiori);


if($isiori == $query['lyric'])
{
    echo "<script> alert('Maaf Lyric Tidak ada yang dirubah.'); location = '../view.php?id=$query[id_lyric]'; </script>";
}

else
{
    $nama = mysql_query("UPDATE lyric SET lyric='$isi' WHERE id_lyric=".$query['id_lyric']);
    header("location:../view.php?id=$query[id_lyric]");
}

?>
