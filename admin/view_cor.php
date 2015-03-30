<?php
session_start();
if(!isset($_SESSION['id_member'])){
    echo "<script> alert('Silahkan Login Terlebih Dahulu.'); location = 'index.php'; </script>";
    }
if(isset($_SESSION['id_member'])){
    $id = $_SESSION['id_member'];
}

include "../conf.php";

    $id_lyric = $_GET['id_lyric'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Open Lyric - Add Lyric</title>
<meta name="keywords" content="station shop, contact page, maps, free templates, website templates, CSS, HTML" />
<meta name="description" content="Station Shop, Contact Page, free CSS template provided by templatemo.com" />
<link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="../css/ddsmoothmenu.css" />

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
    mainmenuid: "top_nav", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="../css/jquery.dualSlider.0.2.css" />

<script src="../js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="../js/jquery.timers-1.2.js" type="text/javascript"></script>

</head>

<body>

<div id="templatemo_wrapper">
    <div id="templatemo_header">
    
        <div id="site_title">
            <h1><a href="../index.php">Open Lyrics</a></h1>
        </div>
        <br/>
        
        <?php 
        $query="SELECT * FROM member WHERE id_member='$id'";
        $hasil = mysql_query($query, $koneksi);
        $record = mysql_fetch_array($hasil);
        ?>
        
        <div id="header_right">
            
      <div id="loginContainer"> <span>Selamat Datang 
        <?php echo $record['username'] ?>
        || </span> <span><a href="../proses/logout.php">Logout</a> 
        <div style="clear:both"></div>
      </div>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
        <div id="top_nav" class="ddsmoothmenu">
            <ul>
                
        <li><a href="../index.php" class="selected">Home</a></li>
                
        <li><a href="../add_lyric.php">Tambah lyric</a></li>
                
        <li><a href="../req_lyric.php">Request Lyric</a></li>
                
        <li><a href="../corect_lyric.php">Koreksi Lyric</a></li>
                
        <li><a href="../artis.php">List Artis</a></li>
                <?php if ($id == 1) {  ?>
                
        <li><a href="#">Menu Admin</a> 
          <ul>
            <li><a href="add_artis.php">Tambah Artis</a></li>
            <li><a href="add_album.php">Tambah Album</a></li>
            <li><a href="cor.php">Correct Lyric</a></li>
            <li><a href="member.php">List Members</a></li>
            <li><a href="list_lyric.php">List Lyric</a></li>
            <li><a href="list_artis.php">List Artis</a></li>
          </ul>
        </li>
                <?php }  ?>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
            <div id="templatemo_search">
                <form action="../search.php" method="POST">
                  <input type="text" value="Search" name="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" Search " class="sub_btn"  />
                </form>
            </div>
            <div class="cleaner"></div>
        </div>
    </div> <!-- END of templatemo_menu -->
    
    <div id="templatemo_main">
        <div id="sidebar" class="float_l">
            
      <div class="sidebar_box"><span class="bottom"></span> 
        <h3>Most Viewed</h3>
        <div class="content"> 
          <ul class="sidebar_list">
            <?php
                        $sql = "SELECT * FROM lyric ORDER by views DESC LIMIT 15";
                        $hasil=mysql_query($sql,$koneksi);
                        while($rows = mysql_fetch_array($hasil)){ 
                        $singer = mysql_fetch_array(mysql_query("SELECT nama FROM artis WHERE id_artis='".$rows['id_artis']."'"));
                        ?>
            <li><a href="../view.php?id=<?php echo $rows['id_lyric'] ?>">
              <?php echo $singer['nama'] ." - ". $rows['judul'] ?>
              </a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
            
      <div class="sidebar_box"><span class="bottom"></span> 
        <h3>Chart Song</h3>
        <div class="content"> 
          <div class="bs_box"> 
            <?php
                        $sql = "SELECT * FROM lyric ORDER by tanggal DESC LIMIT 5";
                        $hasil=mysql_query($sql,$koneksi);
                        while($rows = mysql_fetch_array($hasil)){ 
                        $singer = mysql_fetch_array(mysql_query("SELECT nama FROM artis WHERE id_artis='".$rows['id_artis']."'"));
                        ?>
            <!--<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 01" /></a>-->
            <h4><a href="../view.php?id=<?php echo $rows['id_lyric'] ?>">
              <?php echo $singer['nama'] ?>
            </h4>
            <p class="price">
              <?php echo $rows['judul'] ?>
            </p></a>
            <div class="cleaner"></div>
            <?php } ?>
          </div>
        </div>
      </div>
        </div>
        <div id="content" class="float_r">
            <?php
            $lyric = mysql_fetch_array(mysql_query("SELECT * FROM lyric WHERE id_lyric=$id_lyric"));
            $singer = mysql_fetch_array(mysql_query("SELECT nama FROM artis WHERE id_artis=".$lyric['id_artis']));
            $user = mysql_fetch_array(mysql_query("SELECT username FROM member WHERE id_member=".$lyric['id_member'])); 
            $cor = mysql_fetch_array(mysql_query("SELECT * FROM correct WHERE id_lyric=$id_lyric"));        
            ?>
            <h1><a href='profil.php?id=<?php echo $lyric['id_artis']?>'>
                            <?php echo  $singer['nama']. "</a> - " .$lyric['judul']; ?></h1>
            <div class="float_l">
                <font face="verdana" size="1" color="#666666">
                    Posted By: <?php echo $user['username']; ?><br><br>
                </font>

                <font color="black">
                <pre><?php echo $lyric['lyric']; ?></br></pre>
                </font>
           
            -------------------------------------------------------------------------------------------------------------------------------------------------------------------
            </div>
            <div class="float_l">
                <font face="verdana" size="5" color="black">
                <?php echo "New Lyric"; ?>
                </font>
                
                <font color="black"><br /><br />
                <pre><?php echo $cor['lyric']; ?></pre>
                </font>
            <a href="../proses/delete.php?del=<?php echo $id_lyric ?>"><input type="submit" value="Delete" class="submit_btn float_r"/></a>
            <a href="../proses/accept_cor.php?ac=<?php echo $id_lyric ?>"><input type="submit" value="accept" class="submit_btn float_r"/></a>
            </div>
                        
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
        

Copyright© 2099 <a href="https://www.facebook.com/prastyo.adi.108">Achmad Sayyid</a> | 2015 By Sistem Informasi ITS. All Rights Reserved
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</body>
</html>