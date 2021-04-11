<?php
//get id value for each posts
$id = $_GET["id"];

// we get all post
$konu = $db->prepare("SELECT * FROM konular inner join  kategoriler on 
kategoriler.kategori_id = konular.konu_kategori
 WHERE konu_id=?");
$konu ->execute(array($id));
$x = $konu->fetchAll(PDO::FETCH_ASSOC);

//subset hit area
if(!@$_COOKIE["hit".$id]){
    $hit = $db->prepare("UPDATE konular SET konu_hit= konu_hit +1 WHERE konu_id=?");
    $hit->execute(array($id));
    
    //prevent from a non normal hit number
    setcookie("hit".$id,"_",time() + 5767867565);
    
}



foreach($x as $m){  ?>
<style>
.blog_yazar{
    color: blue;
    text-transform: uppercase;
}

</style>
<div class="sol2"> 
	<h2><?php echo $m['konu_baslik'] ?></h2>
	<div class="bilgi">kategori : <?php echo $m['kategori_adi'] ?> | YAZAR : <span class="blog_yazar"> <?php echo $m['konu_ekleyen'] ?></span> okunma : 3 yorum : 2 
	<span style="float:right;">tarih :<?php echo $m['konu_tarih'] ?></span></div>
	<div class="resim resim_devam"> 
	<img src="<?php echo $m['konu_resim'] ?>" alt="" />
	</div>
	<p> 
<?php echo  $m['konu_aciklama'] ?>
	</p>
	
	 
	<div style="clear:both;"></div>
	</div>

<?php }

?>


