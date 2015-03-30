<?php

include("../conf.php");
$del= $_POST['del'];

foreach($del as $delete)
{
    $query="DELETE FROM artis WHERE id_artis='$delete'";
    mysql_query($query,$koneksi);
    mysql_query("DELETE FROM album WHERE id_artis='$delete'");   
}

header("Location:../index.php");

?>