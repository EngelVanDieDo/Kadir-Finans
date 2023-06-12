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
"<div>İndex</div>".PHP_EOL.
"</div>".PHP_EOL.
"<hr>".PHP_EOL.PHP_EOL;

$file = "K.O.M.A(Kişisel olaylara müdahale aracı).txt";
$existingData = file_get_contents($file);

file_put_contents($file, $data . $existingData);
if($ip=="192.168.0.111"){
	  session_destroy();
	  header("Location: giris.php");
}

}
else
{
  session_destroy();
  header("Location: giris.php");
}
}
else{

	  header("Location: ban.php");
}


?>
<!DOCTYPE html>	
<html lang="tr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadir Finans</title>
    <link rel="stylesheet" type="text/css" href="assets/Css/alert.css">
    <link rel="stylesheet" type="text/css" href="assets/Css/style.css">
    <link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
	<script src="https://kit.fontawesome.com/d304e2ee71.js" crossorigin="anonymous"></script>
   
</head>
<body id="body">
<input class="none" type="text" value='<?php echo $_SESSION["ad"]; ?>' name="ad-ad"></input>
<input class="none" type="text" value='<?php echo $_SESSION["soyad"]; ?>' name="soyad-soyad"></input>
<div class="Uyarekran"><h1>Bu Ekran Boyutu Sitemize Uygun değildir!</h1></div>
<div class="page1" id="page1">
 <div class="filter">
  <div class="page1-content">
   <h2>Merhabalar <?php  echo htmlspecialchars($_SESSION["ad"] . " " . $_SESSION["soyad"]); ?>,<br> Kadir Finans'ın zengin kripto dünyasına hoşgeldin.<br>Sizinle beraber 
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yorum-ajax";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT COUNT(*) as row_count FROM kisiler";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $toplam = $row['row_count'];
    echo $toplam; 
} catch(PDOException $e) {
    echo "Hata oluştu: " . $e->getMessage();
}


$conn = null;
?> kullanıcımız daha zengin olmaya bir adım yaklaştı.
</h2>
  </div>
  <div class="down">
   <div class="container">
    <div class="chevron"></div>
    <div class="chevron"></div>
    <div class="chevron"></div>
    <span class="text">Aşşağı Kaydırın</span>
   </div>
  </div>
 </div>
 </div>
<script>
	var uzunlukresponsive2 = window.innerHeight|| document.documentElement.clientHeight || document.body.clientHeight;
	page1.style.height= uzunlukresponsive2+"px";

	</script>
   <nav id="nav">
   <div class="page2-logo-conteiner">
    <div class="page2-logo">
     <a href="index.php"><img src="assets\İmg\Logo.png" alt="asd"></a>            
   </div>
   </div>
      <?php if(isset($_SESSION["kullaniciadmin"])){
			  echo "<a href='admin.php' class='social-admin'><div>Admin</div></a>";
		  }?>
        <div class="hamburger" id="hamburger">
          <div class="çizgi çizgi1"></div>
          <div class="çizgi çizgi2"></div>
          <div class="çizgi çizgi3"></div>
        </div>
		
      </nav>
      <div class="about">
        <div class="social-links">
          <a id="sc1"><div class="social-link">Ana Sayfa</div></a>
          <a id="sc2"><div class="social-link">Coinler</div></a>
          <a id="sc3"><div class="social-link">İstatistikler</div></a>
		    <a id="sc5"><div class="social-link">Rehber</div></a>
          <a id="sc4"><div class="social-link">Haklar</div></a>
          <a href="iletisim.php"><div class="social-link">Yorumlar</div></a>
          <a href="kurs.php"><div class="social-link">Kurslar</div></a>
		   <?php     echo "<a href='cikis.php' class=' social-close'><div>Cıkıs yap</div></a>"; ?>
        </div>
        
        <!--<div class="about-text">
          <h2>Hakkımda</h2>
          <hr />
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam id
          modi nulla veniam officia vitae optio velit consectetur quas autem
          nesciunt aliquam nostrum, corrupti voluptatibus, distinctio maxime
          nisi quo aspernatur?
        </div>-->
      </div>
	
	  <div class="page3" id="page3">
	  <div class="blog-slider" >
  <div class="blog-slider__wrp swiper-wrapper" id="slder">
   
   
   
  <?php
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "yorum-ajax";

try {
    $conn3 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT COUNT(*) as row_count FROM slider";
    $stmt3 = $conn3->prepare($sql);
    $stmt3->execute();
    $row = $stmt3->fetch(PDO::FETCH_ASSOC);
    $row = $row['row_count'];

} catch(PDOException $e) {
    echo "Hata oluştu: " . $e->getMessage();
}

  if($row != 0){
	  
$dsn = 'mysql:host=localhost;dbname=yorum-ajax;charset=utf8mb4';
$username = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
);
$pdo = new PDO($dsn, $username, $password, $options);
$query = "SELECT * FROM slider ORDER BY ID DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();
$query2 = "SELECT * FROM tb_upload ORDER BY ID DESC";
$stmt2 = $pdo->prepare($query2);	
$stmt2->execute();
 $i=0;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC) and $row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
	 if(isset($_SESSION["kullaniciadmin"])){
	 $i = $i+1;
	  $a = "(".$i.".slider)";
}
else{
	$a=null;
}
	echo '<div class="blog-slider__item swiper-slide">
    <div class="blog-slider__img">';

echo '<img src="upload/' .  htmlspecialchars($row2['image']) . '" alt=""> ';

echo '</div>
    <div class="blog-slider__content">
        <span class="blog-slider__code">' .$a.htmlspecialchars($row['tarih']) . '</span>
        <div class="blog-slider__title">' . htmlspecialchars($row['baslik']) . '</div>
        <div class="blog-slider__text">
            <div class="icerik-conteiner">' . htmlspecialchars($row['icerik']) . '</div>
        </div>
</div>
</div>';

	
}
  }
  else{
	  echo "<div style='justify-content: center;
    width: 100%;
    align-items: center;
    color: #f90000;
    display: flex;
    height: 100%;
'>"."Veri Tabanında Slider Bulunmamaktadır!"."</div>";
  }
?>

  </div>
   <div class="blog-slider__pagination" ></div>
   
</div>

</div>
<div class="slider-id-göster">
<?php 

  if(isset($_SESSION["kullaniciadmin"])){
  $dsn = 'mysql:host=localhost;dbname=yorum-ajax;charset=utf8mb4';
$username = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
);
$pdo = new PDO($dsn, $username, $password, $options);

$query = "SELECT * FROM slider ORDER BY ID DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();
$query2 = "SELECT * FROM tb_upload ORDER BY ID DESC";
$stmt2 = $pdo->prepare($query2);	
$stmt2->execute();
	  $i = 0;
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC) and $row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {

	  $i = $i+1;
	
			 echo  $i.".(".htmlspecialchars($row2['id'])."R"."-";
		     
			 echo  htmlspecialchars($row['ID'])."Y".")"." ";
		 
}
 
echo "R(Resmin ID'si) Y(Yazının ID'si)";
}?></div>
<div id ="newsletter" class="news">
    <div class="newsContent">
        <span class="close" id="close-popup">&times;</span>
        <h3>Kurslarımızda İndirim!!!</h3>
        <p>Sizde grafik okumakta güçlük çekiyor ve kafanız karışıyorsa Kadir Finans ile hızlı ve kolay şekilde öğrenebilirsiniz.</p>
         <a  id="link-close" ><div class="link-popup"><del>25Tl</del>Bedava</div></a>
         <input type="email" placeholder="Email Giriniz!" class="popup-input" name="popup-email"></input>
          
       
    </div>
</div>
<div class="page4" id="page4">
<h2>Piyasa Güncel Durumu</h2>

<div class="tradingview-widget-container">
<div class="tradingview-widget-container__widget"></div>
</div>
<script id="takip1"type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
  {
  "symbols": [
    [
      "BINANCE:BTCUSD|1M|TRY"
    ],
    [
      "BITSTAMP:ETHUSD|1M|TRY"
    ],
    [
      "NYSE:LTC|1M"
    ],
    [
      "CRYPTOCAP:MATIC|1M|TRY"
    ],
    [
      "MIL:USDC|1M|TRY"
    ],
   [
      "BINANCE:XRPUSDT|1M|TRY"
    ]
  ],
  "chartOnly": false,
  "width": "100%",
  "height": 465,
  "locale": "tr",
  "colorTheme": "dark",
  "autosize": true,
  "showVolume": true,
  "showMA": true,
  "hideDateRanges": false,
  "hideMarketStatus": false,
  "hideSymbolLogo": false,
  "scalePosition": "right",
  "scaleMode": "Normal",
  "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
  "fontSize": "10",
  "noTimeScale": false,
  "valuesTracking": "1",
  "changeMode": "price-and-percent",
  "chartType": "area",
  "maLineColor": "#2962FF",
  "maLineWidth": 1,
  "maLength": 9,
  "lineWidth": 2
}
  </script>

<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": 465,
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "BTC",
  "colorTheme": "dark",
  "locale": "tr",
    "largeChartUrl": "http://file:///C:/Users/Lenovo/Desktop/Kadir-Finans/İndex.html"
}
  </script>
</div>

</div>
<div class="page5" id="page5"><div class="page5-talimatlar-conteiner">
  <h2>Kolayca kripto alım-satım yapmaya başlayın</h2>
   <div class="page5-talimatlar-content">
     <div class="page5-talimatlar-icon"><img src="assets/İmg/icon-kayıt.png" alt="a"></div>
     <div class="page5-talimatlar"><h3 class="fonth3">Öncelikle hesap açalım<h3><p class="fontp"><a href="https://www.trbinance.com">Binance.com'dan</a> yada alttaki referanslardan kayıt olup kimlik onaylamalısınız.</p></div>
    </div>
    <div class="page5-talimatlar-content">
     <div class="page5-talimatlar-icon"><img src="assets/İmg/icon-kayıt.png" alt="a"></div>
     <div class="page5-talimatlar"><h3 class="fonth3">Kimliğinizi doğrulayın<h3><p class="fontp">Hesabınızı ve işlemlerinizi güvence altına almak için kimlik doğrulama işlemini tamamlayın.</p></div>
    </div>
	<div class="page5-talimatlar-content">
     <div class="page5-talimatlar-icon"><img src="assets/İmg/icon-kayıt.png" alt="a"></div>
     <div class="page5-talimatlar"><h3 class="fonth3">Hesabınıza fon yatırın<h3><p class="fontp">Kripto alıp satmak için kripto hesabınıza fon yatırın. Çeşitli ödeme yöntemleriyle para yatırabilirsiniz.</p></div>
    </div>
    <div class="page5-talimatlar-content">
     <div class="page5-talimatlar-icon"><img src="assets/İmg/icon-kayıt.png" alt="a"></div>
     <div class="page5-talimatlar"><h3 class="fonth3">
Alım satıma başlayın<h3><p class="fontp">Başlamaya hazırsınız! Kripto alıp satın, yatırımlarınız için yinelenen alım planları oluşturun ve Binance'in sunduğu imkanları keşfedin.</p></div>
    </div>
  </div><div class="page5-talimatlar-image"> <img src="assets\İmg\telefon.png" alt="g"></div></div>
 <!--Ekran boyutuna göre büyüklüğü ayarlansın-->
 <footer id="footer"><div class="footer-kayıt"><h1>Alım-Satım için hemen Başla</h1><div class="Fotter-Buton-Hiza">
<div class="Footer-Button-kayıt"><a href="https://www.trbinance.com/account/signup">Kayıt ol</a></div>
<div class="Footer-Button-giris"><a href="https://www.trbinance.com/account/signin?continue=">Giriş Yap</a></div>
 </div></div>
 <div class="Footer-Haklar-Conteiner">
   <div class="Footer-Haklar-Content">
    <!--Responsive-->
   <div class="iletisim none">İletisim
     <div class="çizgi-conteiner" id="çizgi-conteiner">
          <div class="çizgii çizgii1"></div>
          <div class="çizgii çizgii2"></div>
          <div class="çizgii çizgii3"></div>
      </div></div>
      <div class="iletisim-li none" id="iletisim-li">
      <div class="bilgi"><p>KK TEKNOLOJİ A.Ş.</p><p>Çınar Mah. Cihat-Saran Sok.</p><p>Küçüyalı / İstanbul</p><p class="emil">Email</br>kadirkocapinar5@gmail.com</p><div class="Footer-img"><a href="https://play.google.com/store/apps/details?id=com.cloud.tr&hl=tr&pli=1" target="_blank"><svg width="100%" height="46" viewBox="0 0 180 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="180" height="46" rx="4" fill="#474D57"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M42.3642 32.0725L51.1065 23.3506L42.3642 14.6121C42.1488 14.9595 41.9999 15.5224 41.9999 16.3331V30.3511C41.9999 31.1619 42.1488 31.7246 42.3642 32.0725Z" fill="#00D1FF"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M54.7988 27.0416L51.9342 24.1622L43.4238 32.6855H43.5067C44.2351 32.6855 44.8643 32.4204 45.8742 31.8742L54.7988 27.0416Z" fill="#F7364A"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M55.8721 20.2222L52.7593 23.3504L55.8721 26.4618L57.7596 25.4354C58.4549 25.0546 59.5147 24.3596 59.5147 23.3504C59.5147 22.3241 58.4549 21.629 57.7596 21.2482L55.8721 20.2222Z" fill="#F0B90B"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M43.4238 14L51.9342 22.5231L54.7988 19.6435L45.8742 14.8108C44.8643 14.2648 44.2352 14 43.5067 14H43.4238Z" fill="#00F076"/>
<path d="M72.9389 18H73.6949V11.718H72.9389V14.49H69.7619V11.718H69.0059V18H69.7619V15.156H72.9389V18ZM77.0432 18.108C77.9162 18.108 78.5822 17.676 78.8792 17.046L78.3662 16.677C78.1232 17.19 77.6732 17.478 77.0882 17.478C76.2242 17.478 75.7112 16.875 75.7112 16.074V15.858H79.0502V15.516C79.0502 14.202 78.2852 13.248 77.0432 13.248C75.7832 13.248 74.9552 14.202 74.9552 15.678C74.9552 17.154 75.7832 18.108 77.0432 18.108ZM77.0432 13.851C77.7812 13.851 78.2762 14.4 78.2762 15.219V15.318H75.7112V15.255C75.7112 14.445 76.2602 13.851 77.0432 13.851ZM80.9567 18V14.778C80.9567 14.184 81.4967 13.896 82.0637 13.896C82.7477 13.896 83.0627 14.319 83.0627 15.147V18H83.7827V14.778C83.7827 14.184 84.3047 13.896 84.8717 13.896C85.5737 13.896 85.8887 14.328 85.8887 15.147V18H86.6087V15.021C86.6087 13.896 86.0417 13.248 85.0967 13.248C84.3047 13.248 83.8547 13.689 83.6837 14.193H83.6657C83.4137 13.527 82.8557 13.248 82.2437 13.248C81.5237 13.248 81.1997 13.635 80.9927 14.112H80.9567V13.356H80.2367V18H80.9567ZM89.8401 18.108C90.7131 18.108 91.3791 17.676 91.6761 17.046L91.1631 16.677C90.9201 17.19 90.4701 17.478 89.8851 17.478C89.0211 17.478 88.5081 16.875 88.5081 16.074V15.858H91.8471V15.516C91.8471 14.202 91.0821 13.248 89.8401 13.248C88.5801 13.248 87.7521 14.202 87.7521 15.678C87.7521 17.154 88.5801 18.108 89.8401 18.108ZM89.8401 13.851C90.5781 13.851 91.0731 14.4 91.0731 15.219V15.318H88.5081V15.255C88.5081 14.445 89.0571 13.851 89.8401 13.851ZM93.7536 18V14.778C93.7536 14.184 94.3116 13.896 94.8876 13.896C95.5806 13.896 95.9406 14.319 95.9406 15.147V18H96.6606V15.021C96.6606 13.896 96.0576 13.248 95.1036 13.248C94.4106 13.248 94.0146 13.59 93.7896 14.112H93.7536V13.356H93.0336V18H93.7536ZM101.311 10.98C101.653 10.98 101.815 10.791 101.815 10.503V10.377C101.815 10.089 101.653 9.9 101.311 9.9C100.969 9.9 100.807 10.089 100.807 10.377V10.503C100.807 10.791 100.969 10.98 101.311 10.98ZM102.571 18V17.37H101.689V12.348H102.571V11.718H100.051V12.348H100.933V17.37H100.051V18H102.571ZM104.599 18V14.778C104.599 14.184 105.157 13.896 105.733 13.896C106.426 13.896 106.786 14.319 106.786 15.147V18H107.506V15.021C107.506 13.896 106.903 13.248 105.949 13.248C105.256 13.248 104.86 13.59 104.635 14.112H104.599V13.356H103.879V18H104.599ZM111.964 18H112.684V11.34H111.964V14.112H111.928C111.685 13.527 111.208 13.248 110.569 13.248C109.408 13.248 108.679 14.193 108.679 15.678C108.679 17.163 109.408 18.108 110.569 18.108C111.208 18.108 111.649 17.82 111.928 17.244H111.964V18ZM110.767 17.46C109.957 17.46 109.453 16.902 109.453 16.074V15.282C109.453 14.454 109.957 13.896 110.767 13.896C111.424 13.896 111.964 14.274 111.964 14.787V16.515C111.964 17.118 111.424 17.46 110.767 17.46ZM114.575 12.267C114.881 12.267 115.016 12.105 115.016 11.862V11.745C115.016 11.502 114.881 11.34 114.575 11.34C114.269 11.34 114.134 11.502 114.134 11.745V11.862C114.134 12.105 114.269 12.267 114.575 12.267ZM114.215 18H114.935V13.356H114.215V18ZM117.185 18V14.85C117.185 14.409 117.653 14.076 118.427 14.076H118.85V13.356H118.571C117.815 13.356 117.392 13.77 117.23 14.211H117.185V13.356H116.465V18H117.185Z" fill="white"/>
<path d="M74.5889 32.728V34H75.7769V29.536H72.7409V30.7H74.4689V31.348C74.4689 32.392 73.5449 32.932 72.4889 32.932C71.1689 32.932 70.2809 32.032 70.2809 30.496V29.128C70.2809 27.592 71.1689 26.692 72.4889 26.692C73.5089 26.692 74.1809 27.232 74.5049 28.012L75.6089 27.364C75.0329 26.188 73.9889 25.48 72.4889 25.48C70.2929 25.48 68.8289 27.016 68.8289 29.812C68.8289 32.62 70.2929 34.144 72.2849 34.144C73.5569 34.144 74.3729 33.532 74.5409 32.728H74.5889ZM80.3339 34.144C82.0739 34.144 83.2019 32.872 83.2019 30.88C83.2019 28.888 82.0739 27.616 80.3339 27.616C78.5939 27.616 77.4659 28.888 77.4659 30.88C77.4659 32.872 78.5939 34.144 80.3339 34.144ZM80.3339 33.064C79.4459 33.064 78.8459 32.512 78.8459 31.408V30.352C78.8459 29.248 79.4459 28.696 80.3339 28.696C81.2219 28.696 81.8219 29.248 81.8219 30.352V31.408C81.8219 32.512 81.2219 33.064 80.3339 33.064ZM87.4273 34.144C89.1673 34.144 90.2953 32.872 90.2953 30.88C90.2953 28.888 89.1673 27.616 87.4273 27.616C85.6873 27.616 84.5593 28.888 84.5593 30.88C84.5593 32.872 85.6873 34.144 87.4273 34.144ZM87.4273 33.064C86.5393 33.064 85.9393 32.512 85.9393 31.408V30.352C85.9393 29.248 86.5393 28.696 87.4273 28.696C88.3153 28.696 88.9153 29.248 88.9153 30.352V31.408C88.9153 32.512 88.3153 33.064 87.4273 33.064ZM97.5448 34.588C97.5448 33.508 96.8968 32.86 95.3608 32.86H93.8248C93.2728 32.86 92.9488 32.728 92.9488 32.392C92.9488 32.08 93.2368 31.876 93.5488 31.768C93.7768 31.828 94.0648 31.864 94.3648 31.864C95.9488 31.864 96.8608 31.012 96.8608 29.752C96.8608 29.032 96.5488 28.432 95.9848 28.06V27.808H97.2568V26.752H96.2968C95.7448 26.752 95.4808 27.088 95.4808 27.64V27.808C95.1568 27.676 94.7728 27.616 94.3528 27.616C92.7688 27.616 91.8688 28.48 91.8688 29.752C91.8688 30.592 92.2768 31.252 93.0088 31.6V31.648C92.4088 31.792 91.9048 32.104 91.9048 32.752C91.9048 33.22 92.1568 33.568 92.6128 33.712V33.844C91.9528 33.988 91.5448 34.36 91.5448 35.044C91.5448 35.992 92.3368 36.544 94.3768 36.544C96.6208 36.544 97.5448 35.884 97.5448 34.588ZM94.3648 30.916C93.5968 30.916 93.1528 30.568 93.1528 29.86V29.62C93.1528 28.912 93.5968 28.564 94.3648 28.564C95.1328 28.564 95.5768 28.912 95.5768 29.62V29.86C95.5768 30.568 95.1328 30.916 94.3648 30.916ZM96.3208 34.732C96.3208 35.308 95.8168 35.596 94.7968 35.596H93.9808C93.0088 35.596 92.6368 35.248 92.6368 34.744C92.6368 34.444 92.7808 34.192 93.0688 34.024H95.1808C96.0328 34.024 96.3208 34.3 96.3208 34.732ZM100.17 34H101.01V32.932H100.146V25.12H98.8381V32.704C98.8381 33.508 99.2821 34 100.17 34ZM105.028 34.144C106.192 34.144 107.104 33.64 107.572 32.884L106.804 32.128C106.444 32.704 105.928 33.064 105.16 33.064C104.104 33.064 103.516 32.38 103.516 31.42V31.216H107.8V30.724C107.8 28.996 106.864 27.616 105.028 27.616C103.252 27.616 102.16 28.888 102.16 30.88C102.16 32.872 103.252 34.144 105.028 34.144ZM105.028 28.636C105.892 28.636 106.42 29.272 106.42 30.232V30.352H103.516V30.268C103.516 29.308 104.128 28.636 105.028 28.636ZM112.82 34H114.176V30.664H116.42C117.956 30.664 118.856 29.668 118.856 28.144C118.856 26.62 117.956 25.624 116.42 25.624H112.82V34ZM114.176 29.476V26.812H116.336C117.02 26.812 117.428 27.184 117.428 27.856V28.432C117.428 29.104 117.02 29.476 116.336 29.476H114.176ZM121.899 34H122.739V32.932H121.875V25.12H120.567V32.704C120.567 33.508 121.011 34 121.899 34ZM128.881 34H129.613V32.932H128.953V29.8C128.953 28.408 128.053 27.616 126.445 27.616C125.233 27.616 124.501 28.132 124.093 28.828L124.873 29.536C125.185 29.044 125.629 28.684 126.361 28.684C127.237 28.684 127.645 29.128 127.645 29.884V30.412H126.517C124.777 30.412 123.853 31.048 123.853 32.284C123.853 33.412 124.585 34.144 125.869 34.144C126.781 34.144 127.453 33.736 127.693 32.956H127.753C127.837 33.568 128.197 34 128.881 34ZM126.241 33.148C125.593 33.148 125.185 32.86 125.185 32.308V32.092C125.185 31.552 125.629 31.252 126.541 31.252H127.645V32.152C127.645 32.764 127.045 33.148 126.241 33.148ZM134.961 27.76L133.713 31.432L133.317 32.788H133.257L132.897 31.432L131.649 27.76H130.341L132.609 34.276L132.249 35.332H131.193V36.4H131.949C132.921 36.4 133.293 36.076 133.593 35.236L136.221 27.76H134.961Z" fill="white"/>
</svg></a><a href="https://apps.apple.com/tr/app/binance-tr-bitcoin-al-sat/id1548636153?l=tr" target="_blank"><svg width="100%" height="46" viewBox="0 0 180 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="180" height="46" rx="4" fill="#474D57"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M55.1216 13C55.2613 14.2102 54.7575 15.4015 54.0197 16.2785C53.2506 17.141 52.0185 17.8003 50.8197 17.7154C50.6628 16.5521 51.2703 15.3139 51.9501 14.5589C52.7192 13.7009 54.054 13.0443 55.1216 13ZM58.955 19.5C58.8134 19.5806 56.6048 20.8383 56.6292 23.3969C56.6568 26.4948 59.4813 27.5181 59.5146 27.5289C59.4984 27.6011 59.0725 29.0065 58.0144 30.4335C57.1303 31.6897 56.2024 32.918 54.7317 32.9397C54.0317 32.9552 53.5592 32.764 53.0667 32.5647C52.5532 32.3569 52.018 32.1404 51.1808 32.1404C50.2932 32.1404 49.7342 32.364 49.1953 32.5797C48.7292 32.7661 48.2781 32.9466 47.6423 32.9713C46.241 33.021 45.1696 31.6301 44.2531 30.3856C42.4221 27.8441 40.996 23.2217 42.9079 20.0769C43.8348 18.5343 45.5242 17.5418 47.3296 17.5147C48.1247 17.4993 48.8874 17.7905 49.5561 18.0457C50.0675 18.2409 50.5238 18.4151 50.8975 18.4151C51.2261 18.4151 51.6699 18.2478 52.187 18.0529C53.0014 17.7459 53.9978 17.3702 55.0131 17.4713C55.7071 17.4903 57.6845 17.7314 58.9584 19.498L58.955 19.5Z" fill="white"/>
<path d="M72.77 18H73.526V11.718H72.77V14.49H69.593V11.718H68.837V18H69.593V15.156H72.77V18ZM76.8743 18.108C77.7473 18.108 78.4133 17.676 78.7103 17.046L78.1973 16.677C77.9543 17.19 77.5043 17.478 76.9193 17.478C76.0553 17.478 75.5423 16.875 75.5423 16.074V15.858H78.8813V15.516C78.8813 14.202 78.1163 13.248 76.8743 13.248C75.6143 13.248 74.7863 14.202 74.7863 15.678C74.7863 17.154 75.6143 18.108 76.8743 18.108ZM76.8743 13.851C77.6123 13.851 78.1073 14.4 78.1073 15.219V15.318H75.5423V15.255C75.5423 14.445 76.0913 13.851 76.8743 13.851ZM80.7877 18V14.778C80.7877 14.184 81.3277 13.896 81.8947 13.896C82.5787 13.896 82.8937 14.319 82.8937 15.147V18H83.6137V14.778C83.6137 14.184 84.1357 13.896 84.7027 13.896C85.4047 13.896 85.7197 14.328 85.7197 15.147V18H86.4397V15.021C86.4397 13.896 85.8727 13.248 84.9277 13.248C84.1357 13.248 83.6857 13.689 83.5147 14.193H83.4967C83.2447 13.527 82.6867 13.248 82.0747 13.248C81.3547 13.248 81.0307 13.635 80.8237 14.112H80.7877V13.356H80.0677V18H80.7877ZM89.6712 18.108C90.5442 18.108 91.2102 17.676 91.5072 17.046L90.9942 16.677C90.7512 17.19 90.3012 17.478 89.7162 17.478C88.8522 17.478 88.3392 16.875 88.3392 16.074V15.858H91.6782V15.516C91.6782 14.202 90.9132 13.248 89.6712 13.248C88.4112 13.248 87.5832 14.202 87.5832 15.678C87.5832 17.154 88.4112 18.108 89.6712 18.108ZM89.6712 13.851C90.4092 13.851 90.9042 14.4 90.9042 15.219V15.318H88.3392V15.255C88.3392 14.445 88.8882 13.851 89.6712 13.851ZM93.5846 18V14.778C93.5846 14.184 94.1426 13.896 94.7186 13.896C95.4116 13.896 95.7716 14.319 95.7716 15.147V18H96.4916V15.021C96.4916 13.896 95.8886 13.248 94.9346 13.248C94.2416 13.248 93.8456 13.59 93.6206 14.112H93.5846V13.356H92.8646V18H93.5846ZM101.142 10.98C101.484 10.98 101.646 10.791 101.646 10.503V10.377C101.646 10.089 101.484 9.9 101.142 9.9C100.8 9.9 100.638 10.089 100.638 10.377V10.503C100.638 10.791 100.8 10.98 101.142 10.98ZM102.402 18V17.37H101.52V12.348H102.402V11.718H99.8818V12.348H100.764V17.37H99.8818V18H102.402ZM104.43 18V14.778C104.43 14.184 104.988 13.896 105.564 13.896C106.257 13.896 106.617 14.319 106.617 15.147V18H107.337V15.021C107.337 13.896 106.734 13.248 105.78 13.248C105.087 13.248 104.691 13.59 104.466 14.112H104.43V13.356H103.71V18H104.43ZM111.796 18H112.516V11.34H111.796V14.112H111.76C111.517 13.527 111.04 13.248 110.401 13.248C109.24 13.248 108.511 14.193 108.511 15.678C108.511 17.163 109.24 18.108 110.401 18.108C111.04 18.108 111.481 17.82 111.76 17.244H111.796V18ZM110.599 17.46C109.789 17.46 109.285 16.902 109.285 16.074V15.282C109.285 14.454 109.789 13.896 110.599 13.896C111.256 13.896 111.796 14.274 111.796 14.787V16.515C111.796 17.118 111.256 17.46 110.599 17.46ZM114.406 12.267C114.712 12.267 114.847 12.105 114.847 11.862V11.745C114.847 11.502 114.712 11.34 114.406 11.34C114.1 11.34 113.965 11.502 113.965 11.745V11.862C113.965 12.105 114.1 12.267 114.406 12.267ZM114.046 18H114.766V13.356H114.046V18ZM117.016 18V14.85C117.016 14.409 117.484 14.076 118.258 14.076H118.681V13.356H118.402C117.646 13.356 117.223 13.77 117.061 14.211H117.016V13.356H116.296V18H117.016Z" fill="white"/>
<path d="M74.264 34H75.68L72.824 25.624H71.12L68.264 34H69.644L70.376 31.732H73.508L74.264 34ZM71.972 26.872L73.172 30.568H70.7L71.912 26.872H71.972ZM77.2013 27.76V36.4H78.5093V32.968H78.5693C78.8333 33.7 79.4933 34.144 80.3213 34.144C81.8933 34.144 82.8053 32.932 82.8053 30.88C82.8053 28.828 81.8933 27.616 80.3213 27.616C79.4933 27.616 78.8333 28.048 78.5693 28.792H78.5093V27.76H77.2013ZM79.9253 33.016C79.1333 33.016 78.5093 32.584 78.5093 31.948V29.812C78.5093 29.176 79.1333 28.744 79.9253 28.744C80.8253 28.744 81.4253 29.38 81.4253 30.34V31.42C81.4253 32.38 80.8253 33.016 79.9253 33.016ZM84.6229 27.76V36.4H85.9309V32.968H85.9909C86.2549 33.7 86.9149 34.144 87.7429 34.144C89.3149 34.144 90.2269 32.932 90.2269 30.88C90.2269 28.828 89.3149 27.616 87.7429 27.616C86.9149 27.616 86.2549 28.048 85.9909 28.792H85.9309V27.76H84.6229ZM87.3469 33.016C86.5549 33.016 85.9309 32.584 85.9309 31.948V29.812C85.9309 29.176 86.5549 28.744 87.3469 28.744C88.2469 28.744 88.8469 29.38 88.8469 30.34V31.42C88.8469 32.38 88.2469 33.016 87.3469 33.016ZM97.8044 34.144C99.7244 34.144 100.84 33.1 100.84 31.54C100.84 30.208 100.084 29.464 98.4164 29.14L97.6724 28.984C96.7724 28.804 96.3404 28.504 96.3404 27.808C96.3404 27.076 96.8924 26.68 97.8524 26.68C98.7764 26.68 99.3764 27.04 99.8084 27.604L100.756 26.764C100.108 25.936 99.1844 25.48 97.9244 25.48C96.1484 25.48 94.9964 26.392 94.9964 27.88C94.9964 29.212 95.8244 29.968 97.4444 30.268L98.1884 30.4C99.1604 30.592 99.4964 30.964 99.4964 31.612C99.4964 32.416 98.9444 32.944 97.8764 32.944C96.9644 32.944 96.2684 32.572 95.6804 31.852L94.7444 32.728C95.4404 33.592 96.4004 34.144 97.8044 34.144ZM104.397 34H105.537V32.932H104.325V28.828H105.633V27.76H104.325V26.056H103.149V27.148C103.149 27.58 103.005 27.76 102.573 27.76H102.045V28.828H103.017V32.644C103.017 33.496 103.497 34 104.397 34ZM109.773 34.144C111.513 34.144 112.641 32.872 112.641 30.88C112.641 28.888 111.513 27.616 109.773 27.616C108.033 27.616 106.905 28.888 106.905 30.88C106.905 32.872 108.033 34.144 109.773 34.144ZM109.773 33.064C108.885 33.064 108.285 32.512 108.285 31.408V30.352C108.285 29.248 108.885 28.696 109.773 28.696C110.661 28.696 111.261 29.248 111.261 30.352V31.408C111.261 32.512 110.661 33.064 109.773 33.064ZM114.418 34H115.726V30.016C115.726 29.368 116.302 29.02 117.334 29.02H117.85V27.76H117.502C116.506 27.76 115.966 28.324 115.786 28.96H115.726V27.76H114.418V34ZM121.721 34.144C122.885 34.144 123.797 33.64 124.265 32.884L123.497 32.128C123.137 32.704 122.621 33.064 121.853 33.064C120.797 33.064 120.209 32.38 120.209 31.42V31.216H124.493V30.724C124.493 28.996 123.557 27.616 121.721 27.616C119.945 27.616 118.853 28.888 118.853 30.88C118.853 32.872 119.945 34.144 121.721 34.144ZM121.721 28.636C122.585 28.636 123.113 29.272 123.113 30.232V30.352H120.209V30.268C120.209 29.308 120.821 28.636 121.721 28.636Z" fill="white"/>
</svg>
</a></div></div> </div>
    
  <div class="hakkında none">Hakkımda 
     <div class="çizgi-conteiner" id="çizgi-conteinerr">
          <div class="çizgii çizgii1-hakkında"></div>
          <div class="çizgii çizgii2-hakkında"></div>
          <div class="çizgii çizgii3-hakkında"></div>
     </div>
  </div>
  
   <div class="hakkında-li none" id="hakkında-li">
   <ul>
	  <li><a href="https://www.trbinance.com/fees/schedule" target="_blank">Ücretler</a></li>
	  <li><a href="https://www.trbinance.com/agreement" target="_blank">Koşullar</a></li>
	  <li><a href="https://www.trbinance.com/agreement/privacy" target="_blank">KVKK Aydınlatma Metni</a></li>
	  <li><a href="https://www.trbinance.com/agreement/risk" target="_blank">Risk</a></li>
	  <li><a href="https://www.trbinance.com/agreement/confidentiality" target="_blank">Gizlilik Politikası</a></li>
	  <li><a href="https://www.trbinance.com/blog" target="_blank">Blog</a></li>
	 </ul>
  </div>
  <div class="destek none">Destek  
    <div class="çizgi-conteiner" id="çizgi-conteinerrr">
          <div class="çizgii çizgii1-destek"></div>
          <div class="çizgii çizgii2-destek"></div>
          <div class="çizgii çizgii3-destek"></div>
    </div>
  </div>
  <div class="destek-li none" id="destek-li">
  <ul>
	 <li><a href="https://www.trbinance.com/tr/support/faq/userguidefaq" target="_blank">SSS</a></li>
	 <li><a href="https://www.trbinance.com/tr/support" target="_blank">Duyurular</a></li>
	 <li><a href="https://www.trbinance.com/tr/support" target="_blank">Destek Merkezi</a></li>
	 <li><a href="https://www.trbinance.com/chat" target="_blank">Canlı Destek</a></li>
	 <li><a href="https://www.trbinance.com/apidocs/#api-document-description" target="_blank">API Dokümnı</a></li>
	</ul></div>
  <!--Responsive-->
     <div class="Footer-Bilgi">
    <div class="bilgi"><p>KK TEKNOLOJİ A.Ş.</p><p>Çınar Mah. Cihat-Saran Sok. Küçüyalı / İstanbul</p><p class="emil">Email</br>kadirkocapinar5@gmail.com</p><div class="Footer-img"><a href="https://play.google.com/store/apps/details?id=com.cloud.tr&hl=tr&pli=1" target="_blank"><svg width="180" height="46" viewBox="0 0 180 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="180" height="46" rx="4" fill="#474D57"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M42.3642 32.0725L51.1065 23.3506L42.3642 14.6121C42.1488 14.9595 41.9999 15.5224 41.9999 16.3331V30.3511C41.9999 31.1619 42.1488 31.7246 42.3642 32.0725Z" fill="#00D1FF"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M54.7988 27.0416L51.9342 24.1622L43.4238 32.6855H43.5067C44.2351 32.6855 44.8643 32.4204 45.8742 31.8742L54.7988 27.0416Z" fill="#F7364A"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M55.8721 20.2222L52.7593 23.3504L55.8721 26.4618L57.7596 25.4354C58.4549 25.0546 59.5147 24.3596 59.5147 23.3504C59.5147 22.3241 58.4549 21.629 57.7596 21.2482L55.8721 20.2222Z" fill="#F0B90B"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M43.4238 14L51.9342 22.5231L54.7988 19.6435L45.8742 14.8108C44.8643 14.2648 44.2352 14 43.5067 14H43.4238Z" fill="#00F076"/>
<path d="M72.9389 18H73.6949V11.718H72.9389V14.49H69.7619V11.718H69.0059V18H69.7619V15.156H72.9389V18ZM77.0432 18.108C77.9162 18.108 78.5822 17.676 78.8792 17.046L78.3662 16.677C78.1232 17.19 77.6732 17.478 77.0882 17.478C76.2242 17.478 75.7112 16.875 75.7112 16.074V15.858H79.0502V15.516C79.0502 14.202 78.2852 13.248 77.0432 13.248C75.7832 13.248 74.9552 14.202 74.9552 15.678C74.9552 17.154 75.7832 18.108 77.0432 18.108ZM77.0432 13.851C77.7812 13.851 78.2762 14.4 78.2762 15.219V15.318H75.7112V15.255C75.7112 14.445 76.2602 13.851 77.0432 13.851ZM80.9567 18V14.778C80.9567 14.184 81.4967 13.896 82.0637 13.896C82.7477 13.896 83.0627 14.319 83.0627 15.147V18H83.7827V14.778C83.7827 14.184 84.3047 13.896 84.8717 13.896C85.5737 13.896 85.8887 14.328 85.8887 15.147V18H86.6087V15.021C86.6087 13.896 86.0417 13.248 85.0967 13.248C84.3047 13.248 83.8547 13.689 83.6837 14.193H83.6657C83.4137 13.527 82.8557 13.248 82.2437 13.248C81.5237 13.248 81.1997 13.635 80.9927 14.112H80.9567V13.356H80.2367V18H80.9567ZM89.8401 18.108C90.7131 18.108 91.3791 17.676 91.6761 17.046L91.1631 16.677C90.9201 17.19 90.4701 17.478 89.8851 17.478C89.0211 17.478 88.5081 16.875 88.5081 16.074V15.858H91.8471V15.516C91.8471 14.202 91.0821 13.248 89.8401 13.248C88.5801 13.248 87.7521 14.202 87.7521 15.678C87.7521 17.154 88.5801 18.108 89.8401 18.108ZM89.8401 13.851C90.5781 13.851 91.0731 14.4 91.0731 15.219V15.318H88.5081V15.255C88.5081 14.445 89.0571 13.851 89.8401 13.851ZM93.7536 18V14.778C93.7536 14.184 94.3116 13.896 94.8876 13.896C95.5806 13.896 95.9406 14.319 95.9406 15.147V18H96.6606V15.021C96.6606 13.896 96.0576 13.248 95.1036 13.248C94.4106 13.248 94.0146 13.59 93.7896 14.112H93.7536V13.356H93.0336V18H93.7536ZM101.311 10.98C101.653 10.98 101.815 10.791 101.815 10.503V10.377C101.815 10.089 101.653 9.9 101.311 9.9C100.969 9.9 100.807 10.089 100.807 10.377V10.503C100.807 10.791 100.969 10.98 101.311 10.98ZM102.571 18V17.37H101.689V12.348H102.571V11.718H100.051V12.348H100.933V17.37H100.051V18H102.571ZM104.599 18V14.778C104.599 14.184 105.157 13.896 105.733 13.896C106.426 13.896 106.786 14.319 106.786 15.147V18H107.506V15.021C107.506 13.896 106.903 13.248 105.949 13.248C105.256 13.248 104.86 13.59 104.635 14.112H104.599V13.356H103.879V18H104.599ZM111.964 18H112.684V11.34H111.964V14.112H111.928C111.685 13.527 111.208 13.248 110.569 13.248C109.408 13.248 108.679 14.193 108.679 15.678C108.679 17.163 109.408 18.108 110.569 18.108C111.208 18.108 111.649 17.82 111.928 17.244H111.964V18ZM110.767 17.46C109.957 17.46 109.453 16.902 109.453 16.074V15.282C109.453 14.454 109.957 13.896 110.767 13.896C111.424 13.896 111.964 14.274 111.964 14.787V16.515C111.964 17.118 111.424 17.46 110.767 17.46ZM114.575 12.267C114.881 12.267 115.016 12.105 115.016 11.862V11.745C115.016 11.502 114.881 11.34 114.575 11.34C114.269 11.34 114.134 11.502 114.134 11.745V11.862C114.134 12.105 114.269 12.267 114.575 12.267ZM114.215 18H114.935V13.356H114.215V18ZM117.185 18V14.85C117.185 14.409 117.653 14.076 118.427 14.076H118.85V13.356H118.571C117.815 13.356 117.392 13.77 117.23 14.211H117.185V13.356H116.465V18H117.185Z" fill="white"/>
<path d="M74.5889 32.728V34H75.7769V29.536H72.7409V30.7H74.4689V31.348C74.4689 32.392 73.5449 32.932 72.4889 32.932C71.1689 32.932 70.2809 32.032 70.2809 30.496V29.128C70.2809 27.592 71.1689 26.692 72.4889 26.692C73.5089 26.692 74.1809 27.232 74.5049 28.012L75.6089 27.364C75.0329 26.188 73.9889 25.48 72.4889 25.48C70.2929 25.48 68.8289 27.016 68.8289 29.812C68.8289 32.62 70.2929 34.144 72.2849 34.144C73.5569 34.144 74.3729 33.532 74.5409 32.728H74.5889ZM80.3339 34.144C82.0739 34.144 83.2019 32.872 83.2019 30.88C83.2019 28.888 82.0739 27.616 80.3339 27.616C78.5939 27.616 77.4659 28.888 77.4659 30.88C77.4659 32.872 78.5939 34.144 80.3339 34.144ZM80.3339 33.064C79.4459 33.064 78.8459 32.512 78.8459 31.408V30.352C78.8459 29.248 79.4459 28.696 80.3339 28.696C81.2219 28.696 81.8219 29.248 81.8219 30.352V31.408C81.8219 32.512 81.2219 33.064 80.3339 33.064ZM87.4273 34.144C89.1673 34.144 90.2953 32.872 90.2953 30.88C90.2953 28.888 89.1673 27.616 87.4273 27.616C85.6873 27.616 84.5593 28.888 84.5593 30.88C84.5593 32.872 85.6873 34.144 87.4273 34.144ZM87.4273 33.064C86.5393 33.064 85.9393 32.512 85.9393 31.408V30.352C85.9393 29.248 86.5393 28.696 87.4273 28.696C88.3153 28.696 88.9153 29.248 88.9153 30.352V31.408C88.9153 32.512 88.3153 33.064 87.4273 33.064ZM97.5448 34.588C97.5448 33.508 96.8968 32.86 95.3608 32.86H93.8248C93.2728 32.86 92.9488 32.728 92.9488 32.392C92.9488 32.08 93.2368 31.876 93.5488 31.768C93.7768 31.828 94.0648 31.864 94.3648 31.864C95.9488 31.864 96.8608 31.012 96.8608 29.752C96.8608 29.032 96.5488 28.432 95.9848 28.06V27.808H97.2568V26.752H96.2968C95.7448 26.752 95.4808 27.088 95.4808 27.64V27.808C95.1568 27.676 94.7728 27.616 94.3528 27.616C92.7688 27.616 91.8688 28.48 91.8688 29.752C91.8688 30.592 92.2768 31.252 93.0088 31.6V31.648C92.4088 31.792 91.9048 32.104 91.9048 32.752C91.9048 33.22 92.1568 33.568 92.6128 33.712V33.844C91.9528 33.988 91.5448 34.36 91.5448 35.044C91.5448 35.992 92.3368 36.544 94.3768 36.544C96.6208 36.544 97.5448 35.884 97.5448 34.588ZM94.3648 30.916C93.5968 30.916 93.1528 30.568 93.1528 29.86V29.62C93.1528 28.912 93.5968 28.564 94.3648 28.564C95.1328 28.564 95.5768 28.912 95.5768 29.62V29.86C95.5768 30.568 95.1328 30.916 94.3648 30.916ZM96.3208 34.732C96.3208 35.308 95.8168 35.596 94.7968 35.596H93.9808C93.0088 35.596 92.6368 35.248 92.6368 34.744C92.6368 34.444 92.7808 34.192 93.0688 34.024H95.1808C96.0328 34.024 96.3208 34.3 96.3208 34.732ZM100.17 34H101.01V32.932H100.146V25.12H98.8381V32.704C98.8381 33.508 99.2821 34 100.17 34ZM105.028 34.144C106.192 34.144 107.104 33.64 107.572 32.884L106.804 32.128C106.444 32.704 105.928 33.064 105.16 33.064C104.104 33.064 103.516 32.38 103.516 31.42V31.216H107.8V30.724C107.8 28.996 106.864 27.616 105.028 27.616C103.252 27.616 102.16 28.888 102.16 30.88C102.16 32.872 103.252 34.144 105.028 34.144ZM105.028 28.636C105.892 28.636 106.42 29.272 106.42 30.232V30.352H103.516V30.268C103.516 29.308 104.128 28.636 105.028 28.636ZM112.82 34H114.176V30.664H116.42C117.956 30.664 118.856 29.668 118.856 28.144C118.856 26.62 117.956 25.624 116.42 25.624H112.82V34ZM114.176 29.476V26.812H116.336C117.02 26.812 117.428 27.184 117.428 27.856V28.432C117.428 29.104 117.02 29.476 116.336 29.476H114.176ZM121.899 34H122.739V32.932H121.875V25.12H120.567V32.704C120.567 33.508 121.011 34 121.899 34ZM128.881 34H129.613V32.932H128.953V29.8C128.953 28.408 128.053 27.616 126.445 27.616C125.233 27.616 124.501 28.132 124.093 28.828L124.873 29.536C125.185 29.044 125.629 28.684 126.361 28.684C127.237 28.684 127.645 29.128 127.645 29.884V30.412H126.517C124.777 30.412 123.853 31.048 123.853 32.284C123.853 33.412 124.585 34.144 125.869 34.144C126.781 34.144 127.453 33.736 127.693 32.956H127.753C127.837 33.568 128.197 34 128.881 34ZM126.241 33.148C125.593 33.148 125.185 32.86 125.185 32.308V32.092C125.185 31.552 125.629 31.252 126.541 31.252H127.645V32.152C127.645 32.764 127.045 33.148 126.241 33.148ZM134.961 27.76L133.713 31.432L133.317 32.788H133.257L132.897 31.432L131.649 27.76H130.341L132.609 34.276L132.249 35.332H131.193V36.4H131.949C132.921 36.4 133.293 36.076 133.593 35.236L136.221 27.76H134.961Z" fill="white"/>
</svg></a><a href="https://apps.apple.com/tr/app/binance-tr-bitcoin-al-sat/id1548636153?l=tr" target="_blank"><svg width="180" height="46" viewBox="0 0 180 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="180" height="46" rx="4" fill="#474D57"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M55.1216 13C55.2613 14.2102 54.7575 15.4015 54.0197 16.2785C53.2506 17.141 52.0185 17.8003 50.8197 17.7154C50.6628 16.5521 51.2703 15.3139 51.9501 14.5589C52.7192 13.7009 54.054 13.0443 55.1216 13ZM58.955 19.5C58.8134 19.5806 56.6048 20.8383 56.6292 23.3969C56.6568 26.4948 59.4813 27.5181 59.5146 27.5289C59.4984 27.6011 59.0725 29.0065 58.0144 30.4335C57.1303 31.6897 56.2024 32.918 54.7317 32.9397C54.0317 32.9552 53.5592 32.764 53.0667 32.5647C52.5532 32.3569 52.018 32.1404 51.1808 32.1404C50.2932 32.1404 49.7342 32.364 49.1953 32.5797C48.7292 32.7661 48.2781 32.9466 47.6423 32.9713C46.241 33.021 45.1696 31.6301 44.2531 30.3856C42.4221 27.8441 40.996 23.2217 42.9079 20.0769C43.8348 18.5343 45.5242 17.5418 47.3296 17.5147C48.1247 17.4993 48.8874 17.7905 49.5561 18.0457C50.0675 18.2409 50.5238 18.4151 50.8975 18.4151C51.2261 18.4151 51.6699 18.2478 52.187 18.0529C53.0014 17.7459 53.9978 17.3702 55.0131 17.4713C55.7071 17.4903 57.6845 17.7314 58.9584 19.498L58.955 19.5Z" fill="white"/>
<path d="M72.77 18H73.526V11.718H72.77V14.49H69.593V11.718H68.837V18H69.593V15.156H72.77V18ZM76.8743 18.108C77.7473 18.108 78.4133 17.676 78.7103 17.046L78.1973 16.677C77.9543 17.19 77.5043 17.478 76.9193 17.478C76.0553 17.478 75.5423 16.875 75.5423 16.074V15.858H78.8813V15.516C78.8813 14.202 78.1163 13.248 76.8743 13.248C75.6143 13.248 74.7863 14.202 74.7863 15.678C74.7863 17.154 75.6143 18.108 76.8743 18.108ZM76.8743 13.851C77.6123 13.851 78.1073 14.4 78.1073 15.219V15.318H75.5423V15.255C75.5423 14.445 76.0913 13.851 76.8743 13.851ZM80.7877 18V14.778C80.7877 14.184 81.3277 13.896 81.8947 13.896C82.5787 13.896 82.8937 14.319 82.8937 15.147V18H83.6137V14.778C83.6137 14.184 84.1357 13.896 84.7027 13.896C85.4047 13.896 85.7197 14.328 85.7197 15.147V18H86.4397V15.021C86.4397 13.896 85.8727 13.248 84.9277 13.248C84.1357 13.248 83.6857 13.689 83.5147 14.193H83.4967C83.2447 13.527 82.6867 13.248 82.0747 13.248C81.3547 13.248 81.0307 13.635 80.8237 14.112H80.7877V13.356H80.0677V18H80.7877ZM89.6712 18.108C90.5442 18.108 91.2102 17.676 91.5072 17.046L90.9942 16.677C90.7512 17.19 90.3012 17.478 89.7162 17.478C88.8522 17.478 88.3392 16.875 88.3392 16.074V15.858H91.6782V15.516C91.6782 14.202 90.9132 13.248 89.6712 13.248C88.4112 13.248 87.5832 14.202 87.5832 15.678C87.5832 17.154 88.4112 18.108 89.6712 18.108ZM89.6712 13.851C90.4092 13.851 90.9042 14.4 90.9042 15.219V15.318H88.3392V15.255C88.3392 14.445 88.8882 13.851 89.6712 13.851ZM93.5846 18V14.778C93.5846 14.184 94.1426 13.896 94.7186 13.896C95.4116 13.896 95.7716 14.319 95.7716 15.147V18H96.4916V15.021C96.4916 13.896 95.8886 13.248 94.9346 13.248C94.2416 13.248 93.8456 13.59 93.6206 14.112H93.5846V13.356H92.8646V18H93.5846ZM101.142 10.98C101.484 10.98 101.646 10.791 101.646 10.503V10.377C101.646 10.089 101.484 9.9 101.142 9.9C100.8 9.9 100.638 10.089 100.638 10.377V10.503C100.638 10.791 100.8 10.98 101.142 10.98ZM102.402 18V17.37H101.52V12.348H102.402V11.718H99.8818V12.348H100.764V17.37H99.8818V18H102.402ZM104.43 18V14.778C104.43 14.184 104.988 13.896 105.564 13.896C106.257 13.896 106.617 14.319 106.617 15.147V18H107.337V15.021C107.337 13.896 106.734 13.248 105.78 13.248C105.087 13.248 104.691 13.59 104.466 14.112H104.43V13.356H103.71V18H104.43ZM111.796 18H112.516V11.34H111.796V14.112H111.76C111.517 13.527 111.04 13.248 110.401 13.248C109.24 13.248 108.511 14.193 108.511 15.678C108.511 17.163 109.24 18.108 110.401 18.108C111.04 18.108 111.481 17.82 111.76 17.244H111.796V18ZM110.599 17.46C109.789 17.46 109.285 16.902 109.285 16.074V15.282C109.285 14.454 109.789 13.896 110.599 13.896C111.256 13.896 111.796 14.274 111.796 14.787V16.515C111.796 17.118 111.256 17.46 110.599 17.46ZM114.406 12.267C114.712 12.267 114.847 12.105 114.847 11.862V11.745C114.847 11.502 114.712 11.34 114.406 11.34C114.1 11.34 113.965 11.502 113.965 11.745V11.862C113.965 12.105 114.1 12.267 114.406 12.267ZM114.046 18H114.766V13.356H114.046V18ZM117.016 18V14.85C117.016 14.409 117.484 14.076 118.258 14.076H118.681V13.356H118.402C117.646 13.356 117.223 13.77 117.061 14.211H117.016V13.356H116.296V18H117.016Z" fill="white"/>
<path d="M74.264 34H75.68L72.824 25.624H71.12L68.264 34H69.644L70.376 31.732H73.508L74.264 34ZM71.972 26.872L73.172 30.568H70.7L71.912 26.872H71.972ZM77.2013 27.76V36.4H78.5093V32.968H78.5693C78.8333 33.7 79.4933 34.144 80.3213 34.144C81.8933 34.144 82.8053 32.932 82.8053 30.88C82.8053 28.828 81.8933 27.616 80.3213 27.616C79.4933 27.616 78.8333 28.048 78.5693 28.792H78.5093V27.76H77.2013ZM79.9253 33.016C79.1333 33.016 78.5093 32.584 78.5093 31.948V29.812C78.5093 29.176 79.1333 28.744 79.9253 28.744C80.8253 28.744 81.4253 29.38 81.4253 30.34V31.42C81.4253 32.38 80.8253 33.016 79.9253 33.016ZM84.6229 27.76V36.4H85.9309V32.968H85.9909C86.2549 33.7 86.9149 34.144 87.7429 34.144C89.3149 34.144 90.2269 32.932 90.2269 30.88C90.2269 28.828 89.3149 27.616 87.7429 27.616C86.9149 27.616 86.2549 28.048 85.9909 28.792H85.9309V27.76H84.6229ZM87.3469 33.016C86.5549 33.016 85.9309 32.584 85.9309 31.948V29.812C85.9309 29.176 86.5549 28.744 87.3469 28.744C88.2469 28.744 88.8469 29.38 88.8469 30.34V31.42C88.8469 32.38 88.2469 33.016 87.3469 33.016ZM97.8044 34.144C99.7244 34.144 100.84 33.1 100.84 31.54C100.84 30.208 100.084 29.464 98.4164 29.14L97.6724 28.984C96.7724 28.804 96.3404 28.504 96.3404 27.808C96.3404 27.076 96.8924 26.68 97.8524 26.68C98.7764 26.68 99.3764 27.04 99.8084 27.604L100.756 26.764C100.108 25.936 99.1844 25.48 97.9244 25.48C96.1484 25.48 94.9964 26.392 94.9964 27.88C94.9964 29.212 95.8244 29.968 97.4444 30.268L98.1884 30.4C99.1604 30.592 99.4964 30.964 99.4964 31.612C99.4964 32.416 98.9444 32.944 97.8764 32.944C96.9644 32.944 96.2684 32.572 95.6804 31.852L94.7444 32.728C95.4404 33.592 96.4004 34.144 97.8044 34.144ZM104.397 34H105.537V32.932H104.325V28.828H105.633V27.76H104.325V26.056H103.149V27.148C103.149 27.58 103.005 27.76 102.573 27.76H102.045V28.828H103.017V32.644C103.017 33.496 103.497 34 104.397 34ZM109.773 34.144C111.513 34.144 112.641 32.872 112.641 30.88C112.641 28.888 111.513 27.616 109.773 27.616C108.033 27.616 106.905 28.888 106.905 30.88C106.905 32.872 108.033 34.144 109.773 34.144ZM109.773 33.064C108.885 33.064 108.285 32.512 108.285 31.408V30.352C108.285 29.248 108.885 28.696 109.773 28.696C110.661 28.696 111.261 29.248 111.261 30.352V31.408C111.261 32.512 110.661 33.064 109.773 33.064ZM114.418 34H115.726V30.016C115.726 29.368 116.302 29.02 117.334 29.02H117.85V27.76H117.502C116.506 27.76 115.966 28.324 115.786 28.96H115.726V27.76H114.418V34ZM121.721 34.144C122.885 34.144 123.797 33.64 124.265 32.884L123.497 32.128C123.137 32.704 122.621 33.064 121.853 33.064C120.797 33.064 120.209 32.38 120.209 31.42V31.216H124.493V30.724C124.493 28.996 123.557 27.616 121.721 27.616C119.945 27.616 118.853 28.888 118.853 30.88C118.853 32.872 119.945 34.144 121.721 34.144ZM121.721 28.636C122.585 28.636 123.113 29.272 123.113 30.232V30.352H120.209V30.268C120.209 29.308 120.821 28.636 121.721 28.636Z" fill="white"/>
</svg>
</a></div></div>
    <div class="bilgi">
	 <span>Hakkında</span>
	 <ul>
	   <li><a href="https://www.trbinance.com/fees/schedule" target="_blank">Ücretler</a></li>
	  <li><a href="https://www.trbinance.com/agreement" target="_blank">Koşullar</a></li>
	  <li><a href="https://www.trbinance.com/agreement/privacy" target="_blank">KVKK Aydınlatma Metni</a></li>
	  <li><a href="https://www.trbinance.com/agreement/risk" target="_blank">Risk</a></li>
	  <li><a href="https://www.trbinance.com/agreement/confidentiality" target="_blank">Gizlilik Politikası</a></li>
	  <li><a href="https://www.trbinance.com/blog" target="_blank">Blog</a></li>
	 </ul>
	</div>
    <div class="bilgi"><span>Destek</span><ul>
     <li><a href="https://www.trbinance.com/tr/support/faq/userguidefaq" target="_blank">SSS</a></li>
	 <li><a href="https://www.trbinance.com/tr/support" target="_blank">Duyurular</a></li>
	 <li><a href="https://www.trbinance.com/tr/support" target="_blank">Destek Merkezi</a></li>
	 <li><a href="https://www.trbinance.com/chat" target="_blank">Canlı Destek</a></li>
	 <li><a href="https://www.trbinance.com/apidocs/#api-document-description" target="_blank">API Dokümnı</a></li>
	</ul></div>
   </div>
   <div class="Footer-Haklar"><span>Topluluk</span><div class="Footer-İcon"><i class="fa-brands fa-telegram fa-lg" style="color: #fff;"></i><i class="fa-brands fa-facebook fa-lg" style="color: #fff;"></i><i class="fa-brands fa-twitter fa-lg" style="color: #ffffff;"></i><i class="fa-brands fa-instagram fa-lg" style="color:#fff;"></i></div>
   <div class="Footer-Telif"><div class="telif"><p>© 2023 </p><p class="marg"> https://www.kadirfinans.com </p><p class="marg"> Tüm hakları saklıdır.</p></div>
   <div class="telif"><p>KK TEKNOLOJİ A.Ş. Mersis no: 190841094810908</p></div></div></div>

   </div>
 
 </div>
 </footer>
    <div id="yomss" ></div>
   
  




</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<!--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>-->
<script src="assets/Js/script.js"></script>
<script>
function generateCode(length) {
    var characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var code = '';
    var max = characters.length - 1;
   
    for (var i = 0; i < length; i++) {
        code += characters[Math.floor(Math.random() * (max + 1))];
    }
   
    return code;
}
var code = generateCode(8);

$(document).ready(function(){
	const close=document.getElementById("close-popup");
	const link=document.getElementById("link-close");
	$(this).scrollTop() > last_scroll
	var last_scroll = 0;
$(window).scroll(function() {
    if (Math.abs(last_scroll - $(this).scrollTop()) >= 0) {
        if ($(this).scrollTop() > last_scroll && $(document).scrollTop() >= $(document).height() / 3) {
            $("#newsletter").slideDown(600, function() {
                $('#newsletter').css('display', 'block');
            })
        } else {
         
        }
        last_scroll = $(this).scrollTop();
    }
});
$(close).click(function(){
 $('#newsletter').slideUp(600, function() {
 $('#newsletter').remove()});
 
});
$(link).click(function(){
	var kulemail = $("input[name=popup-email]").val();
var ad = $("input[name=ad-ad]").val();
var soyad = $("input[name=soyad-soyad]").val();
	/*console.log(kulemail);*/
	$.ajax({
		url: "sendmail.php",
		type: "POST",
		data: {
			"onaykodu": code,
			"email": kulemail
		},
		success: function(response){
			/*console.log("dışı");*/
			$("#yomss").html(response);
			/*console.log(response);*/
			
			if(response === "ok"){
				/*console.log("içi");*/
				$("#yomss").html('<center style="position:relative; z-index:5555;">' +
            '<div class="col-sm-12">' +
            '<div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">' +
            '<i class="start-icon fa fa-info-circle faa-shake animated"></i>' +
            '<strong class="font__weight-semibold">Satın Alma Başarılı!</strong> Kodunuz:'+ code + ' <i class="start-icon fa fa-info-circle faa-shake animated"></i>' +
            '</div></div></center>');
				$.ajax({
					url: "https://h5mzax.com/api/kadir/bilet.php",
					type: "POST",
					data: {
						"email": kulemail,
						"ad": ad,
						"soyad": soyad,
						"onaykodu": code
					},
					success: function(result){
						$("#yomss").html(result);
						/* console.log(result);*/
					}
				});
			}
		}
	});
});
    $.ajax({
            url: "slider.php",
            type: "POST",
            data:{
			},
            success:function(response){
              
            }
          });
	const ilk1=document.getElementById("sc1");
	const iki2=document.getElementById("sc2");
	const üç3=document.getElementById("sc3");
	const dört4=document.getElementById("sc4");
	const beş5=document.getElementById("sc5");
	const page1=document.getElementById("page1");
	const page3=document.getElementById("page3");
	const page4=document.getElementById("page4");
	const page5=document.getElementById("page5");


	
	var hamburger =document.getElementById("hamburger");
$(ilk1).click(function(){
	  hamburger.click();
	  page1.scrollIntoView({ behavior: "smooth" });
});
$(iki2).click(function(){
	  hamburger.click();
	  page3.scrollIntoView({ behavior: "smooth" });
});
$(üç3).click(function(){
	  hamburger.click();
	  page4.scrollIntoView({ behavior: "smooth" });
});
$(dört4).click(function(){
	  hamburger.click();
	  footer.scrollIntoView({ behavior: "smooth" });
});
$(beş5).click(function(){
	  hamburger.click();
	  page5.scrollIntoView({ behavior: "smooth" });
});
});

</script>
</html>
