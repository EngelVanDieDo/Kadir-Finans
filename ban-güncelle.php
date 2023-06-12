<?php
include "baglan.php";
if($_POST){
$kişi = $_POST['kişiad'];
$bangüncel = $_POST['bandeger'];
if ( $kişi !="" and $bangüncel !=""){
if (strpos($bangüncel, "1") !== false || strpos($bangüncel, "0") !== false) {
if ($db->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $db->connect_error);
}



$sql = "SELECT * FROM kisiler WHERE kullanıcı_ad = '$kişi'";
$result = $db->query($sql);

if ($result->num_rows > 0) {

    $sql = "UPDATE kisiler SET ban = '$bangüncel' WHERE  kullanıcı_ad = '$kişi'";

    if ($db->query($sql) === TRUE) {
        echo "Ban başarıyla güncellendi.";
    } else {
        echo "Güncelleme sırasında hata oluştu: " . $db->error;
    }
} else {
   echo "Böyle bi kullanıcı bulunamadı";
}


$db->close();
}else{
	echo "Sadece 1(Banlı) ve 0(Banlı Değil) Değerlerini Giriniz!";
}
}
else{
	echo "Lütfen Alanları Doldurunuz!";
}
}
?>