<?php !defined("index") ? die("Bu sayfaya böyle ulaşamazsınız") : null;   ?>
<?php
// we get all post
$konu = $db->prepare("SELECT * FROM konular inner join  kategoriler on 
kategoriler.kategori_id = konular.konu_kategori");
$konu ->execute();
$x = $konu->fetchAll(PDO::FETCH_ASSOC);



foreach($x as $m){  ?>
<style>
.blog_yazar{
    color: blue;
    text-transform: uppercase;
}

</style>
<div class="sol2"> 
	<h2><?php echo $m['konu_baslik'] ?></h2>
	<div class="bilgi">kategori : <?php echo $m['kategori_adi'] ?> YAZAR: <span class="blog_yazar"> <?php echo $m['konu_ekleyen'] ?></span> 
    okunma : <?php echo $m['konu_hit'] ?> yorum : 2 
	<span style="float:right;">tarih :<?php echo $m['konu_tarih'] ?></span></div>
	<div class="resim"> 
	<img src="images/php.jpg" alt="" />
	</div>
	<p> 
<?php echo substr($m['konu_aciklama'],0,200) ?>
	</p>
	
	<div class="devam"> 
	<a href="?do=devam&id=<?php echo $m['konu_id'] ?> ">devam</a>
	</div>
	<div style="clear:both;"></div>
	</div>

<?php }

?>


