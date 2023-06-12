<?php 
include "baglan.php";
if($_POST){
$resim = $_POST["sliderresim"];
if( $resim !=""){
if ($db->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $db->connect_error);
}

$sql = "DELETE FROM tb_upload WHERE id = $resim";
if ($db->query($sql) === TRUE){
    echo "ID $resim başarıyla silindi.";
} else {
    echo "ID silinirken hata oluştu: " . $conn->error;
}
}
else{
		echo "Resim ID'si Boş!";
}
}


?>