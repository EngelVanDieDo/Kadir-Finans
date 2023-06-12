<?php
session_start();
if ($_POST) {
	$biletkul=$_POST["bilet"];
$ipAdresi = $_SERVER['REMOTE_ADDR'];
$biletkul=$_POST["bilet"];
$kullaniciAdi = $_SESSION["kullaniciadi"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yorum-ajax";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

$sql = "SELECT * FROM bilet WHERE kullanıcı_ad = '$kullaniciAdi'";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM bilet WHERE ip_adresi= '$ipAdresi'";
$result2 = $conn->query($sql2);

if ($result->num_rows > 0 ){
  
    while ($row = $result->fetch_assoc()) {
    
        $kod = $row["kod"];
		if($biletkul==$kod){
						 echo'<center style="position:relative; z-index:5555;">
	  <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
          <i class="fa fa-spinner fa-pulse fa-lg fa-fw"></i>
          <strong class="font__weight-semibold">Yönlendiriliyor!</strong> Lütfen Bekleyiniz Kursa Yönlendiriliyorsunuz
        </div>
      </div>
	  </center> ';
	  		 echo "<script>
    setTimeout(function() {
        window.location.href = 'kurs.php'; 
    }, 2500); 
</script>";
	$secim= "SELECT * FROM bilet WHERE kullanıcı_ad = '$kullaniciAdi'";
$calistir=mysqli_query($conn,$secim);
	$kayitsayisi= mysqli_num_rows($calistir);
	$ilgilikayit = mysqli_fetch_assoc($calistir);
	 $_SESSION["kod"]=$ilgilikayit["kod"];
		}
		else{
			     echo '
                    <center>
                    <div class="col-sm-12">
                    <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
                    <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong> Geçersin bilet numarası!<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
                    </div>
                    </div>
                    </center>';
		}
      
      
    }
	
}
else if($result2->num_rows > 0){
	 while ($row = $result2->fetch_assoc()) {
    
        $kod = $row["kod"];
		if($biletkul==$kod){
			 echo'<center style="position:relative; z-index:5555;">
	  <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
          <i class="fa fa-spinner fa-pulse fa-lg fa-fw"></i>
          <strong class="font__weight-semibold">Yönlendiriliyor!</strong> Lütfen Bekleyiniz Kursa Yönlendiriliyorsunuz
        </div>
      </div>
	  </center> ';
	  		 echo "<script>
    setTimeout(function() {
        window.location.href = 'kurs.php'; 
    }, 2500); 
</script>";
	
	  $secim= "SELECT * FROM bilet WHERE ip_adresi= '$ipAdresi'";
$calistir=mysqli_query($conn,$secim);
	$kayitsayisi= mysqli_num_rows($calistir);
	$ilgilikayit = mysqli_fetch_assoc($calistir);
	 $_SESSION["kod"]=$ilgilikayit["kod"];
		}
		else{
			     echo '
                    <center>
                    <div class="col-sm-12">
                    <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
                    <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong> Geçersin Bilet Numarası!<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
                    </div>
                    </div>
                    </center>';
			
		}
      
      
    }
}
else {
echo '
                    <center>
                    <div class="col-sm-12">
                    <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
                    <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong>Bir Hata Oluştu!<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
                    </div>
                    </div>
                    </center>';
}


$conn->close();
}

?>
