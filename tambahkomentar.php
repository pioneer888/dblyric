<?php


include "conf.php";

if(!empty($_GET['id'])){
    $id_lyric = $_GET['id'];
 }
// proses yang dilakukan setelah tombol submit komentar diklik
if(!empty($_POST['act'])){
    if ($_POST['act'] == "submit")
    {
    // membaca data komentar dari form
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $id_lyric = $_GET['id'];
    $tglKomentar = date("Y-m-d");
 
    // proses insert komentar ke database
    $query = "INSERT INTO komentar (id_komentar, id_lyric, id_member, nama, isi, tanggal)
             VALUES ('','$id_lyric', '$_SESSION[id_member]', '$nama', '$komentar', '$tglKomentar')";
    $hasil = mysql_query($query) or die(mysql_error());
}
}
// proses menampilkan detail artikel berdasarkan id artikel
$query = "SELECT * FROM lyric WHERE id_lyric=$id_lyric";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);


// proses menampilkan komentar berdasarkan id artikelnya
 
echo "<h3>Komentar</h3>";
 
$query = "SELECT * FROM komentar WHERE id_lyric = '$id_lyric'";
$hasil = mysql_query($query);
 
if (mysql_num_rows($hasil) > 0)
{
   // jika ada komentar (jumlah data hasil query > 0), maka tampilkan komentarnya
   while ($data = mysql_fetch_array($hasil))
   {
      echo "<p><small>".$data['nama'].", Tanggal: ".$data['tanggal']."</small></p>";
      echo "<p>".$data['isi']."</p><hr>";
   }
}
// jika tidak ada komentar (jumlah data hasil query = 0), tampilkan keterangan belum ada komentar
else if (mysql_num_rows($hasil) == 0) echo "<p>Belum ada komentar.</p>";
 
// menampilkan form pengisian komentar
 
echo "<br><br><h4>Kirim Komentar</h4>";
 
echo "<form method='post' action='".$_SERVER['PHP_SELF']."?id=".$id_lyric."&act=submit'>";
echo "<table>";
if ($id!=="")
echo "<tr><td>Nama </td><td>:</td><td><input type='text' value='$record[username]' readonly='readonly' name='nama'></td></tr>";
else
echo "<tr><td>Nama </td><td>:</td><td><input type='text' name='nama'></td></tr>";
echo "<tr><td>Komentar </td><td>:</td><td><textarea name='komentar'></textarea></td></tr>";
echo "<input type='hidden' name='act' value='submit'>";
echo "<input type='hidden' name='id' value='".$id_lyric."'>";
echo "<tr><td></td><td></td><td><input type='submit' name='submit' value='Submit'></td></tr>";
echo "</table>";
echo "</form>";
 
?>

