<?php

include("../conf.php");
$del= $_POST['del'];

if ($del !== 1){
foreach($del as $delete)
{
    $query="DELETE FROM member WHERE id_member = '$delete'";
    mysql_query($query,$koneksi);   
}
}
header("Location:../index.php");

?>