<?php 
include "baglan.php";
session_start();
if($_POST){switch ($_GET["mode"]) {
    case 'insert':
        if($_POST){
            $ad=$_SESSION["ad"];
            $soyad=$_SESSION["soyad"];
            $yorum=$_POST["yorum"];
			$gün = date("d-m-Y ");
			$zaman = date("H:i:s");
               if($ad!="" and $soyad!="" and $yorum!=""){
               $sorgu=$db->prepare("INSERT INTO yorumlar (ad,soyad,yorum,gün,zaman) values (?,?,?,?,?)");
               $ekle = $sorgu->execute(array($ad,$soyad,$yorum,$gün,$zaman));
               if($ekle){
                echo"Yorumunuz için teşekkürler";
               }
               else{
                echo "Yorum yapılamadı";
               }
               }
               else{
               echo "Lütfen Alanları Doldurunuz! ";
               }
            }
        break;  
}
}

?>
