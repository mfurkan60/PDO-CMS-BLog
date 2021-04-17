<?php !defined("index") ? die("Bu sayfaya böyle ulaşamazsınız") : null; 


if($_SESSION){ ?>
    <div class="sag3"> 
	<h2>uye profili</h2>
	<span> 
	<img src="images/avatar.jpg" alt="" />
	</span>
	<ul> 
	<li><a href="">admin paneli</a></li>
	<li><a href="">profil</a></li>
	<li><a href="">konu ekle</a></li>
	<li><a href="">mesaj</a></li>
	<li><a href="?do=cikis">cıkıs</a></li>
	</ul>
	</div>
<?php  }

else{ ?>
    <div class="sag2"> 
	<h2>uye girisi</h2>
	<ul>
    <form action="?do=uye" method="POST">
	<li>uye adı</li>
	<li><input type="text" name="name" /></li>
	<li>sifreniz</li>
	<li><input type="password" name="sifre" /></li>
	<li><button type="submit">giris yap</button></li>
    </form> 
	</ul>
	</div>

<?php }





?>


