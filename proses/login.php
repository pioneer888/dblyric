<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include("../conf.php");

if (empty($username) || empty($password))
	{
		header("location:../index.php?status=Maaf, semua field harus diisi");
	}
else{
$query ="SELECT * FROM member WHERE username = '$username' AND password ='".md5($password)."'";
$hasil = mysql_query($query);
$record = mysql_fetch_array($hasil);

if($record['username'] == ""){
	
	header("location:../index.php?status=blank&query=$query");
	exit();
	}

    $_SESSION['id_member'] = $record['id_member'];
    $_SESSION['username'] = $record['username'];

if($record['username']=="Admin"){

	header ("location:../admin/admin-index.php");	
}
elseif($record['username']){
	
	header ("location:../index.php");
     }
}
?>