<?php
$nama_artis		= $_POST['nama_artis'];
$nama 			= $_POST['nama'];
$tahun			= $_POST['tahun'];

include("../conf.php");

//Seleksi field2 yang kosong
if (empty($nama_artis) || empty($nama) || empty($tahun))
	{
		echo "<script> alert('Maaf Semua Field Harus Diisi !!'); location = '../admin/add_album.php'; </script>";
	}
else{
//cek nama yang sama
$query = mysql_fetch_array(mysql_query("SELECT nama FROM artis WHERE nama='$nama_artis'"));
$query2 = mysql_fetch_array(mysql_query("SELECT id_artis FROM artis WHERE nama='$nama_artis'"));

if($query){
	
	$sql = "INSERT INTO album (id_artis, nama, tahun) VALUES ('".$query2['id_artis']."', '$nama', '$tahun')";

	$hasil = mysql_query($sql, $koneksi) or die(mysql_error());

	if($hasil){
	echo "<script> alert('Selamat. Data Artis Sukses Di Simpan.'); location = '../'; </script>";
	}
	else {
		echo "<script> alert('Maaf Data Gagal Disimpan !!'); location = '../admin/add_album.php'; </script>";
	}	

}
	
else{

	echo "<script> alert('Maaf Nama Artis Tidak Ada !!'); location = '../admin/add_album.php'; </script>";
	
}
}
?>