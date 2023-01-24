<?php
$con= mysql_connect("76.163.252.216", "A910780_Kashif","Kashif2014fs");
mysql_select_db("A910780_CTP_FSD-DB-2014");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>City Traffic Police Faisalabad (with you, for you, always)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jssor.core.js"></script>
<script type="text/javascript" src="js/jssor.utils.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script src="js/responsiveslides.min.js"></script>
<link rel="stylesheet" href="menu.css" type="text/css" />
<script type="text/javascript" src="js/menu-script.js"></script>

<!--light-box-->
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
<script type="text/javascript">
	$(function() {
		$('.gallery a').lightBox();
	});
</script>
<style type="text/css">
	.gallery li {
		display:inline block;
		float:left;
		margin:3px;
		}
</style>
</head>
<body>
<style>
body {
	margin:0px;
  font: 15px calibri;
}

.menu ul {
  text-align: center;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
}
.menu ul li {
  display: inline-block;
  border-right:solid 1px #FFFFFF;
  margin-right: -4px;
  position: relative;
  padding: 15px 20px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  color:#FFFFFF;
}

.menu ul li a{
color:#FFFFFF;
}
.menu ul li a:hover {
  color:#FFFF00;
}
.menu ul li ul {
  padding: 0;
  position: absolute;
  top: 48px;
  left: 0;
  width: 150px;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
.menu ul li ul li { 
  background:#014f7d;
  border-top:solid thin #FFFFFF; 
  display: block; 
  color: #FFFFFF;
  z-index:10000;
}
.menu ul li ul li:hover { background:#7f7f7f; color:#FFFFFF; }
.menu ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}

#header {
	width:100%; min-width:950px; height:195px; background-image:url(images/bg.jpg); background-repeat:repeat-x; border:none
}

.logo {
	padding:10px;
	float:left;
}
.logo img{
	width:400px;
}

.search {
	min-width:495px; height:100px; float:right; margin-top:10px;
}
.pics {
	width:200px; float:inherit; margin-top:-10px;
}
#topLink input {
	outline: none;
	color: #000;
	background:none;
	border: 1px solid #014f7d;
	line-height: 1.5em;
	margin-top:20px;
	padding:5px;
}

#topLink a{
	padding:10px;
	font-size:14px;
	color:#014f7d;
	text-decoration:none;
}

#topLink a:hover {
	color:#333;
	font-size:14px;
	text-decoration:underline;
}
</style>

<div id="header">
	<div class="logo"><img src="images/logo.jpg" /></div>
	<div class="search">
    <table border="0" align="right" id="topLink">    	<tr>
   	  <td align="right"><span><a href="index.php">Home</a></span> <span><a href="page.php?id=143">Contact us</a></span> <span><a href="page.php?id=102">Feedback</a></span> <span>
      <a href="page.php?id=54">Linc Inq</a>
      </span></td></tr>
<tr><td align="center">
        <form action="search.php" method="post">
        	<input type="text" name="search" />
        	<input type="button" name="search" style="background-color:#014f7d; color:#FFF" value="Search" />
        </form>
        </td></tr>
<tr><td align="center">
    <div class="pics"><img src="images/cop-light.gif"></div>
        </td></tr>
	</table>        
    </div>
    <br style="clear:all" />
    <div class="menu" style="margin-top:101px; height:25%; text-align:center">
<ul>
		<li>&nbsp;</li>
		<li><a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
<?php $result= mysql_query("select * from pages where parent=0 and active=0 order by page_id asc");
	while ($row=mysql_fetch_array($result))
		{
		echo '<li><a href="page.php?id='.stripslashes($row['page_id']).'">'.stripslashes($row['page_title'])."</a>";
		$rs= mysql_query("select * from pages where active=0 and parent=".stripslashes($row['page_id'])." order by page_id asc");
		$flag =false;
		while ($row2=mysql_fetch_array($rs))
		{
			if ($flag == false)
			echo "<ul>";
			echo '<a href="page.php?id='.stripslashes($row2['page_id']).'"><li> '.stripslashes($row2['page_title']);
			echo "</li></a>";
			$flag =true;
		}
		if ($flag == true)
		echo '</ul>';
		echo '</li>';
		}
?>
		<li><a href="gallery.php">PHOTO GALLERY</a></li>
   		<li><a href="press.php">PRESS GALLERY</a></li>

</ul>    
</div>
<div style="height:23px; padding-left:10px; color:#ffff00; overflow:hidden">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="7%" align="center">Top Story:</td>
<td width="73%">
<span style="color:#FFFFFF; font-weight:normal;">
		<marquee behavior="scroll" scrolldelay="100" scrollamount="1" right="0" style="height:20px; overflow:hidden" width= "100%" direction="up" loop="true" onMouseOut="this.start();" onMouseOver="this.stop();">
        <?php $result= mysql_query("select * from news order by datetime desc limit 5"); 
		while ($row=mysql_fetch_array($result))
		{
		 echo '<a href="newsdetail.php?id='.stripslashes($row['id']).'">' . "<span style=" . "color:white" . ">" . stripslashes($row['n_title'])."</span><br><br></a>";
		}
		?>
        </marquee>                   		
</span>
</td>
<td width="20%">Today:&nbsp;<span style="color:#ffffff; font-weight:normal;">
<?php
    $cdate = new DateTime('now', new DateTimeZone('Asia/karachi'));
    echo $cdate->format('F j, Y, g:i a');
?>
</span>
</td>
</tr>
</table>
</div>
</div>
<div class="wrap">
	<div class="main">
    	<div class="main_page">
        	<h3>PHOTO GALLERY</h3>
        </div>
		<div class="gallery">
        <ul>
        <?php 
		<?php 
		$con= mysql_connect("76.163.252.216", "A910780_Kashif","Kashif2014fs");
		mysql_select_db("A910780_CTP_FSD-DB-2014");
		$img= mysql_query("select * from gallery order by g_id desc"); 
		while ($gallery=mysql_fetch_array($img))
		{ 
		?>
            <li><a href="<?php echo $gallery['image']?>"><img src="<?php echo $gallery['thumb']?>" alt=""></a></li>
         <?php } ?>
       </ul>
       <div class="clear"> </div>
	   </div>
	</div>
</div>	
<div class="footer">
<div class="wrap">
	<div class="footer-grids">
     <div style="height:195px; background-color:#dce4f1">
        <div class="footer-grid">
            <h3>join us @</h3>
			<p><a href="https://www.facebook.com/Faisalabad.Police.Official.Page?ref=hl" target="_blank"><img src="images/facebook-logo.png" width="160" height="48"></a></p>
			<p><a href="https://www.twitter.com/ctpfsd" target="_blank"><img src="images/twitter_logo.png" width="160" height="48"></a></p><br>
		</div>
		<div class="footer-grid">
            <ul>
            	<li><a href="news.php">News & Events </a></li>
             	<?php $links= mysql_query("select * from pages where parent=0 and active=1 order by page_id asc limit 5"); 
				while ($row=mysql_fetch_array($links))
				{
				echo '<li><a href="page.php?id='.stripslashes($row['page_id']).'">'.stripslashes($row['page_title'])."</a>";
				}
				"</li>"
				?>
            </ul>
		</div>
<div class="footer-grid">
            <ul>
            <?php
             	$links2= mysql_query("select * from pages where parent=0 and active=1 and page_id>137 order by page_id asc limit 6"); 
				while ($row=mysql_fetch_array($links2))
				{
			    echo '<li><a href="page.php?id='.stripslashes($row['page_id']).'">'.stripslashes($row['page_title'])."</a></li>";
				
			    }
		   ?>
            </ul>
		</div>
        	<div class="footer-grid footer-lastgrid">
			<h3>CONTACT US</h3>
			<p>CPO Office, District Court Faisalabad.</p>
		<div class="footer-grid-address">
			<p>Tel. +92-41-9200622, 9200245</p>
			<p>Fax: +92-419200235</p>
			<p>Email:<a class="email-link" href="#">feeb.back@faisalabadpolice.gov.pk</a></p><br>
        </div>
	    </div>
     </div>
     <div class="wrap">
    <div style="height:1px; width:1000px; background-color:#000000"></div>
    </div>
	<div style="padding-top:1px;" class="wrap">
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 5,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 5,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 5                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1000));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1000px; height: 100px; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1000px; height: 100px; overflow: hidden;">
            <div><img u="image" alt="Traffic Signs" src="images/logo/1.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/2.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/3.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/4.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/5.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/6.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/7.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/8.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/9.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/10.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/11.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/12.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/13.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/14.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/15.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/16.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/17.JPG" /></div>            <div><img u="image" alt="Traffic Signs" src="images/logo/18.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/19.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/20.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/21.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/22.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/23.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/24.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/25.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/26.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/27.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/28.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/29.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/30.JPG" /></div>
            <div><img u="image" alt="Traffic Signs" src="images/logo/31.JPG" /></div>
</div>
<!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l              (normal)
            .jssora03r              (normal)
            .jssora03l:hover        (normal mouseover)
            .jssora03r:hover        (normal mouseover)
            .jssora03ldn            (mousedown)
            .jssora03rdn            (mousedown)
            */
            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(images/a03.png) no-repeat;
                overflow:hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03ldn { background-position: -243px -33px; }
            .jssora03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
    </div>
    <!-- Jssor Slider End -->
    </div>
	  <div class="clear"> </div>
		</div>
		<div class="copy-right">
			<p>Copyright © 2014, IT branch, City Traffic Police Faisalabad.</p>
		</div>
</div>
</div>
</body>
</html>