<?php
$username		= $_POST['username'];
$password 		= $_POST['password'];
$email			= $_POST['email'];

include("../conf.php");

//Seleksi field2 yang kosong
if (empty($username) || empty($password) || empty($email))
	{
		header("location:../register.php?status=Maaf, Semua field harus di isi.");
	}
else{
//cek username yang sama
$query = mysql_fetch_array(mysql_query("SELECT username FROM member WHERE username='$username'"));

if($query){
	header("location:../register.php?status=Maaf, Username telah digunakan");
	}
	
else{

$sql = "INSERT INTO member (username, password, email, tanggal) VALUES ('$username', md5('$password'), '$email' , now())";

$hasil = mysql_query($sql, $koneksi) or die(mysql_error());

if($hasil){
echo "<script> alert('Selamat. Anda telah terdaftar di forum ini. Silahkan login dengan username dan password Anda.'); location = '../'; </script>";
}
else {
	echo "Data gagal disimpan <br>";
	}	
}
}
?>