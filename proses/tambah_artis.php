<?php
$nama			= $_POST['nama'];
$tanggal 		= $_POST['tanggal'];
$tempat			= $_POST['tempat'];
$genre			= $_POST['genre'];

include("../conf.php");

//Seleksi field2 yang kosong
if (empty($nama) || empty($tanggal) || empty($tempat) || empty($genre))
	{
		echo "<script> alert('Maaf Semua Field Harus Diisi !!'); location = '../admin/add_artis.php'; </script>";
	}
else{
//cek nama yang sama
$query = mysql_fetch_array(mysql_query("SELECT nama FROM artis WHERE nama='$nama'"));

if($query){
	echo "<script> alert('Maaf Nama Telah Di Gunakan !!'); location = '../admin/add_artis.php'; </script>";
	}
	
else{

	$sql = "INSERT INTO artis (nama, tahun, tempat_lahir, genre) VALUES ('$nama', '$tanggal', '$tempat' , '$genre')";

	$hasil = mysql_query($sql, $koneksi) or die(mysql_error());

	if($hasil){
	echo "<script> alert('Selamat. Data Artis Sukses Di Simpan.'); location = '../'; </script>";
	}
	else {
		echo "<script> alert('Maaf Data Gagal Disimpan !!'); location = '../admin/add_artis.php'; </script>";
		}
}
}
?>