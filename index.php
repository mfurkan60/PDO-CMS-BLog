<?php define("index", true); ?>
<?php include "functions/db.php";   

session_start();
ob_start();


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Blgo Sayfası</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/reset.css" />
</head>
<body>
	<div class="genel"> 
	<div class="header"> 
	<h2><span style="color:skyblue;">Blog </span> Sayfası</h2>
	<div class="reklam"> 
	<img src="images/reklam.gif" alt="" />
	</div>
	</div>
	
	<div class="menu"> 
	<ul> 
	<li><a href="index.php">anasayfa</a></li>
	<li><a href="">dersler</a></li>
	<li><a href="">video</a></li>
	<li><a href="">hakkımda</a></li>
	<li><a href="">iletisim</a></li>
	</ul>
	<form action="" method="post">
	<span><input type="text" name="story" /><button type="submit">ara</button></span>
	</form>
	</div>
	<div style="clear:both;"></div>
	<div class="content"> 
	<div class="sol"> 
<?php

$do = @$_GET['do'];
switch($do){
	case "iletisim":
		break;
	case "kategori":
		break;
	case "ara":
		break;

	case "cikis":
		
		session_destroy();
			
		header("refresh: 2; url=index.php");
			
		echo '<div class="basarili2">bBsarıyla cıkıs yaptınız yönlendiriliyorsunuz</div>';
			
		break;

	case "uye": 
		include ("uye_giris.php");
		break;	

		case "devam":
		include "devam.php";	 
		break;
			
		default :
		
		include("anasayfa.php");
		break;


	}


?>
	
	
	
	
	</div>
	
	
	<div class="sag"> 
<?php include("uye.php");   ?>
	
	
	
	
	<div class="sag3"> 
	<h2>kategoriler</h2>
	<ul> 
	<li>php</li>
	<li>css</li>
	<li>html</li>
	<li>dle</li>
	</ul>
	</div>
	<div class="sag2"> 
	<h2>populer konular</h2>
	<h3>php dersleri</h3>
	<h3>php dersleri</h3>
	<h3>php dersleri</h3>
	</div>
	<div class="sag3"> 
	<h2>son yorumlar</h2>
	<h3>
	<b><img src="images/avatar.jpg" alt="" /></b>
	bu bir deneme yorumudur <br/><span style="font-size:17px;">mehmet</span></h3>
	
	</div>
	</div>
	
	
	</div>
	<div style="clear:both;"></div>
	
	<div class="sayfalama"> 
	
	<b>geri</b>  <b style="float:right;">ileri</b>
	<div style="clear:both;"></div>
	</div>
	<div class="footer"> 
	<h2>copright  &copy;   2021</h2>
	</div>
	
	</div>
	
</body>
</html>