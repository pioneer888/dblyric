<?php
$nama_artis		= $_POST['nama_artis'];
$nama_member 	= $_POST['nama_member'];
$nama_album		= $_POST['nama_album'];
$judul 			= $_POST['judul'];
$lyric			= $_POST['lyric'];

include("../conf.php");

//Seleksi field2 yang kosong
if (empty($nama_artis) || empty($nama_member) || empty($nama_album) || empty($judul) || empty($lyric))
	{
		echo "<script> alert('Maaf Semua Field Harus Diisi !!'); location = '../add_lyric.php'; </script>";
	}
else{
//cek nama_artis dan judul yang sama
$query = mysql_fetch_array(mysql_query("SELECT judul FROM lyric WHERE judul='$judul'"));
$query2 = mysql_fetch_array(mysql_query("SELECT id_artis FROM artis WHERE nama='$nama_artis'"));
$query3 = mysql_fetch_array(mysql_query("SELECT id_album FROM album WHERE nama='$nama_album'"));
$query4 = mysql_fetch_array(mysql_query("SELECT id_member FROM member WHERE username='$nama_member'"));

if($query){
	echo "<script> alert('Maaf Judul Tersebut Sudah Ada !!'); location = '../add_lyric.php'; </script>";
	}
	
else if($query2&&$query3)
	{
			$hasil2 = mysql_real_escape_string($lyric);
			$sql = "INSERT INTO lyric (id_artis, id_member, id_album, judul, lyric, album, tanggal) 
					VALUES ('".$query2['id_artis']."', '".$query4['id_member']."', '".$query3['id_album']."', '$judul', '$hasil2', '$nama_album', now())";

			$hasil = mysql_query($sql, $koneksi);

			if($hasil){
			echo "<script> alert('Selamat Lyric Berhasil Di Share.'); location = '../'; </script>";
			}
			else {
				echo "<script> alert('Maaf Data Gagal Disimpan !!'); location = '../add_lyric.php'; </script>";
				}	
	}
else{
	echo "<script> alert('Maaf Nama Artis/Nama Album tidak ada !!'); location = '../add_lyric.php'; </script>";
	}
}
?>