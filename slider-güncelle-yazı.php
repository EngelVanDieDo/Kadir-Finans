<?php 
include "baglan.php";
if($_POST){
$yazı = $_POST["slideryazı"];
if( $yazı!=""){
if ($db->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $db->connect_error);
}

$sql = "DELETE FROM slider WHERE ID = $yazı";
if ($db->query($sql) === TRUE){
    echo "ID $yazı başarıyla silindi.";
}
else {
    echo "ID silinirken hata oluştu: " . $conn->error;
}
}
else{
	echo "Yazı ID'si Boş!";
}
}


?>