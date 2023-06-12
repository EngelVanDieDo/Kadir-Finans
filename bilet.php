<?php
session_start();
if (isset($_SESSION["kullaniciadi"])){
	
}
else{
	 header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilet Kontrol</title>
    <script src="https://kit.fontawesome.com/d304e2ee71.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/Css/bilet.css">
	<link rel="stylesheet" type="text/css" href="assets/Css/alert.css">
	<link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
</head>
<body id="body">
<a href="index.php"><div class="anasayfa-dön"><p>Başa Dön</p></div></a>
<div class="conteiner">
<h3>Lütfen Biletinizi Onaylayınız!</h3>
   <input type="text" placeholder="Biletinizi Giriniz!" value="" class="input" id="input" name="input"></input>
   <div class="buton" id="buton" name="buton">Bilet Onayla</div>
   <div id="yomss" ></div>
   </div>
</body>
<script>
function body(){
	var body=document.getElementById("body");
	var uzunlukresponsive2 = window.innerHeight|| document.documentElement.clientHeight || document.body.clientHeight;
body.style.height= uzunlukresponsive2+"px";}
body();
$(document).ready(function(){
	var buton=document.getElementById("buton");
	$(buton).click(function(){
		  var bilet=$("input[name=input]").val();
		 $.ajax({
      url:"bilet-f.php",
      type:"POST",
      data:{
       "bilet":bilet
      },
      success: function(result){
     $("#yomss").html(result);


       }});
	});
});
	</script>
</html>