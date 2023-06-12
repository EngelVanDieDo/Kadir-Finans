<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0"/>
    <title>Kayıt</title>
		<script src="https://kit.fontawesome.com/d304e2ee71.js" crossorigin="anonymous"></script>
	   <link rel="stylesheet" type="text/css" href="assets/Css/alert.css" >
	   <link rel="stylesheet" type="text/css" href="assets/Css/kayıt.css">
	   <link rel="icon" type="image/png" href="assets/İmg/logo-bgc.svg">
	  

 </head>

<body>
<div class="login-box bordere">

  <div class="box" style="--color:red;">
    <form id="kayit-formu" >
	
	<div class="user-box">
     <input type="text" id="kullanici" name="gelenusername" required>
      <label>Kullanıcı Adı</label>
    </div>

       

        <div class="user-box">
     <input type="password" id="sifre" name="gelensifre" required>
      <label>Şifre</label>
    </div>
      <button type="submit" name="giris" id="button">Giriş Yap</button>
        <button type="submit" name="kayit" id="dd">Kayıt Ol</button>
      
    </form>
	</div>
	</div>
    <div id="yoms"> </div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
    $(document).ready(function(){
			var buton=document.getElementById("button");
				var butoon=document.getElementById("dd");
		  $(buton).click(function(event){
            event.preventDefault(); // Formun otomatik olarak gönderilmesini engelle

            var kullanici = $("#kullanici").val();
            var sifre = $("#sifre").val();
 

            $.ajax({
                url: "giris-f.php",
                type: "POST",
                data: {
          
                    "gelenusername": kullanici,
                    "gelensifre": sifre
                
                },
                success: function(result) {
                    $("#yoms").html(result);
					
                }
            });
			
        });
		$(butoon).click(function(){
			window.location.href = 'kayıt.php'; 
		});
    });
</script>
</html>

