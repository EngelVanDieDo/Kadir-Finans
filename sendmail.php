<?php
session_start();
if ($_POST) {
    $kod = $_POST["onaykodu"];
	$email = $_POST["email"];
    $kullaniciAdi = $_SESSION["kullaniciadi"];
    $ipAdresi = $_SERVER['REMOTE_ADDR'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yorum-ajax";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
    }

   
if($email !=""){
	      if (strpos($email, "@gmail.com")!== false || strpos($email, "@hotmail.com") !== false) {
    $sql2 = "SELECT * FROM bilet WHERE kullanıcı_ad = '$kullaniciAdi'";
    $result2 = $conn->query($sql2);
    $sql3 = "SELECT * FROM bilet WHERE ip_adresi = '$ipAdresi'";
    $result3 = $conn->query($sql3);
    if (!$result2->num_rows != 0 && !$result3->num_rows != 0) {
    
        $sql = "INSERT INTO bilet (kod, kullanıcı_ad, ip_adresi) VALUES ('$kod', '$kullaniciAdi', '$ipAdresi')";
        echo "ok";
        if ($conn->query($sql) === true) {
         
        } else {
          
        }

        $conn->close();
    } else {
      	 echo'<center style="position:relative; z-index:5555;">
	  <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Uyarı!</strong> Zatan Daha Önceden Almışsınız!<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div>
      </div>
	  </center>';
        $conn->close();
    }
			}else{
				echo'<center style="position:relative; z-index:5555;">
	  <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Uyarı!</strong> Lütfen Geçerli Bir Email Giriniz!<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div>
      </div>
	  </center>';
			}
	}
else{
	   	 echo'<center style="position:relative; z-index:5555;">
	  <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Uyarı!</strong> Lütfen Bir Email Giriniz!<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div>
      </div>
	  </center>';
}
}



?>
