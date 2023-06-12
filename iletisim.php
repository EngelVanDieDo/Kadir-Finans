<?php 
session_start();


if (!isset($_SESSION["kullaniciban"])){
if (isset($_SESSION["kullaniciadi"]))
{
$ip = $_SERVER['REMOTE_ADDR'];
$ad = $_SESSION["ad"];
$soyad = $_SESSION["soyad"];
$tarih = date("d-m-Y");
$asd = date("H:i:s");
$zaman = date("H:i:s", strtotime($asd) + 3600);

$data = 
"<div class='conteiner'>".PHP_EOL.
"<div class='bilgi-conteiner'>".PHP_EOL.
"Ad Soyad:$ad $soyad".PHP_EOL.
"<div class='admin-center'>"."Tarih:$tarih Saat:$zaman</div>".PHP_EOL.
"IP:$ip </div>".PHP_EOL.
"<div>İletisim</div>".PHP_EOL.
"</div>".PHP_EOL.
"<hr>".PHP_EOL.PHP_EOL;

$file = "K.O.M.A(Kişisel olaylara müdahale aracı).txt";
$existingData = file_get_contents($file);

file_put_contents($file, $data . $existingData);
}
else {
  header("Location: giris.php");
}
}
else{
	  session_destroy();
	  header("Location: index.php");
}
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yorumlar</title>
    <link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
    <link rel="stylesheet" type="text/css" href="assets/Css/style.css">
	<!--<link rel="stylesheet" type="text/css" href="assets/Css/alert.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
   
</head>
<body>

 <nav id="nav">
   <div class="page2-logo-conteiner">
    <div class="page2-logo">
    <a href="index.php"><img src="assets\İmg\Logo.png" alt="asd"></a>           
   </div>
   </div>
    <?php if(isset($_SESSION["kullaniciadmin"])){
			  echo "<a href='admin.php' class='social-admin'><div>Admin</div></a>";
		  }?>
	 
        <div class="hamburgerr">
          <div class="çizgi çizgi1"></div>
          <div class="çizgi çizgi2"></div>
          <div class="çizgi çizgi3"></div>
        </div>
		
      </nav>
      <div class="about">
        <div class="social-links">
          <a href="index.php"><div class="social-link">Anasayfa</div></a>
          <a href="kurs.php"><div class="social-link">Kurslar</div></a>
		  <?php echo "<a href='cikis.php' class=' social-close'><div>Cıkıs yap</div></a>"; ?>
        </div>    
      </div>
	  <div class="page6">  
   <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
 
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "SP 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "tr"
}
  </script>
</div>
<!-- TradingView Widget END -->

	<div class="page6-yorum-content">
    <div class="alerrt"></div>
       
       <div class="text-conteiner">
   	      <div class="text-animate"> 
		
	   <input type="text"readonly="readonly" value="<?php  echo $_SESSION["ad"]?>" id="ad" name="ad" required>

	      </div>
	      <div class="text-animate">

		 <input type="text" id="soyad" readonly="readonly" value="<?php  echo $_SESSION["soyad"]?>" name="soyad" required> 
		
		  </div>
		 </div>
		 <div class="yorum-conteiner">
		   <div class="yorum-animate"> 
		 <textarea id="yorum" name="yorum" onkeyup="checkChar()" onkeydown="checkChar()" required></textarea><label>Müşterilerimizin geri bildirimleri, işletmemiz için son derece önemlidir. Unutmayın, yorumlarınız bizim için değerli!</label>
		 		    <div id="report"></div>
		   </div>
		 </div>
		 <div class="buton-conteiner">
		 <input type="submit" id="buton" name="gonder" value="Yorum Yap"> 
		 <input type="submit" id="butonn" class="vericek" name="gonder" value="Yorum çek"></div></div>
		

    <div class="bord">
	<div id="veri-listesi">
  <ul id="yoms">
   
  </ul>
</div>
</div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script src="assets/Js/script.js"></script>
<script>
$(document).ready(function(){
	$(buton).click(function(){

    var ad=$("input[name=ad]").val();
    var soyad=$("input[name=soyad]").val();
    var yorum=$("textarea[name=yorum]").val();
    $.ajax({
      url:"api.php?mode=insert",
      type:"POST",
      data:{
        "ad":ad,
        "soyad":soyad,
        "yorum":yorum
      },
      success: function(result){
        //$("input[name=ad]").val("");
       // $("input[name=soyad]").val("");
        $("textarea[name=yorum]").val("");
         // $(".alert").show();
        //  $(".alert").html(result);
         var vericek=document.getElementById("butonn");
	     vericek.click();
       }});
        
  });
  $(butonn).click(function(){

    var ad=$("input[name=ad]").val();
    var soyad=$("input[name=soyad]").val();
    var yorum=$("textarea[name=yorum]").val();
    $.ajax({
      url:"ajaxcek.php",
      type:"POST",
      data:{
        "ad":ad,
        "soyad":soyad,
        "yorum":yorum
      },
      success: function(dg) {
      document.getElementById("yoms").innerHTML = dg;
    }});
        
  });
  function veri(){
	  var vericek=document.getElementById("butonn");
	     vericek.click();
  }
//setInterval(veri,400);
 veri();

});
var listeresponsive=document.getElementById("veri-listesi");
	var uzunlukresponsive2 = window.innerHeight|| document.documentElement.clientHeight || document.body.clientHeight;
	listeresponsive.style.height=uzunlukresponsive2-346+"px";
</script>
</html>