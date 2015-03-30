<?php
$judul		= $_POST['judul'];
$nama		= $_POST['nama'];
$isi 		= $_POST['isi'];

include("../conf.php");

//Seleksi field2 yang kosong
if (empty($nama) || empty($isi) || empty($judul))
	{
		header("location:../req_form.php?status=Maaf, Semua field harus di isi.");
	}
else{

$sql = "INSERT INTO request (nama, judul, isi, tanggal) VALUES ('$nama', '$judul', '$isi', now())";

$hasil = mysql_query($sql, $koneksi) or die(mysql_error());

if($hasil){
echo "<script> alert('Post Berhasil !!.'); location = '../req_lyric.php'; </script>";
}
else {
	echo "Data gagal disimpan <br>";
	}	

}
?>