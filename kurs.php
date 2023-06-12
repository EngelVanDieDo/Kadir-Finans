<?php 
session_start();
if (isset($_SESSION["kod"])){
	
}
else{
	  header("Location: bilet.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurslar</title>
    <script src="https://kit.fontawesome.com/d304e2ee71.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
	<link rel="stylesheet" type="text/css" href="assets/Css/bilet.css">
	<link rel="stylesheet" type="text/css" href="assets/Css/alert.css">
</head>
<body id="bodyy">
<a href="index.php"><div class="anasayfa-dön"><p>Başa Dön</p></div></a>
<div class="conteiner-kurs">
<div class="kurs-video" id="video"><div class="video-gösterim"><p>Kursumuza katıldığınız için teşekkürler,</p><p>lütfen seçiminizi yaparak videoları izleyebilirsiniz!</p></div></div>
<div class="kurs-seçim">
<div class="kurslar1">
<div class="kurs-content-resim"><img src="assets/İmg/kurs-image.png" alt="s"></div>
<div class="kurs-content-başlık">
<p>Kadir Finans</p>
<h2>Giriş</h2>
<span>Kurs Tanıtımı!<span></div>
</div>
<div class="kurslar2">
<div class="kurs-content-resim"><img src="assets/İmg/kurs-image.png" alt="s"></div>
<div class="kurs-content-başlık"><p>Kadir Finans</p>
<h2>Grafik nedir?</h2>
<span>Grafik nedir ve Grafik çeşitleri<span></div>
</div>
<div class="kurslar3"><div class="kurs-content-resim"><img src="assets/İmg/kurs-image.png" alt="s"></div>
<div class="kurs-content-başlık"><p>Kadir Finans</p>
<h2>Temel Kavramlar</h2>
<span>Temel Kavramlar nelerdir ve açıklamaları<span></div></div>
<div class="kurslar4"><div class="kurs-content-resim"><img src="assets/İmg/kurs-image.png" alt="s"></div>
<div class="kurs-content-başlık"><p>Kadir Finans</p>
<h2>Temel Terimler</h2>
<span>Temel Terimler nelerdir ve açıklamaları<span></div></div>
<div class="kurslar5"><div class="kurs-content-resim"><img src="assets/İmg/kurs-image.png" alt="s"></div>
<div class="kurs-content-başlıkk"><p>Kadir Finans</p>
<h2>Canlı Okuma</h2>
<span>Grafik okuma canlı açıklamalı gösterimi<span></div></div>
</div>
</div>
</body>
<script>
function body(){
	var body=document.getElementById("bodyy");
	var uzunlukresponsive2 = window.innerHeight|| document.documentElement.clientHeight || document.body.clientHeight;
body.style.height= uzunlukresponsive2+"px";}
body();
$(document).click(function(){
	const ilk = document.querySelector(".kurslar1");
	const iki = document.querySelector(".kurslar2");
	const üç = document.querySelector(".kurslar3");
	const dört = document.querySelector(".kurslar4");
	const beş = document.querySelector(".kurslar5");
	$(ilk).click(function(){
		 $("#video").html('<iframe width="100%" height="100%"  src="https://www.youtube.com/embed/EE6HujsBd7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');
	});
	$(iki).click(function(){
		 $("#video").html('<iframe width="100%" height="100%"  src="https://www.youtube.com/embed/x37hUdaKPHo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');
	});
	$(üç).click(function(){
		 $("#video").html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/MbGyiVov8JA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');		
	});
	$(dört).click(function(){
		 $("#video").html('<iframe width="100%" height="100%"  src="https://www.youtube.com/embed/Y__jU5ANcKY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');		
	});
	$(beş).click(function(){
		 $("#video").html('<iframe width="100%" height="100%"  src="https://www.youtube.com/embed/46_HaWG3KlQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');		
	});                    
});</script>
</html>