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
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu2">
            <center>
            <font size="6" color="white">
                <br/>
                REGISTER
            </font>
            </center>
            <br style="clear: left" />
    </div> <!-- END of templatemo_menu -->

        <div id="content2">
                <center>
        	    <h4>Register Now!</h4>
                <div id="contact_form">
                   <form method="post" name="form1" action="proses/register.php" onSubmit="return validasi()">
                        
                        <label for="subject">Username:</label> <input type="text" name="username" class="required input_field"/>
                        <div class="cleaner h10"></div>
                        <label for="subject">Password:</label> <input type="password" name="password" class="required input_field"/>
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" name="email" class="validate-email required input_field"/>
                        <div class="cleaner h50"></div>
                        <div class="cleaner h50"></div>
                        <div class="cleaner h30"></div>
                        <div class="cleaner h30"></div>

                        <input type="submit" value="Submit" class="submit_btn float_r"/>
                        
                    </form>
                </div>
                </center>       
        </div> 
        <div class="cleaner"></div>
    <div id="templatemo_main">
    </div> <!-- END of templatemo_main -->

    <div id="templatemo_footer">
    	<p>
			<a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a>
		</p>

Copyright© 2099 <a href="https://www.facebook.com/prastyo.adi.108">Achmad Sayyid</a> | 2015 By Sistem Informasi ITS. All Rights Reserved</a>
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->

    <script>
        function validasi(){ 
            var x=document.forms['form1']['username'].value;
            var y=document.forms['form1']['email'].value;
            var z=document.forms['form1']['password'].value;
            var at=y.indexOf("@");
            var dot=y.lastIndexOf(".");
            if(x==null || x=="")
            {
                alert("Username harus diisi!!");
                return false;
            }
            else if (z==null || z==""){
                alert("password harus diisi!!");
                return false;
            }
            else if (y==null || y==""){
                alert("email harus diisi!!");
                return false;
            }
            else if (at < 1 || dot<at+2 || dot+2>=y.length){
                alert("Alamat Email tidak valid");
                return false;
            }
                    
            if(reg.test(x) == false) {
                alert('Username tidak valid');
                return false;
            }
        }
    </script>
</body>
</html>