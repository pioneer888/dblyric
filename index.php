<?php
session_start();
if(!isset($_SESSION['id_member'])){
    $id = "";
    }
if(isset($_SESSION['id_member'])){
    $id = $_SESSION['id_member'];
}

include "conf.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OPEN LYRIC</title>
<meta name="keywords" content="lyric, song, artist, album,theme, free template, templatemo, CSS, HTML" />
<meta name="description" content="website untuk mencari lyric lagu" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/login.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

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

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>

</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
        	<h1><a href="index.php">Open Lyrics</a></h1>
        </div>
        <br/>
        
        <?php 
        $query="SELECT * FROM member WHERE id_member='$id'";
        $hasil = mysql_query($query, $koneksi);
        $record = mysql_fetch_array($hasil);
        if ($id !== "") {  
        ?>
        
        <div id="header_right">
	        <div id="loginContainer">
                <span>Selamat Datang <?php echo $record['username'] ?> || </span>
                <span><a href="proses/logout.php">Logout</a>
                <div style="clear:both"></div>
            </div>
		</div>
        
        <?php } 
        else { ?>
        
        <div id="header_right">
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm" name="form" method="post" action="proses/login.php">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Username</label>
                                <input type="text" name="username" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" />
                            </fieldset>
                            <input type="submit" id="login" value="Login" />
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="register.php">Register</a></span>
                    </form>
                </div>
            </div>
        </div>
        
        <?php } ?>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="add_lyric.php">Tambah lyric</a></li>
                <li><a href="req_lyric.php">Request Lyric</a></li>
                <li><a href="corect_lyric.php">Koreksi Lyric</a></li>
                <li><a href="artis.php">List Artis</a></li>
                <?php if ($id == 1) {  ?>
                <li><a href="#">Menu Admin</a>
                    <ul>
                        <li><a href="admin/add_artis.php">Tambah Artis</a></li>
                        <li><a href="admin/add_album.php">Tambah Album</a></li>
                        <li><a href="admin/cor.php">Correct Lyric</a></li>
                        <li><a href="admin/member.php">List Members</a></li>
                        <li><a href="admin/list_lyric.php">List Lyric</a></li>
                        <li><a href="admin/list_artis.php">List Artis</a></li>
                    </ul>
                </li>
                <?php }  ?>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<div id="templatemo_search">
                <form action="search.php" method="POST">
                  <input type="text" value="Search" name="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" Search " class="sub_btn"  />
                </form>
            </div>
            <div class="cleaner"></div>
    	</div>
    </div> <!-- END of templatemo_menu -->
    
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2><a href="#">JKT48</a></h2>
                            <p>Setelah meluncurkan album perdananya Heavy Rotation, sister group AKB48 yang memiliki home base di Jepang itu melakukan terobosan di single terbarunya, River. Idol group yang selalu tampil girly dan imut itu berubah menjadi ‘galak’</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Taylor Swift</a></h2>
                            <p>sukses mengantongi delapan piala dalam ajang musik bergengsi Billboard Music Award 2013 yang diselenggarakan di Las Vegas pada Minggu, 19 Mei 2013 waktu setempat.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">One Direction</a></h2>
                            <p>Mengumumkan Jadwal World Tour 2014. Tur yang rencananya akan diadakan di berbagai stadion besar ini akan diadakan di Amerika Selatan termasuk Brasil, Peru, Columbia, Argentina.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->
	
			<div class="backgrounds">
				
				<div class="item item_1">
					<img src="images/slider/02.jpg" alt="Slider 01" />
				</div><!-- /item -->
				
				<div class="item item_2">
					<img src="images/slider/03.jpg" alt="Slider 02" />
				</div><!-- /item -->
				
				<div class="item item_3">
					<img src="images/slider/01.jpg" alt="Slider 03" />
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div> <!-- END of templatemo_middle -->
    
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

                        <li><a href="view.php?id=<?php echo $rows['id_lyric'] ?>"><?php echo $singer['nama'] ." - ". $rows['judul'] ?></a></li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>Recent Post</h3>   
                <div class="content"> 
                	<div class="bs_box">
                        <?php
                        $sql = "SELECT * FROM lyric ORDER by tanggal DESC LIMIT 5";
                        $hasil=mysql_query($sql,$koneksi);
                        while($rows = mysql_fetch_array($hasil)){ 
                        $singer = mysql_fetch_array(mysql_query("SELECT nama FROM artis WHERE id_artis='".$rows['id_artis']."'"));
                        ?>
                        <!--<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 01" /></a>-->
                        <h4><a href="view.php?id=<?php echo $rows['id_lyric'] ?>"><?php echo $singer['nama'] ?></h4>
                        <p class="price"><?php echo $rows['judul'] ?></p></a>
                        <div class="cleaner"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
        	<h1>New Album</h1>
            <div class="product_box">
            	<a href="productdetail.html"><img src="images/product/a.jpg" alt="Image 01" /></a>
                <h3>One direction</h3>
                <p class="product_price">Take Me Home</p>
                <a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="onedirectionalbum.php" class="detail">Profile</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="images/product/b.jpg" alt="Image 02" /></a>
                <h3>2PM</h3>
                <p class="product_price">Grown</p>
                <a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="shoppingchart.html" class="detail">Profile</a>
            </div>        	
            <div class="product_box no_margin_right">
            	<a href="productdetail.html"><img src="images/product/c.jpg" alt="Image 03" /></a>
                <h3>Bruno Mars</h3>
                <p class="product_price">Unorthodox Jukebox</p>
                <a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="shoppingchart.html" class="detail">Profile</a>
            </div>        	
            <div class="product_box">
            	<a href="demilagu.php"><img src="images/product/d.jpg" alt="Image 04" /></a>
                <h3>Demi Lovato</h3>
                <p class="product_price">DEMI</p>
                <a href="demilagu.php" class="add_to_card">Album Detail</a>
                <a href="demialbum.php" class="detail">Profile</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="images/product/e.jpg" alt="Image 05" /></a>
                <h3>Justin Timberlake</h3>
                <p class="product_price">The 20/20 Experience</p>
                <a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="shoppingchart.html" class="detail">Profile</a>
            </div>        	
            <div class="product_box no_margin_right">
            	<a href="productdetail.html"><img src="images/product/f.jpg" alt="Image 06" /></a>
                <h3>Maroon 5    </h3>
                <p class="product_price">Overexposed</p>
                <a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="shoppingchart.html" class="detail">Profile</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="images/product/h.jpg" alt="Image 07" /></a>
                <h3>Pink</h3>
                <p class="product_price">The Truth About Love</p>
                <a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="shoppingchart.html" class="detail">Profile</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="images/product/i.jpg" alt="Image 08" /></a>
                <h3>SNSD</h3>
                <p class="product_price">I Got A Boy</p>
				<a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="shoppingcart.html" class="detail">Profile</a>

            </div>        	
            <div class="product_box no_margin_right">
            	<a href="productdetail.html"><img src="images/product/j.jpg" alt="Image 09" /></a>
                <h3>taylor Swift</h3>
                <p class="product_price">Red</p>
                <a href="productdetail.html" class="add_to_card">Album Detail</a>
                <a href="shoppingchart.html" class="detail">Profile</a>
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