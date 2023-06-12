<?php
include 'baglan.php';

if ($_POST) {
	$username=$_POST['gelenusername'];
	$sifre=$_POST['gelensifre'];
	if(isset($username)&&isset($sifre)){
	$secim= "SELECT * FROM kisiler WHERE kullanıcı_ad='$username'";
	

	$calistir=mysqli_query($db,$secim);
	$kayitsayisi= mysqli_num_rows($calistir);
	$ilgilikayit = mysqli_fetch_assoc($calistir);

	if($username!="" and $sifre!=""){
	if ($kayitsayisi>0){
		
		$sifree=$ilgilikayit["kullanıcı_sifre"];
		$admin=$ilgilikayit["admin"];
		$banlı=$ilgilikayit["ban"];
		
		if ($sifre==$sifree){
			$veriip=$ilgilikayit["ip_adresi"];
			$kulip = $_SERVER['REMOTE_ADDR'];
			
				
			    session_start();
                    $_SESSION["ad"]=$ilgilikayit["ad"];
                    $_SESSION["soyad"]=$ilgilikayit["soyad"];
                  	$_SESSION["kullaniciadi"]=$ilgilikayit["kullanıcı_ad"];
					if($admin>0){
						
					$_SESSION["kullaniciadmin"]=$ilgilikayit["admin"];
					}
					if($banlı>0){
						
					$_SESSION["kullaniciban"]=$ilgilikayit["ban"];
					}
                         

					echo "<script>
    setTimeout(function() {
        window.location.href = 'index.php'; 
    }, 1); 
</script>";
	
			
			
		}
		else {
			echo '
		<center>
		<div class="col-sm-12">
        <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
          
		  <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong>  Yanlış Şifre <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div

      </div>
	  </center>';
		}
	}

	else {
		echo '
		<center>
		<div class="col-sm-12">
        <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" role="alert" data-brk-library="component__alert">
   
		  <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i><strong class="font__weight-semibold">Başarısız! </strong>  Kullanıcı adı yada Şifre yanlış  <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div>

      </div>
	  </center>';
	}
	}else{
			    	 echo'<center style="position:relative; z-index:5555;">
	  <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
          <strong class="font__weight-semibold">Uyarı!</strong> Lütfen Bütün Alanları Doldurunuz!<i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
        </div>
      </div>
	  </center>';
	}
	
 }
}

?>