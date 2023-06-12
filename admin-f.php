<?php 
include "baglan.php";
if($_POST){
	
            $tarih=$_POST["tarih"];
            $baslik=$_POST["baslik"];
            $içerik=$_POST["içerik"];
			$tarihh = date("d-m-Y");
            $asd = date("H:i:s");
$zaman = date("H:i:s", strtotime($asd) + 3600);
               if($tarih!="" and $baslik!="" and $içerik!=""){
               $sorgu=$db->prepare("INSERT INTO slider (tarih,baslik,icerik,eklenme_tarih,eklenme_zaman) values (?,?,?,?,?)");
               $ekle = $sorgu->execute(array($tarih,$baslik,$içerik,$tarihh,$zaman));
               if($ekle){
                echo"Text Başarıyla Eklendi!";
               }
               else{
                echo "Text Eklenirken Bir Sorun Yaşandı!";
               }
               }
               else{
               echo "Lütfen Alanları Doldurunuz!";
               }
            }?>