<?php
session_start();
if (isset($_SESSION["kullaniciban"])){
	
}
else{
	  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ban</title>
	 <link rel="stylesheet" type="text/css" href="assets/Css/style.css">
     <link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
</head>
<body id="bodys">
<div class="ban-content">
 <div class="ban-logo">
  <img src="assets\İmg\logo.svg" alt="asd">
 </div>
 <div class="ban-yazı">
  Sayın <?php  echo htmlspecialchars($_SESSION["ad"] . " " . $_SESSION["soyad"]); ?>,</br>Sitemizde yaptığınız uygunsuz davranışlarınız nedeniyle 30 Şubat'a kadar yasaklandınız.<?php     echo "<a href='cikis.php' class=' social-close'><div>Cıkıs yap</div></a>"; ?>
 </div>
 
</div>
</body>
<script>var listeresponsive=document.getElementById("bodys");
	var uzunlukresponsive2 = window.innerHeight|| document.documentElement.clientHeight || document.body.clientHeight;
	listeresponsive.style.height=uzunlukresponsive2+"px";</script>
</html>
