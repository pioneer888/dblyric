<?php 
session_start();
session_destroy();
print "<script>alert('Logout berhasil'); location = 'index.php'; </script>";

?>