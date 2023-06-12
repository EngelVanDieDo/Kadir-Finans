<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yorum-ajax";
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$kullanici = $_POST["kullanici"];
$sifre = $_POST["sifre"];
$sifreD = $_POST["sifreD"];
$ip = $_SERVER['SERVER_ADDR'];

if($_POST){
    if($ad!="" and $soyad!="" and $kullanici!="" and $sifre!="" and $sifreD!=""){
    if ($sifre==$sifreD) {
        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
		       $checkSql = "SELECT kullanıcı_ad FROM kisiler WHERE kullanıcı_ad = :kullanici";
                $checkStmt = $conn->prepare($checkSql);
                $checkStmt->bindParam(':kullanici', $kullanici);
                $checkStmt->execute();
                $existingUser = $checkStmt->fetchColumn();
				if ($existingUser) {
                    echo '
		  <center style="position:relative; z-index:5555;">
		<div class="col-sm-12">
        <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
          
		  <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong> Kullanıcı adı sistemimizde kayıtlıdır,lütfen başka bir kullanıcı adı giriniz <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div

      </div>
	    </center>
	  '; 
                }
				else{
			$sql = "INSERT INTO kisiler (kullanıcı_ad, kullanıcı_sifre, ad, soyad, ip_adresi) 
        VALUES (:kullanici, :sifre, CONCAT(UCASE(LEFT(:ad, 1)), SUBSTRING(:ad, 2)), CONCAT(UCASE(LEFT(:soyad, 1)), SUBSTRING(:soyad, 2)), :ip)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':ad', $ad);
$stmt->bindParam(':soyad', $soyad);
$stmt->bindParam(':kullanici', $kullanici);
$stmt->bindParam(':sifre', $sifre);
$stmt->bindParam(':ip', $ip);
    
    
            $stmt->execute();
    	 echo'<center style="position:relative; z-index:5555;">
	  <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
          <i class="fa fa-spinner fa-pulse fa-lg fa-fw"></i>
          <strong class="font__weight-semibold">Yönlendiriliyor!</strong> Lütfen bekleyiniz giriş ekranına yönlendiriliyorsunuz
        </div>
      </div>
	  </center>';
           echo '
		  <center  style="position:relative; z-index:5555;" >
		<div class="col-sm-12">
        <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
          <i class="start-icon  fa fa-info-circle faa-shake animated"></i>
	
          <strong class="font__weight-semibold">Başarılı! </strong> Kayıt tamamlanmıştır <i class="start-icon  fa fa-info-circle faa-shake animated"></i>
        </div>
      </div>
	    </center>
	  ' ;
	  
	  
	 echo "<script>
    setTimeout(function() {
        window.location.href = 'giris.php'; 
    }, 2500); 
</script>";

        }
				}
            
            catch(PDOException $e) {
            echo "Hata: " . $e->getMessage();
        }
    }
    else {
		 
 echo '
		  <center style="position:relative; z-index:5555;">
		<div class="col-sm-12">
        <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
          
		  <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong> Lütfen aynı şifreyi giriniz <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div

      </div>
	    </center>
	  '; 
	 

    }

	
}
else{
    echo '
	    <center>
		<div class="col-sm-12">
        <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
          
		  <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong> Lütfen alanları doldurunuz <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div

      </div>
	  </center>
	 ';
	 
}}


?>
