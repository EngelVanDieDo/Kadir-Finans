<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt</title>
			<script src="https://kit.fontawesome.com/d304e2ee71.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/Css/alert.css" >
    <link rel="stylesheet" type="text/css" href="assets/Css/kayıt.css">
	<link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
</head>
<body>
<div class="login-box bordere">

  <div class="box" style="--color:red;">
    <form id="kayit-formu" method="POST">
    <div class="user-box">
     <input type="text" id="ad" name="ad"  required>
      <label>Adınız</label>
    </div>
    <div class="user-box">
     <input type="text" id="soyad" name="soyad" required>
      <label>Soy Adınız</label>
    </div>

    <div class="user-box">
     <input type="text" id="kullanici" name="kullanici" required>
      <label>Kullanıcı Adı</label>
    </div>

     
	 
        <div class="user-box">
     <input type="password" id="sifre" name="sifre" required>
      <label>Şifre</label>
    </div>
        <div class="user-box">
      <input type="password" id="sifreD" name="sifreD"  required>
      <label>Şifre Doğrulama</label>
    </div>
        <button type="submit"  id="button">Kayıt Ol</button>
        <div class="buton" id="dd">Giriş yap</div>
    </form>
  </div>
  </div>
    <div id="yoms" ></div>
</body>
<script>
    $(document).ready(function(){
		var buton=document.getElementById("button");
				var butoon=document.getElementById("dd");
        $(buton).click(function(event){
            event.preventDefault(); // Formun otomatik olarak gönderilmesini engelle

            var ad = $("#ad").val();
            var soyad = $("#soyad").val();
            var kullanici = $("#kullanici").val();
            var sifre = $("#sifre").val();
            var sifreD = $("#sifreD").val();

            $.ajax({
                url: "kayıt-f.php",
                type: "POST",
                data: {
                    "ad": ad,
                    "soyad": soyad,
                    "kullanici": kullanici,
                    "sifre": sifre,
                    "sifreD": sifreD
                },
                success: function(result) {
                    $("#yoms").html(result);
					
                }
            });
			
        });
		$(butoon).click(function(){
			window.location.href = 'giris.php'; 
		});
	
    });
</script>
</html>
