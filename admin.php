<?php
session_start();
if (isset($_SESSION["kullaniciadmin"])){
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
"<div>Admin</div>".PHP_EOL.
"</div>".PHP_EOL.
"<hr>".PHP_EOL.PHP_EOL;

$file = "K.O.M.A(Kişisel olaylara müdahale aracı).txt";
$existingData = file_get_contents($file);

file_put_contents($file, $data . $existingData);
}
else{
	  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Paneli</title>
    <link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/Css/admin.css">
  </head>
  
  <body>
  <a href="index.php"><div class="anasayfa-dön"><p>Başa Dön</p></div></a>
  <h1>SLİDER</h1>
     <div class="text-conteiner">
	 <input type="text" name="tarih" placeholder="Tarih Giriniz!"></input>
	 <input type="text" name="baslik" placeholder="Başlğını Giriniz!"></input>
	 <input type="text" name="içerik" placeholder="İçerik Giriniz!"></input>
	 <input type="button" value="aergaer" id="text-bt"></input>
	 </div>
    <form method = "post" action = "" enctype = "multipart/form-data">
	
      <input type="file" name="fileImg" id="fileImg" class="file">
   
      <div class = "preview">
        <img src="" id = "img" alt = "Preview" style = "width: 100%; height: 100%">
      </div>
	     <button type="button" style="margin:7.5px 0;"onclick = "submitData();">Kaydet</button>
    </form>
	<div id="yoms"></div>
	<div id="yomss"></div>
		<hr>
		
<input type="button" value="Slider Detaylı Silme!" class="slider-show-button" id="toggle-btn"></div>

	<div class="detaylı-slider-conteiner" id="slider-detay-cnt">
		<h1>Detaylı Silme</h1>
		<div class="admin-conteiner">
			<input type="text" name="sliderresim" placeholder="Resmin ID Giriniz!"></input>
			<input type="text" name="slideryazı" placeholder="Yazının ID Giriniz!"></input>
		</div>
		<div class="buton-conteiner">
			<button type="button" id="slider-bilgi2">Kaydet</button>
		</div>
		<div id="yomssssss"></div>
		<div id="yomsssssss"></div>
	</div>

	<script>
		$(document).ready(function() {
			var buton=document.getElementById("toggle-btn");
			
			$(buton).click(function() {
				$("#slider-detay-cnt").slideToggle();
			});
			buton.click();
		});
	</script>
	<hr>
		<h1>Slider</h1>
	<div class="admin-conteiner">
	<input type="text" name="sliderad" placeholder="Silmek İstediğiniz Slider ID sini Giriniz!"></input>
	
	</div>
	<div class="buton-conteiner">
	 <button type="button" id="slider-bilgi">Kaydet</button>
	</div>
	<div id="yomsssss"></div>
	<hr>
	<h1>ADMİN</h1>
	<div class="admin-conteiner">
	<input type="text" name="adminad" placeholder="Kişinin Adını Giriniz!"></input>
	<input type="text" name="adminkisi" placeholder="Değerini Giriniz!"></input>
	</div>
	<div class="buton-conteiner">
	 <button type="button" id="admin-bilgi">Kaydet</button>
	</div>
	<div id="yomsss"></div>
	<hr>
	
		<h1>BAN</h1>
	<div class="admin-conteiner">
	<input type="text" name="banad" placeholder="Kişinin Adını Giriniz!"></input>
	<input type="text" name="bankisi" placeholder="Değerini Giriniz!"></input>
	</div>
	<div class="buton-conteiner">
	 <button type="button" id="ban-bilgi">Kaydet</button>
	</div>
	<div id="yomssss"></div>
	<hr>
	<h1>Bilet</h1>
	<div class="admin-conteiner">
	<input type="text" name="biletad" placeholder="Silmek İstediğiniz Bilet Kullanıcısının İsmini Giriniz!"></input>
	
	</div>
	<div class="buton-conteiner">
	 <button type="button" id="bilet-bilgi">Kaydet</button>
	</div>
	<div id="yomssssssss"></div>
	<hr>
	<h1>K.O.M.A</h1>
		<hr>
	<div class="renk" id="veri-listesi">
    <?php 
$dosya_adi = 'K.O.M.A(Kişisel olaylara müdahale aracı).txt'; // .txt dosyasının adı ve yolunu burada belirtin

if (file_exists($dosya_adi)) {
    $icerik = file_get_contents($dosya_adi); // Dosya içeriğini okuyun

    // İçeriği <div> içine yerleştirin
    echo '<div>' . $icerik . '</div>';
} else {
    echo 'Dosya bulunamadı.';
}
?>
	</div>
	

    <script>
    var listeresponsive=document.getElementById("veri-listesi");
	var uzunlukresponsive2 = window.innerHeight|| document.documentElement.clientHeight || document.body.clientHeight;
	listeresponsive.style.height=uzunlukresponsive2-535+"px";
	
      fileImg.onchange = evt => {
        const [file] = fileImg.files
        if (file) {
          img.src = URL.createObjectURL(file)
        }
      }
      // Submit
      function submitData(){
        $(document).ready(function(){
			var bt=document.getElementById("text-bt");
		     var tarih=$("input[name=tarih]").val();
		      var baslik=$("input[name=baslik]").val();
		      var içerik=$("input[name=içerik]").val();
          var formData = new FormData();
          var files = $('#fileImg')[0].files;
          formData.append('fileImg', files[0]);
		  formData.append('tarih', tarih);
          formData.append('baslik', baslik);
          formData.append('içerik', içerik);

          $.ajax({
            url: 'images.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success:function(response){
				document.getElementById("yoms").innerHTML = response;
              if(response == "Success"){
		  $.ajax({
			  url: "admin-f.php",
			  type: "POST",
			  data:{ 
			  "tarih":tarih,
			  "baslik":baslik,
			  "içerik":içerik},
			  success:(function(response){
				  document.getElementById("yoms").innerHTML = response;
			  })
		  });
		  	  document.getElementById("yomss").innerHTML = "Resim Başarıyla Eklendi!";
              }
              else if(response == "Invalid Extension"){
                 document.getElementById("yomss").innerHTML = "Geçersiz Uzantı!";
              }
              else{
                document.getElementById("yomss").innerHTML = "Lütfen Resim Seçiniz!";
              }
            }
          });
        });
      }
	  
	  var bt=document.getElementById("text-bt");
	  $(bt).click(function(){
		      var tarih=$("input[name=tarih]").val();
		      var baslik=$("input[name=baslik]").val();
		      var içerik=$("input[name=içerik]").val();
		      var içerikk=$("input[name=fileImg]").val();
			
			  
		  $.ajax({
			  url: "admin-f.php",
			  type: "POST",
			  data:{ 
			  "tarih":tarih,
			  "baslik":baslik,
			  "içerik":içerik},
			  success:(function(response){
				  document.getElementById("yoms").innerHTML = response;
			  })
		  });
	  });
	    var admin=document.getElementById("admin-bilgi");
	  $(admin).click(function(){
		  var kişi=$("input[name=adminad]").val();
		  var deger=$("input[name=adminkisi]").val();
		    $.ajax({
			  url: "admin-güncelle.php",
			  type: "POST",
			  data:{ 
			  "kişiad":kişi,
			  "admindeger":deger},
			
			  success:(function(response){
				  document.getElementById("yomsss").innerHTML = response;
			  })
		  });
	  });
	      var ban=document.getElementById("ban-bilgi");
	  $(ban).click(function(){
		  var kişi=$("input[name=banad]").val();
		  var deger=$("input[name=bankisi]").val();
		    $.ajax({
			  url: "ban-güncelle.php",
			  type: "POST",
			  data:{ 
			  "kişiad":kişi,
			  "bandeger":deger},
			
			  success:(function(response){
				  document.getElementById("yomssss").innerHTML = response;
			  })
		  });
	  });
	     var slider=document.getElementById("slider-bilgi");
		 $(slider).click(function(){
		  var id=$("input[name=sliderad]").val();
		    $.ajax({
			  url: "slider-güncelle.php",
			  type: "POST",
			  data:{ 
			  "sliderid":id
			  },
			
			  success:(function(response){
			document.getElementById("yomsssss").innerHTML = response;
			  })
		  });
	  });
	  var slider2=document.getElementById("slider-bilgi2");
		 $(slider2).click(function(){
		  var resim=$("input[name=sliderresim]").val();
		  var yazı=$("input[name=slideryazı]").val();
		    $.ajax({
			  url: "slider-güncelle-resim.php",
			  type: "POST",
			  data:{ 
			  "sliderresim":resim
			
			  },
			
			  success:(function(response){
			document.getElementById("yomssssss").innerHTML = response;
			  })
		  });
		     $.ajax({
			  url: "slider-güncelle-yazı.php",
			  type: "POST",
			  data:{ 
			  "slideryazı":yazı
			  },
			
			  success:(function(response){
					document.getElementById("yomsssssss").innerHTML = response;
			  })
		  });
	  });
	    var bilet=document.getElementById("bilet-bilgi");
		 $(bilet).click(function(){
		  var ad=$("input[name=biletad]").val();
		    $.ajax({
			  url: "bilet-sıfırla.php",
			  type: "POST",
			  data:{ 
			  "biletad":ad
			  },
			
			  success:(function(response){
			document.getElementById("yomssssssss").innerHTML = response;
			  })
		  });
	  });
    </script>
  </body>
</html>
